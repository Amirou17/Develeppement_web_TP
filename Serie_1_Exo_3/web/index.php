<?php


    require ('../app/Controllers/ContactController.php');
    require ('../app/Models/ContactModel.php');
    require ('../util/View.php');


    use Controllers\ContactController;

    $listContacts = new ContactController();

    $listContacts->listContacts();