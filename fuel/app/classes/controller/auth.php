<?php

class Controller_Auth extends Controller_Template
{

	public function action_create()
	{
		if(Input::method() == 'POST') {
			
			if(Auth::login(Input::param('email'), Input::param('password'))){
				Response::redirect('/posts/index');
			} else {
				Session::set_flash('error', "Usuário inexistente ou senha inválida.");
			}
			
		}

		$this->template->title = 'Login';
		$this->template->content = View::forge('auth/create');
	}

	public function action_destroy()
	{
		Auth::logout();
		Response::redirect('/login');
	}

}
