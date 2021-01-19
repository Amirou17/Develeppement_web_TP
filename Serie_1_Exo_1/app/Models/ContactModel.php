<?php
namespace Models;

class ContactModel
{
    public function __construct()
    {
    }

    public function getContacts(){

        return array("Amirou DIALLO", "Vivien MOREAU", "Svenka POUTINE");
    }
}