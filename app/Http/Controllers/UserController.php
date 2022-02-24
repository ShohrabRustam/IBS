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
}
