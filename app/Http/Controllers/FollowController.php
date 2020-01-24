<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Pagination\Paginator;


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

    public function followUser(){
        //get all users
        $users =  User::where('id', '!=', auth()->id())->simplePaginate(5);
        $user_id = auth()->user()->id;
        //select * from users inner join followers ON users.id = leader_id Where follower_id =2
        $Usersfollowing = User::join('followers', 'users.id', '=', 'leader_id')->where('follower_id', '=', $user_id)->get();

        //select * from users inner join followers ON users.id = follower_id where leader_id = 2
        $followingUsers = User::join('followers', 'users.id', '=', 'follower_id')->where('leader_id', '=', $user_id)->get();
        return view('Pages.follower')->with(compact('Usersfollowing'))->with(compact('followingUsers'))->with(compact('users'));
    }
}