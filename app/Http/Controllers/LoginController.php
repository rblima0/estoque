<?php namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;

use Request;
use Auth;

class loginController extends Controller {

	public function form(){
		return view('form_login');
	}

	public function Login(){
		$credenciais = Request::only('email', 'password');
		if(Auth::attempt ($credenciais)){
			return "Logado com sucesso !";
		}
		return "Credenciais incorretas !";
	}
}
