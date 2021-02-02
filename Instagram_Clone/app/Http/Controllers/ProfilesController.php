<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    //function for index of the profile
    public function index($user)
    {
       //Will either fail a request or pass if user exists
       $user = User::findOrFail($user);
       
        return view('home', ['user' => $user]);
    }
}
