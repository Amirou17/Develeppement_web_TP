<?php

    require ('../app/Models/ContactModel.php');
    require ('../app/Controllers/ContactController.php');


    $contact = new ContactController();

    $contact->listContacts();


