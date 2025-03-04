<?php

class Controller_Auth extends Controller_Template
{

	public function action_create()
	{	

		if(Auth::check()) $this->action_destroy();

		if(Input::method() == 'POST') {
			
			if(Auth::login(Input::param('email'), Input::param('password'))){
				if(Input::post('remember')){
					Auth::remember_me(Auth::get('id'));
				} else {
					Auth::dont_remember_me();
				}
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
		Auth::dont_remember_me();
		Response::redirect('/login');
	}

}
