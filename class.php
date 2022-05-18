<?php 

class Phone {

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

class SmartPhone extends Phone{
    public function __construct($name, $description, $price,$brand){
      
        parent::__construct($name, $description, $price,$brand);
    }

    public function isSmartPhone(){
        return "$this->name is a smartphone <br>";
    }
}

class FlipPhone extends Phone{
    public function __construct($name, $description, $price,$brand){
      
        parent::__construct($name, $description, $price,$brand);
    }

    public function isSmartPhone(){
        return "$this->name is a flipphone <br>";
    }
}