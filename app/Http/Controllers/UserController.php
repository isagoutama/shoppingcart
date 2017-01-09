<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function getRegister() {

    	return view('user.register');
    }
    public function postRegister(Request $r) {
    	$this->validate($r,[
    		'email' => 'email|required|unique:users',
    		'name' => 'required',
    		'username' => 'required|min:6|unique:users',
    		'alamat' => 'required',
    		'password' => 'required|min:7',
    		'password_confirm' => 'required|same:password'
    	]);
    	$user = new User([
    		'email' => $r->input('email'),
        'role' => 'costumer',
    		'name' => $r->input('name'),
    		'username' => $r->input('username'),
    		'alamat' => $r->input('alamat'),
    		'password' => bcrypt($r->input('password'))
    	]);
    	$user->save();
      Auth::login($user);
    	return redirect('/');
    }
    public function getLogin(){
      return view('user.login');
    }
    public function postLogin(Request $r){
      $this->validate($r,[
        'email' => 'email|required',
        'password' => 'required|min:7'
      ]);
      if(Auth::attempt(['email' => $r->input('email'),'password' => $r->input('password')])){
        return view('user.profile');
      }
    }
    public function logout(){
      Auth::logout();
      return redirect('/user/login');
    }
}
