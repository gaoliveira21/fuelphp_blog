<?php

class Controller_Users extends Controller_Template
{

	public function action_create()
	{
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

			Response::redirect('/users/login');
		}

		$this->template->title = 'Users create';
		$this->template->content = View::forge('users/create');
	}

}
