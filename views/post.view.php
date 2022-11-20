<?php ob_start(); ?>
    <div class="container-fluid">
        <div class="shadow-lg p-3 mb-5 bg-body rounded text-center">
            <h2><?= $post->nom ?></h2>
            <img src="<?= $post->image ?>">
            <p><?= $post->description ?></p>
            <p><?= $post->categorie ?></p>
            <p><?= $post->username ?></p>
            <p><?= $post->created_at?></p>
        </div>
    </div>

<?php
$content = ob_get_clean();
$titre = 'Post';
require('template.view.php');