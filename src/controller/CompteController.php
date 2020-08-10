<?php
namespace src\controller;
use  libs\system\Controller;
use src\model\Comptedb;


class CompteController extends Controller //Heritage(extends)//
{
    public function add()
    {
        
     return $this->view->load("compte/add");
    }
    
    public function getAll()
    {   
        $compte= new Comptedb(); 
        return $compte = $compte->findAll();//array("COMPTE_AFFECTATION", "COMPTE_ADMIN");
        // return $this->view->load("compte/getAll", $compte);
    }
}
