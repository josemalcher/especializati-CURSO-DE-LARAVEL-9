<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();

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

    public function store()
    {
        dd('Cadastrando usuário');
    }

}
