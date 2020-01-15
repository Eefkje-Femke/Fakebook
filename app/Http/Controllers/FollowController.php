<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;


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

    public function showFollowing(){

    }

    public function yourFollowers(){//wie jij volgt
        // where follower_id is  {{Auth::user()->id}}
        $user_id = auth()->user()->id;
        $followers_id = DB::table('followers')->where('follower_id', $user_id)->pluck('leader_id');

        foreach($followers_id as $id){
            // $users= DB::table('users')->where('id', $id);
            // $users = DB::table('users')->where('id', $id)->first();
            $users = User::find(3); 
        } 
        $users = User::find(3); 

        // dd($users);

        return view('Pages.follower', compact('users'));
    }
}