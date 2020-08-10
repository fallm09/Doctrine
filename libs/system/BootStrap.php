<?php
    namespace libs\system ;

class  BootStrap
{
    public function __construct()
    {   
        //echo 12;(pour tester si,les donnees passent)
        if(isset($_GET["url"]))
        { 
            $url=explode("/",$_GET["url"]);

           // var_dump($url[0]);

            $controller_file ="src/controller/".$url[0].".Controller.php";
            if(file_exists($controller_file))
            {
                require_once $controller_file;
                $file = $url [0]."Controller";
               $controller_object= new $file();
               if(isset($url[1]))
               {
                   $fall = $url[1];
                   $controller_object->$fall();
                   
                }
                var_dump($url[1]);
               
            }else {
                die($controller_file." n'existe pas");
            }  
          
        }else {
           echo 'MVC';
        }

    }
        
   
}
