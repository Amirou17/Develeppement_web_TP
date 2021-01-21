<?php

trait TaxeService
{
    public function calculerTaxe(){
        return 15;
    }
    public function getInfo(){
        return "Calcule de la taxe de service";
    }
}