<div class="col-sm-12 col-md-8 col-lg-6">
    <?= Form::open(array('action' => "posts/edit/$post->id", 'method' => 'post')); ?>
		<div class="form-group">
			<?php 
				echo Form::label('Title', 'title'); 
				echo Form::input('title', $post->title, array('class' => 'form-control')); 
			?>
		</div>
		<div class="form-group">
			<?php 
				echo Form::label('Description', 'body');
				echo Form::textarea('body', $post->body, array('class' => 'form-control', 'rows' => 6));
			?>
		</div>
		<?= Form::button('Update', null, array('class' => 'btn btn-primary', 'type' => 'submit')); ?>
	<?= Form::close(); ?>
</div>
<div class="col-sm-12" style="margin-top: 10px">
	<?= Html::anchor('posts/index', 'Back') ?>
</div>