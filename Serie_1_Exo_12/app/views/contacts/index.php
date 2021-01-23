<?php

    use Models\ContactModel;
    use Entity\Personne;

    $p1 = new Personne("DIALLO", "Amirou", "damirou95gmail.com", '0659989563', "XXXX");
    $p2 = new Personne("DIALLO", "Amirou", "damirou95gmail.com", '0659989563', "XXXX");
    $p3 = new Personne("DIALLO", "Amirou", "damirou95gmail.com", '0659989563', "XXXX");


    $model = new ContactModel();

    $model->addContact($p1);
    $model->addContact($p2);
    $model->addContact($p3);

    $contacts = $model->getContacts();

    $i = 0;
    foreach ($contacts as $contact)
    {
        echo "Nom : " . $contact[$i]->getNom();
        //echo $contact . "<br/>";
    }