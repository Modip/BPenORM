<?php


class Autoloader
{
    static function register ()
    {
        spl_autoload_register (array(__CLASS__, "autoload"));  
    }
    static function autoload($class)
    {
        
        //Utilisation pour changement des slash Namespace
        $class = str_replace("\\", "/", $class);

       // echo $class;
     
        // Avec utilisation des Namespace
        
        if (file_exists(str_replace("\\","/",$class.".php")))
        {
            require_once (str_replace("\\","/",$class.".php"));
        } 

        /*
        if (file_exists ("libs/system".$class.".php"))
         {
            require_once "libs/system".$class.".php";
         }
        else if (file_exists ("../src/model".$class.".php"))
         {
            require_once "../src/model".$class.".php";
         }
         else if (file_exists ("../src/controller".$class.".php"))
         {
            require_once "../src/controller".$class.".php";
         }

        */

    }
    
}
Autoloader::register();






?>
