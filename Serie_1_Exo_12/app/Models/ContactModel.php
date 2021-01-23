<?php
namespace Models;

use Entity\Personne;

class ContactModel
{
    private $contacts;
    public static $nbreContacts = 0;

    /**
     * ContactModel constructor.
     */
    public function __construct()
    {
        $this->contacts = array();
    }

    public function addContact(Personne $personne)
    {
        $this->contacts[self::$nbreContacts] = $personne;
        self::$nbreContacts++;
    }


    public function getContacts(){

        return $this->contacts;
    }
}