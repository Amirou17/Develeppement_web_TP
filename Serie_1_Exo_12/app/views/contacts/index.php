<?php

    use Models\ContactModel;

echo "bonjour";




    $model = new ContactModel();
    $contacts = $model->getContacts();

    foreach ($contacts as $contact)
    {
        echo "Nom :" . $contact->getNom() . "<br/>";
        echo "Prenom :" . $contact->getPrenom() . "<br/>";
        echo "Email : " . $contact->getEmail() . "<br/>";
        echo "Tel :" . $contact->getTel() . "<br/>";
        echo "Adresse" . $contact->getAdresse() . "<br/>";
        echo "<br/>";
    }