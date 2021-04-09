<?php
    require_once "Cars.php";

    class Model extends Cars {
        public int $makeYear;

        public function __construct($make, $brand, $makeYear)
        {
            $this->makeYear = $makeYear;
            
            parent::__construct($make, $brand);
        }
    }
