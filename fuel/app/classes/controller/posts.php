<?php

class Controller_Posts extends Controller_Template
{

	public function action_create()
	{
		if (Input::method() == 'POST') {
			$post = Model_Post::forge(array(
				'title' => Input::post('title'),
				'body' => Input::post('body'),
				'user_id' => Auth::get('id')
			));

			if($post && $post->save()){
				Session::set_flash("success", "Post criado com sucesso.");
				Response::redirect("posts/index");
			} else {
				Session::set_flash("error", "Erro ao criar post.");
			}
		}

		$data["subnav"] = array('create'=> 'active' );
		$this->template->title = 'Posts &raquo; Create';
		$this->template->content = View::forge('posts/create', $data);
	}

	public function action_index()
	{
		$data['posts'] = Model_Post::find('all', array(
			'where' => array(
				array('user_id', Auth::get('id'))
			)
		));
		$this->template->title = 'Posts';
		$this->template->content = View::forge('posts/index', $data);
	}

	public function action_view($id = null) {
		$data['post'] = Model_Post::find($id, array(
			'where' => array(
				array('user_id', Auth::get('id'))
			)
		));
		$this->template->title = "View post";
		$this->template->content = View::forge('posts/view', $data);
	}

	public function action_delete($id = null) {
		if($post = Model_Post::find($id, array(
			'where' => array(
				array('user_id', Auth::get('id'))
			)
		))){
			$post->delete();
			Session::set_flash('success', 'Post excluido com sucesso.');
		} else {
			Session::set_flash('error', 'Falha ao excluir post.');
		}

		Response::redirect('posts/index');
	}

	public function action_edit($id = null){
		$post = Model_Post::find($id, array(
			'where' => array(
				array('user_id', Auth::get('id'))
			)
		));

		if(Input::method() == 'POST'){
			$post->title = Input::post('title');
			$post->body = Input::post('body');

			if($post->save()){
				Session::set_flash('success', 'Post atualizado com sucesso.');
				Response::redirect('posts/index');
			} else {
				Session::set_flash('error', 'Erro ao atualizar post.');
			}
		}

		$data['post'] = $post;

		$this->template->title = "Edit post";
		$this->template->content = View::forge('posts/edit', $data);
	}

}
