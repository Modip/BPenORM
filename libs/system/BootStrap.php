<?php
namespace libs\system;

class BootStrap
{
    public function __construct()
    {
      if (isset($_GET["url"]))
        {
            //echo $_GET["url"];
            $url = explode("/",$_GET["url"]); //explode permet de convertir une chaine en tableau

            $controller_file = "src/controller/".$url[0]."Controller.php";
           
            if(file_exists($controller_file))
            { 
                require_once $controller_file;

                $file = $url[0]."Controller";
              
                $controller_object = new $file(); 
                
                // var_dump($controller_object);
              //die;
            }
            else{
                die ($controller_file."N'existe pas");
            }

            if (isset($url[1]))
            {
                $method = $url[1];
              //  $controller_object->$method();
                
                if(method_exists($controller_object, $method))
                {
                    $controller_object->$method();
                }
            
                else {
                    die($method."n'existe pas dans la methode" .$file);
                }
            }

        }else {
            echo "Lep diame";
        }
    }
}
?>