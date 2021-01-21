<?php

trait TaxeProduit
{
    private $taux_taxe = 20;
    function calculerTaxe($prix){
        return (($this->taux_taxe/100)*$prix);
    }
}