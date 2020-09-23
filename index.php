<?php

  class Square {

    public $x;
    public $y;

    public function __construct($x, $y) {

      $this -> x = $x;
      $this -> y = $y;

    }

    public function getArea() {

      return $this -> x * $this -> y ;

    }

    public function getPer() {

      return $this -> x * 4;

    }

    protected function getCoords() {

      return "Base: " . $this -> x . "<br>"
              . "Altezza: " . $this -> y . "<br>";
    }

    public function __toString() {

      return "Square: <br>" . $this -> getCoords()
      . "Area: " . $this -> getArea() . "<br>"
      . "Perimetro: " . $this -> getPer();

    }
  }

  class Cube extends Square {
    public $z;

    public function __construct($x, $y, $z) {
      parent::__construct($x, $y);

      $this -> setZ($z);

    }

    public function setZ($z) {

      $this -> z = $z;

    }

    public function getArea() {

      return $this -> x * $this -> y * $this -> z;

    }

    public function getPer() {

      return 6 * $this -> x * $this -> z;

    }

    public function getCoords() {

      return parent::getCoords()
        . "Profondità: " . $this -> z . "<br>"
        . "Volume: " . $this -> getArea() . "<br>"
        . "Superficie: " . $this -> getPer();

    }

    public function __toString() {

      return "Cubo: <br>" . $this -> getCoords();

    }
  }

  $square1 = new Square(5, 5);
  $square2 = new Square(3, 3);

  $cube1 = new Cube(4, 4, 4);
  $cube2 = new Cube(6, 6, 6);

  echo $square1 . "<br>"
      . $square2 . "<br>"
      . $cube1 . "<br>"
      . $cube2 . "<br>";

 ?>
