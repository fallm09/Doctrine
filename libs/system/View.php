<?php
    namespace libs\system ;

    class  View
    {
    public function __construct()
    {

    }
    public function load()
    {

        $num =  func_num_args(); // recevoir le nombre d'argument passer en parametre sur le load
        $args =func_get_args(); 
         
        switch ($num) {
            case '1':
               $file = "src/view/".$args[0].".php";
                if (file_exists($file))
                {   
                   // var_dump(1);
                    //die;
                    require_once $file;
                }else {
                    die($file."n'existe.pas");
                }
               break;

            case '2':
               $file = "src/view/".$args[0].".php";
                if (file_exists($file))
                {
                    $data =$args[1]; 
                    require_once $file;
                }else {
                    die($data."n'existe.pas");
                }
              
                break;    
            default:
              
                break;
        }
        
    }

    }
 ?>