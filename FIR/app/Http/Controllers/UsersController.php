<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\UsersController;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function show(){
    	return view('register');
        // $users=UserModel::all();
        // return view('reglist')->with(compact('users'));
    }
    public function addUser(){
        return view('register');
    }
    public function saveUser(Request $request){
    	$validator=Validator::make($request->all(),[
    		'name'=> 'required|max:225',
    		'email'=> 'required',
    		'password'=> 'required',
    		
    	]);
    	if($validator->passes())
        {
    		$users= new UserModel;
    		$users->name = $request->name;
    		$users->email = $request->email;
    		$users->password = bcrypt($request->password);
            // $email_exist = $users::where('email', '=', $request->email)->firstOrFail();
            // var_dump($email_exist); exit;
            // if(count($email_exist) > 0) {
                // return redirect('register/add')->withErrors('Email already exist')->withInput();
            // }
    		$users->save();

    		$request->session()->flash('msg','User saved successfully');
    		return redirect ('login');

    	}else{
    		return redirect('register/add')->withErrors($validator)->withInput();
    	}
    }

    public function userlogin(Request $request)
    {
        if ($request->isMethod('POST')) 
        {
            $request->validate([
                "email"     =>    "required|email",
                "password"  =>    "required"
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) 
            {
                
                return redirect ('firs');
            } else {
                return redirect('login')->withErrors('Whoops! invalid username or password.')->withInput();
            }
        }
        return view('login');
    }

    public function logout(Request $request) 
    {
      Auth::logout();
      return redirect('login');
    }
}
