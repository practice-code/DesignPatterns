<?php

/**
 * Class WoodenDoor
 */
class WoodenDoor implements Door{
    /**
     * @var float
     */
    protected $width;
    protected $height;

    /**
     * WoodenDoor constructor.
     * @param $width
     * @param $height
     */
    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }


    /**
     * @return float
     */
    public function getHeight():float
    {
        return $this->height;
    }

    /**
     * @return float
     */
    public function getWidth():float
    {
        return $this->width;
    }
}