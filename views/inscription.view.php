<?php ob_start(); ?>
    <div class="container-fluid">
        <?php if (empty($_SESSION) && $_GET['op'] == 'register'): ?>
            <h1>Inscription</h1>
            <?php include('include/form/inscription.view.php'); ?>
        <?php elseif (empty($_SESSION) && $_GET['op'] == 'connect'): ?>
            <h1>Connexion</h1>
            <?php include('include/form/connexion.view.php'); ?>
        <?php endif; ?>
    </div>

<?php
$content = ob_get_clean();
if ($_GET['op'] == 'register') {
    $titre = 'inscription';
} elseif ($_GET['op'] == 'connect') {
        $titre = 'connexion';
}else {
    $titre = 'formulaire';
}

require('template.view.php');
