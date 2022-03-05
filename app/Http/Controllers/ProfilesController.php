<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user =User::findOrFail($user);
        return view('home',[
            'user'=> $user,
        ]);
    }
}
