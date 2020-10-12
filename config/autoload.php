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

    }
    
}
Autoloader::register();

?>
