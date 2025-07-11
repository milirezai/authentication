<?php

spl_autoload_register(function ($className){
    $classFile= __DIR__."/class/".$className.".php";
     if (file_exists($classFile) and is_readable($classFile))
    {
        include $classFile;
    }
    else
    {
        die("class not found");
    }
});
