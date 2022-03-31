<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function index(){
        return view('pages.dashboard');
    }

    public function userLogout(){
    	Auth::logout();
    	return Redirect()->route('login');
    }
}
