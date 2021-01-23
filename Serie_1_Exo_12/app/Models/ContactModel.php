<?php
namespace Models;

use Entity\Personne;

class ContactModel
{
    /*private $contacts;
    public static $nbreContacts = 0;*/

    /*

    public function __construct()
    {
        $this->contacts = array();
    }*/

    /*public function addContact(Personne $personne)
    {
        $this->contacts[self::$nbreContacts] = $personne;
        self::$nbreContacts++;
    }*/


    public function getContacts(){

        $p1 = new Personne("DIALLO", "Amirou", "damirou95gmail.com", '0659989563', "XXXX");
        $p2 = new Personne("DIALLO", "Amirou", "damirou95gmail.com", '0659989563', "XXXX");
        $p3 = new Personne("DIALLO", "Amirou", "damirou95gmail.com", '0659989563', "XXXX");

        return $this->contacts = array($p1, $p2, $p3);
    }
}