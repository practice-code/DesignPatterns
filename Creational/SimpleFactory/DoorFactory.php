<?php
namespace DesignPatterns\Creational\SimpleFactory;

/**
 * Class DoorFactory
 */
class DoorFactory{
    /**
     * @param $width
     * @param $height
     * @return Door
     */
    public static function makeDoor($width, $height):Door{
        return new WoodenDoor($width,$height);
    }
}

$door = DoorFactory::makeDoor(100,200);
$width = $door->getWidth();
$height = $door->getHeight();

echo 'simple wooden door factory which product door with height width ';
echo 'width of wooden door would be '.$width;
echo 'height of wooden door would be '.$height;