<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function index(){
		//dd("admincon");
    	return view('admin.panel');
	}

	public function logout(){
		session()->forget('Admin');
		\Auth::logout();
		return redirect('/');
		 
	}
}  
