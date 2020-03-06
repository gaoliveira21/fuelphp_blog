<?php

class Controller_Users extends Controller_Template
{

	public function action_create()
	{
		if(Auth::check()) Response::redirect('/login');

		if(Input::method() == "POST"){
			Auth::create_user(
				Input::param('email'),
				Input::param('password'),
				Input::param('email'),
				100,
				array(
					'fullname' => Input::param('name'),
				)
			);	

			Auth::login(Input::param('email'), Input::param('password'));
			Auth::remember_me();
			Response::redirect('posts/index');
		}

		$this->template->title = 'Users create';
		$this->template->content = View::forge('users/create');
	}

}
