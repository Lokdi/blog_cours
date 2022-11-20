<?php ob_start(); ?>
    <div class="d-flex flex-wrap header">
        <h1>Administration</h1>
    </div>
<?php
$content = ob_get_clean();
$titre = 'Administration';
require('template.view.php');

