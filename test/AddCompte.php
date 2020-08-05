<?php
require_once '../bootstrap.php';
$compte=new Compte();
//$compte->setId(1);
$compte->setaccountnumber("compte_affectation");

$entityManager->persist($compte);
$entityManager->flush();



echo $compte->getId();













?>
