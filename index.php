<?php

class Box {
    public $height;
    private $width;
    public $length;

    public static $count = 0;

    public static function cool(){
        var_dump(self::$count);
        var_dump(self::class);
    }

    public function __construct($height=12, $width=12, $length=12) {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function setWidth($width){
        if(is_numeric($width) && $width > 0){
            $this->width = $width;
        } else{
            throw new Exeption('Width needs to be number and bigger than 0');
        }
    }

    public function volume(){
        return $this->height * $this->width * $this->length;
    }
}

class MetalBox extends Box{
    public $material = 'metal';
    public $weightPerUnit = 2;

    public function mass(){
        return $this->volume() * $this->weightPerUnit;
    }
}


// class MetalBox extends Box{
//     public $material = 'Iron';
//     public $weughtPerUnit = 3;

// }

// $MetalBox = new MetalBox(10, 20, 40);
// var_dump($MetalBox);
// var_dump($MetalBox->volume());
// var_dump($MetalBox->mass());

$box1 = new Box();
$box1::$count = 1;
var_dump($box1::$count);

$box2 = new Box();
$box2::$count = 2;
var_dump($box2::$count);

var_dump($box1::$count);

Box::cool();

MetalBox::cool();