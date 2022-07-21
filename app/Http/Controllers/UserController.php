<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;  // use Hash;
use Session;

class UserController extends Controller
{
    public function login(){
        return view("pages.login");
    }

    public function signup(){
        return view("pages.signup");
    }

    public function registerUser(Request $request){
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:12'
        ]);
        $user = new User(); //check alternative shorter syntax from Code With Dary
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res){
            return back()->with('success', 'You have registered successfuly');
        }else{
            return back()->with('fail', "Something went wrong"); 
        }
    }

    public function loginUser(Request $request){
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:6|max:12'
        ]);
        $user = User::where('username', '=', $request->username)->first();
        if($user){
            if(Hash::check($request->password, $user->password)){
               $request->session()->put('loginId', $user->id);
               return redirect('pages.udashboard');
            }else{
                return back()->with('fail', 'Wrong credentials.');
            }
        }else{
            return back()->with('fail', 'This username is not registered.');
        }
    }

    public function udashboard(){
        // $data = array();
        // if(Session::has('loginId')){
        //     $data = User::where('id', '=',Session::get('loginId'))->first();
        // }
        // return view('pages.udashboard', compact('data'));
        return view("pages.udashboard");
    }

    public function logout(){
        if(Session::has('loginId')){
         Session::pull('loginId');
         return redirect('pages.login'); 
        }
    }
}




