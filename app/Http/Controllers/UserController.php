<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login(Request $req){
        // return $req;
        $req->validate([
            'email'=>'required|email',
            'password' => 'required|min:4|max:16'
        ]);

        $user= users::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password) ){
            return back()->with("fail" ,"Email or Password is not Match");
        }
        else{
            return redirect('about');
        }
        // dd($a);
        // return view('login')->with('loginError',$a);


    }

    public function registration(Request $req){
        $req->validate([
            'name' => 'required|min:3',
            'email'=>'required|email|unique:users',
            'password' => 'required|min:6|max:16',
            'confirm_password' => 'required_with:password|same:password|min:6'
        ]);


        return "Hello";
        // $user= users::where(['email'=>$req->email])->first();
        // if(!$user || !check($req->password,$user->confirm_password) ){
        //     return back()->with("fail" ,"Password is not match");
        // }
        // else{
        //     return redirect('about');
        // }
        // dd($a);
        // return view('login')->with('loginError',$a);



    }
}
