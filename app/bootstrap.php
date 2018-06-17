<?php
// load Config
require_once 'config/config.php';

// load libraries
// require_once 'libraries/Core.php';
// require_once 'libraries/Controller.php';
// require_once 'libraries/Database.php';

// autoload Core Libraries that are in the folder
spl_autoload_register(function($className){
    require_once 'libraries/' .$className. '.php';
});