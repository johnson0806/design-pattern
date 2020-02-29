<?php
/**
 * Created by PhpStorm.
 * User: A1-0491
 * Date: 2020/2/28
 * Time: 17:50
 */
interface Car
{
    public function getCarBrand();

    public function drive();

}

class Bmw implements Car
{
    public function getCarBrand()
    {
        return 'bmw';
    }

    public function drive()
    {
        // TODO: Implement drive() method.
    }
}

class Ben implements Car
{
    public function getCarBrand()
    {
        return 'ben';
    }

    public function drive()
    {
        // TODO: Implement drive() method.
    }
}

class SimpleFactory
{
    private $carType;

    public function __construct()
    {
        $this->carType = [
            'bmw' => 'Bmw',
            'ben' => 'Ben',
        ];
    }

    public function makeCar($brand)
    {
        if (!array_key_exists($brand, $this->carType)) {
            throw new Exception('not brand found');
        }
        return new $this->carType[$brand]();
    }
}

class testSimpleFectory
{
    public static function main()
    {
        $carFect = new SimpleFactory();
        $car1 = $carFect->makeCar('ben');
        $car2 = $carFect->makeCar('bmw');
        var_dump($car1->getCarBrand());
        var_dump($car2->getCarBrand());
    }
}

testSimpleFectory::main();