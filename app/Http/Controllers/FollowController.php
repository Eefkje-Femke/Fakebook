<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FollowController extends Controller
{
    public function follow(int $user_Id){
        $user = User::find($user_Id);
        if(!$user) {        
            return redirect()->back()->with('error', 'User does not exist.'); 
        }

        $user->followers()->attach(auth()->user()->id);
        return redirect()->back()->with('success', 'Successfully followed the user.');
    }


    public function unFollow(int $user_id){
        $user = User::find($user_id);
        if(!$user) {            
            return redirect()->back()->with('error', 'User does not exist.'); 
        }
        $user->followers()->detach(auth()->user()->id);
        return redirect()->back()->with('success', 'Successfully unfollowed the user.');
    }

    public function showFollowers(){

    }

    public function yourFollowers(){//wie jij volgt
        // where follower_id is  {{Auth::user()->id}}

        return view('Pages.follower');
    }
}