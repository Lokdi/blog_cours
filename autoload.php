<?php

class Autoload
{
    public static function inclusionAutomatique($className): void
    {
        $path = str_replace('\\', '/', $className) . '.class.php';
        require_once($path);
    }
}

spl_autoload_register(['Autoload','inclusionAutomatique']);