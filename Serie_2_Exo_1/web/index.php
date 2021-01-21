<?php

    include_once("JouetRouge.php");
    include_once("VoitureRouge.php");

    $unJouetRouge = new JouetRouge();
    print "Le nom du jouet : ".$unJouetRouge->getName()."<p>";

    $uneVoitureRouge = new VoitureRouge();
    print "Le modèle de voiture : ".$uneVoitureRouge->getModel()."<p>";