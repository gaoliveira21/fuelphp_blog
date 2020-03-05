<div class="col-sm-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3">
	<?=	Form::open(array('action' => 'users/create', 'method' => 'post')); ?>

	<div class="form-group">
		<?php 
			echo Form::label('Name', 'name');
			echo Form::input('name', null, array('class' => 'form-control', 'placeholder' => 'full name'));
		?>
	</div>
	<div class="form-group">
		<?php
			echo Form::label('Email', 'email');
			echo Form::input('email', null, array('class' => 'form-control', 'placeholder' => 'example@example.com'));
		?>
	</div>
	<div class="form-group">
		<?php
			echo Form::label('Password', 'password');
			echo Form::input('password', null, array('class' => 'form-control'))
		?>
	</div>
	<div class="col-sm-12 ml-auto", style="padding: 0">
		<?= Form::button('Create', null, array('class' => 'btn btn-primary btn-block', 'type' => 'submit')) ?>
	</div>
	<?= Form::close(); ?>
</div>