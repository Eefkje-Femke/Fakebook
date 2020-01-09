<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function index(){

        $profiles = User::all()->toArray();
        return view('profile.profile', compact('profiles'));
    }
}
