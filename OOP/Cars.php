<?php

# Constructor function use
class Cars
{
    public $brand;
    public $make;
    private $likes;
    public static $counter = 2;

    public function __construct($make, $brand)
    {
        $this->make = $make;
        $this->brand = $brand;
    }

    // accessing private properties... use setters (set)
    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    // retrieving the values of private properties... use getters (get)
    public function getLikes()
    {
        return $this->likes;
    }

    // init a static function
    public static function getCounter()
    {
        return self::$counter;
    }
}
