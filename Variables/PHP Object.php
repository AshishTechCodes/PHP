<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  public $color;
  public $model;

  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);

?>

</body>
</html>