<?php

    namespace src\model;

    use libs\system\Model;

    class Comptedb extends Model
    {

        public function findAll()
        {
            return $this->db
            ->createQuery("SELECT c FROM Compte c")
            ->getResult();
            //return array->db->createQuery();
            //("COMPTE_EMPLOYER", "COMPTE_OPERATION");
            //var_dump($this->db);
            //die;
        }
    }

    ?>