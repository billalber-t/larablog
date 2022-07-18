<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'name' => 'required | required| max:255',
            'username' => 'required | max:255 | min:3 | unique:users,username',
            'email' => 'required | email| max:255',
            'password' => 'required | max:255 | min:3'
        ]);

        User::create($attributes);

        session()->flash('success','Your account has been created.');

        return redirect('/');
    }
}
