
<?php
class Fruit {
  public $name;

  function __construct($name) {
    $this->name = $name; 
  }
  function __destruct() {
    echo "The fruit is {$this->name}."; 
  }
}

$apple = new Fruit("Banana");
?>
 

