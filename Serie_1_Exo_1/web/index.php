<?php

    require ('../app/Models/ContactModel.php');
    require ('../app/Controllers/ContactController.php');
    use Controllers\ContactController;

    $contact = new ContactController();

    $contact->listContacts();


