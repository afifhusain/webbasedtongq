<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Auth;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    //

	public function auth(Request $request)
	{
		return view('login.login');
	}

    public function adduser(Request $request)
    {
    	return view('register.register');
    }

    public function adduserQuery(Request $request)
    {
    	$this->validate($request, [
    		'username' => 'required|min:4',
    		'email' => 'required|min:4|email|unique:auth',
    		'password' => 'required|min:4',
    		'confirmpassword' => 'required|same:password'
    	]);

    	$data = new Auth();
    	$data->username = $request->username;
    	$data->email = $request->email;
    	$data->password = bcrypt($request->password);
    	$data->nohp = $request->nohp;
    	$data->jenis_users = 'user';
    	$data->save();

    	return redirect('home')->with('alert-success', 'Successfull Register,');

    }
}
