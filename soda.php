<?php
class Soda {
    public $name;
    public $color;
    public function __construct($name, $color){
        $this ->name = $name;
        $this ->color = $color;
    }

    public function intro(){
        echo"The Soda is called {$this->name} and is {$this->color}.";
    }
}


class Fanta extends Soda {
    public function message() {
      echo "What are the name and color of this soda?<br>";
    }
   }
   $strawberry = new Fanta("Fanta", "orange");
   $strawberry->message();
   $strawberry->intro();