<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $search = $request->search;

        $users = User::where(function ($query) use ($search){
            if ($search) {
                $query->where('email', $search);
                $query->orWhere('name', 'LIKE', "%{$search}%");
            }
        })->get();

        //$users = User::get();

        // dd($users);

        return view('users.index', compact('users'));
    }

    public function show($id)
    {
        // $user = User::where('id', $id)->first();
        //$user = User::find($id);
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }

        return view('users.show', compact('user'));
        //dd('users.show', $id);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request)
    {
        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        //return redirect()->route('users.show', $user);
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }
        return view('users.edit', compact('user'));

    }

    public function update(StoreUpdateUserFormRequest $request, $id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }
        $data = $request->only('name', 'email');
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        }

        $user->update($data);

        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        if (!$user = User::find($id)) {
            return redirect()->route('users.index');
        }

        $user->delete();

        return redirect()->route('users.index');
    }

}
