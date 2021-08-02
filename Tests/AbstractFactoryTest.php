<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use Creational\AbstractFactory\BenzCar;
use Creational\AbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory;

class AbstractFactoryTest extends TestCase{
  

    public function testCanCreateBMWCar(){
        $carFactory = new CarAbstractFactory(200);
        $myCar = $carFactory->createBMWCar();
        $this->assertInstanceOf(BMWCar::class,$myCar);

    }
}
