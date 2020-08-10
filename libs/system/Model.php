<?php
namespace libs\system;

class Model
{
    protected $db;

    public function __construct()
    {
        require_once "accebase.php";
        $this->db = getConnexion();
    }

}
?>