<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index( \App\Models\User $user)
    {
         
        return view('profiles.index', compact('user'));
    }

    public function edit(\App\Models\User $user){
        return view('profiles.edit' , compact('user'));

    }
}
