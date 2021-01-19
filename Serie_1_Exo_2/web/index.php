<?php


    require ('../app/Controllers/ContactController.php');
    require ('../app/Models/ContactModel.php');


    use Controllers\ContactController;

    $listContacts = new ContactController();

    $listContacts->listContacts();