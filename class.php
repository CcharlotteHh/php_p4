<?php 

class Product {

    public $name;
    protected $description;
    public $price;
    private $brand;

    public function __construct($name, $description, $price,$brand){
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->brand = $brand;

    }

    public function displayProduct() {
        echo $this->name. '<br>';
        echo $this->description . '<br>';
        echo $this->price . '<br>';
    }

    //getter
    public function getBrand(){
        return $this->brand;
    }

    //setter
    public function setBrand($brand){     
            $this->brand = $brand;
        
    }

}