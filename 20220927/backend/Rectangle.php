<?php
class Rectangle{
    var $width;
    var $height;
    
    function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    function getside(){
        return ($this -> width + $this -> height) * 2;
    }

    function getArea(){
        return $this -> width * $this -> height;
    
    }
    function getWidth(){
        return $this -> width;
    }
    function getHeight(){
        return $this -> height;
    }
}

// $rect1 = new Rectangle();
// $rect1 -> width = 1;
// $rect1 -> height = 1;

// $rect2 = new Rectangle();
// $rect2 -> width = 2;
// $rect2 -> height = 3;

// $rect3 = new Rectangle();
// $rect3 -> width = 3;
// $rect3 -> height = 5;

// echo $rect1 -> getArea();
// echo $rect2 -> getArea();
// echo $rect3 -> getArea();