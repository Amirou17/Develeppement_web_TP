<?php
namespace Controllers;
use Models\ContactModel;

class ContactController
{

    public function  __construct()
    {
    }

    public function listContacts()
    {
        $contacts = new ContactModel();

        foreach ($contacts->getContacts() as $contact)
        {
            echo $contact . "<br/>";
        }
    }
}