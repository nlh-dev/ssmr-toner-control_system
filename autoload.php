<?php

    spl_autoload_register(function ($class) {
    
    $autoloadFile = __DIR__."/".$class.".php";
    $autoloadFile = str_replace("\\", "/", $autoloadFile);

    if (is_file($autoloadFile)) {
        require_once $autoloadFile;
    }


});