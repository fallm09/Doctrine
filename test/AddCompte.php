 <?php
        require_once '../bootstrap.php';
        $compte=new Compte();
        $compte->setId("");
        $compte->setaccountnumber("compte_affectation");
        $compte->setClerib("20");
        $compte-> setAccountnumber("1509");
        $compte-> setTypecompte("1");
        $compte->setSolde("25000");
        $compte->setDatecreation("150910");


        $entityManager->persist($compte);
        $entityManager->flush();



        echo $compte->getId();













    ?>
