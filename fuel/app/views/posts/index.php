<ul class="nav nav-pills">
    <li class="nav-item">
        <?= Html::anchor('posts/index', 'Posts') ?>
    </li>
    <li>
        <?= Html::anchor('/posts/create', 'Create posts'); ?>
    </li>
    <li>
        <?= Html::anchor('/auth/destroy', 'Logout') ?>
    </li>
</ul>
<hr>
<div class="col-sm-12">
    <?php  
        if(count($posts) > 0) {
            foreach ($posts as $post) {
    ?>
        <div class="card col-sm-4">
            <div class="card-body">
                <h5 class="card-title"><b><?= $post->title ?></b></h5>
                <p class="card-text"><?= substr($post->body, 0, 200) ?>...</p>
                <div class="btn-group" role="group" aria-label="Basic example">
                    <?= Html::anchor("posts/view/{$post->id}", 'View', array('class' => 'btn btn-secondary')); ?>
                    <?= Html::anchor("posts/edit/{$post->id}", 'Edit', array('class' => 'btn btn-primary')); ?>
                    <?= Html::anchor("posts/delete/{$post->id}", 'Delete', array('class' => 'btn btn-danger')); ?>
                </div>
            </div>
        </div>
    <?php 
            } 
        } else {
            echo "
                <div class='alert alert-info col-sm-12 text-center' role='alert'>
                    <b>Nenhum post publicado.</b>
                </div>
            ";
        }
    ?>
</div>