<?php

use Models\ContactModel;

    $model = new ContactModel();
    $contacts = $model->getContacts();

    foreach ($contacts as $contact)
    {
        echo $contact . "<br/>";
    }