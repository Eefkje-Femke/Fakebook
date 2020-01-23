<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Image;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $getuser = auth()->user();
        $profiles = DB::table('users')->where('id', $getuser->id)->first();
        //dd($profiles);
        return view('profile.profile', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $avatar = $request->file('avatar');
        // $user = Auth::user();
        // $avatarName = $user->id.'_avatar'.time().'.'.$avatar->getClientOriginalExtension();
        // $img = Image::make($avatar)->resize(150, 150);
        // //dd($img);
        // $public_path = public_path().'avatars'.$avatarName;
        // $img->save($public_path);
        // $user->avatar = $avatarName;
        // $user->save();

        //Goede code!!!!

        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        
        $user = Auth::user();
        
        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
        
        //dd($avatarName);
        $request->avatar->storeAs('avatars',$avatarName);
       
        $user->avatar = $avatarName;
        $user->save();

        return redirect('/profile')->with('success','You have successfully uploaded your image.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        $profiles = User::find($id);
        return view('profile.edit', compact('profiles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
        $profiles = User::find($id);
        $profiles->name = $request->input('name');
        $profiles->email = $request->input('email');
        $profiles->save();

        return redirect('/profile')->with('success', 'Your data is updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
