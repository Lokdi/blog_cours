<?php
session_start();
use controllers\AventureController;

require_once ('autoload.php');

$app = new AventureController();
$app->run();