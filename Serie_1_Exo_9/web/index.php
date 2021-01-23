<?php

    use Util\Route;

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



