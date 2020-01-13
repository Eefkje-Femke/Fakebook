<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index(){
        $getuser = auth()->user();
        $profiles = DB::table('users')->where('id', $getuser->id)->first();
        //dd($profiles);
        return view('profile.profile', compact('profiles'));
    }

    public function edit(){
        $getuser = auth()->user();
        $profiles = DB::table('users')->where('id', $getuser->id)->first();
        return view('profile.edit', compact('profiles'));
    }

    public function update(Request $request){
        
    }
}
