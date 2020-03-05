<div class="col-sm-12 col-md-8 col-lg-6">
    <h2><?= $post->title ?></h2>
    <p>Publicado em:
        <b>
            <?php 
                $date = new DateTime();
                $date->setTimestamp($post->created_at);
                echo $date->format('Y-m-d');
            ?>
        </b>
    </p>
    <p><?= $post->body ?></p>
</div>
<hr>
<div class="col-sm-12" style="margin-top: 10px">
    <?= Html::anchor('posts/index', 'Back'); ?>
</div>