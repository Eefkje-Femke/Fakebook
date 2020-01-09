<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Index page';
        return view('pages.index')->with('title', $title);
    }

    public function settings(){
        return view('pages.settings');
    }

}

