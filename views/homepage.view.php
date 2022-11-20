<?php ob_start(); ?>
    <h1 class="text-center">Les derniers posts</h1>
    <div class="d-flex justify-content-center flex-wrap">
        <?php foreach ($allPosts as $post): ?>
            <div class="card m-2" style="width: 18rem;">
                <img src="<?= $post->image ?>" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?= $post->nom ?></h5>
                    <p class="card-text"><?= $post->description ?></p>
                    <a href="?op=post&id=<?= $post->id ?>" class="btn btn-primary">Voir le post</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php
$content = ob_get_clean();
$titre = 'home';
require('template.view.php');

