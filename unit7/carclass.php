<?php
class Car{
    public $make;
    public $model;

}

$audi = new Car();

$audi->make = "1969";
$audi->model = "Y";

echo "Make : ".$audi->make."<br>";
echo "Model : ".$audi->model ;
