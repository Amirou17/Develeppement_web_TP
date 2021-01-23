<?php
namespace Controllers;
use Util\View;
use Models\ContactModel;

class ContactController
{

    public function listContacts()
    {
        $vue = new View();

        $model = new ContactModel();

        $data = $model->getContacts();

        $path = 'contacts/index';

        $vue->render($path, $data);

        //require (__DIR__.'/../views/contacts/index.php');


    }
}