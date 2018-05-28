<?php
class Autoloader
{
    public static function load($className)
    {
        $fixedClassName = str_replace("\\", "/", $className);
        $requirePath = dirname(__FILE__)."/".$fixedClassName.".php";
        require $requirePath;
    }
}

spl_autoload_register(__NAMESPACE__ . "\\Autoloader::load");