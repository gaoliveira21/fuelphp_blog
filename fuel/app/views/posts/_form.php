<?= Form::open(); ?>
    <div class="form-group">
        <?php 
            echo Form::label('Title', 'title'); 
            echo Form::input('title', Input::post('name', isset($post) ? $post->title : ''), array('class' => 'form-control')); 
        ?>
    </div>
    <div class="form-group">
        <?php 
            echo Form::label('Description', 'body');
            echo Form::textarea('body', Input::post('body', isset($post) ? $post->body : ''), array('class' => 'form-control', 'rows' => 6));
        ?>
    </div>
    <?= Form::submit('submit', 'Save', array('class' => 'btn btn-primary', 'type' => 'submit')); ?>
<?= Form::close(); ?>