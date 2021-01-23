<?php

    use Util\Route;
    use Entity\Personne;

    $p1 = new Personne("DIALLO", "Amirou", "damirou95gmail.com", '0659989563', "XXXX");
    $p2 = new Personne("DIALLO", "Amirou", "damirou95gmail.com", '0659989563', "XXXX");
    $p3 = new Personne("DIALLO", "Amirou", "damirou95gmail.com", '0659989563', "XXXX");


$file = '../vendor/autoload.php';

    if(file_exists($file))
    {
        require_once "../vendor/autoload.php";

        $vue = new Route();
    }else {
        echo "Le fichier " . "<strong>" . $file . "</strong>" . "n'existe pas";
    }




    /*use Controllers\ContactController;

    $listContacts = new ContactController();

    $listContacts->listContacts();*/



