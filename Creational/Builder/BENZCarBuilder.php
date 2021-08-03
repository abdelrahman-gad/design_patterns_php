<?php

use  Creational\Builder\Models\BENZCar;
class BENZCarBuilder implements CarBuilderInterface{

    private $type;
    public function createCar(){
        $this->type = new BENZCar;
    }



}