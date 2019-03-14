<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller{
    public function index(){
        $detail = "LahiruSamAbe";
        // return view('users',['det'=>$detail]);
        // return view('users',compact('detail'));
        return view('users')->with('details', $detail);
    }

    public function regUser(){
        return view('userreg');
    }

    public function storenwUser(Request $request)
    {
        User::create($request->all());
        return ' added successfully';
    }
}
