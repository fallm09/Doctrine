    <?php
    require_once "config/autoload.php" ;
    use src\controller\CompteController; 
    //use \src\controller\CompteController;
    




    $compte = new CompteController();
   // $compte-> add();
   /*$a = $compte->getAll();
   //var_dump($a);
   foreach($a as $b)
   {
   echo $b->getAccountnumber();
    echo $b->getId()."<br>";
    echo $b->getAccountnumber()."<br>";
    }*/

    $mvc=new  libs\system\BootStrap(); 


  











    ?>