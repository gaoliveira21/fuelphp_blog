<div class="col-sm-12 col-md-8 col-lg-6">
	<?= Form::open('/auth/create'); ?>

		<div class="form-group">
			<?php 
				echo Form::label('Email', 'email');
				echo Form::input('email', null, array('class' => 'form-control', 'type' => 'email'));
			?>
		</div>
		<div class="form-group">
			<?php 
				echo Form::label('Password', 'password');
				echo Form::input('password', null, array('class' => 'form-control', 'type' => 'password'));
			?>
		</div>
		<div class="col-sm-6" style="padding: 0">
			<?= Form::button('Login', null, array('class' => 'btn btn-primary', 'type' => 'submit')); ?>
		</div>
	<?= Form::close(); ?>
</div>
<div class="col-sm-12", style="margin-top: 10px">
	<?= Html::anchor('users/create', 'Create account'); ?>
</div>