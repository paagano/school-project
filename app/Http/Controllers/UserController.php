<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
// use Hash;
use Session;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //You can manually Create your CRUD functions here...
    public function registerUser (Request $request) {
        $request->validate([
            'username'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|max:12'
        ]);
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res) {
            return back()->with('success', 'You have registered Successfuly');
        } else{
            return back()->with('fail', 'Sorry, something went wrong!');
        }
    }

    // my test:
    public function showUsers () {
        $users = User::all();

        // dd($users);

        return view(User::all() , [
            'users' => $users
        ]); 

    }

}



