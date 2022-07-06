<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginPostRequest;
use Auth;

class AuthController extends Controller
{
	function loginView()
	{
		return view('pages.auth.login');
	}
	
	function login(LoginPostRequest $request)
	{
		$request->validated();
		
		$credentials = $request->only('username', 'password');
 		//dd($credentials);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        } else {
			return redirect()->back()->withErrors(['message'=>'Username atau password Salah'])->withInput();
		}
	}
}