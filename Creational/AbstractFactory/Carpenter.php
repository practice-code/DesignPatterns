<?php
namespace DesignPatterns\Creational\AbstractFactory;
class Carpenter implements FittingExpert{
    public function getDescription()
    {
        echo 'I am fitting wooden door only';
    }
}