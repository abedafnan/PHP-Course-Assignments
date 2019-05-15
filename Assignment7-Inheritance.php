<?php
/**
 * Created by PhpStorm.
 * User: Afnan A. Abed
 * Date: 5/15/2019
 * Time: 9:01 PM
 */

/**
 * Question:
 * Create a class name it Circle which is a Point. Add the necessary
 * attributes and interface. Create an instance and print its data
 * using the interfaces.
 * Cylinder which is a Circle
 */

if (!isset($_POST['submit'])) { ?>
    <form action="" method="post">
        <label>X: <input type="text" name="x"></label><br><br>
        <label>Y: <input type="text" name="y"></label><br><br>
        <label>Radius: <input type="text" name="r"></label><br><br>
        <label>Height: <input type="text" name="h"></label><br><br>
        <input type="submit" name="submit">
    </form>

<? } else {
    $cylinder = new Cylinder();
    echo "<h4>Cylinder Data: </h4>";
    echo "Center: (" . $cylinder->getX() . ", " . $cylinder->getY() . ")<br>";
    echo "Radius: " . $cylinder->getRadius() . "<br>";
    echo "Height: " . $cylinder->getHeight(). "<br>";
}

class Point {
    private $x;
    private $y;

    function __construct() {
        $this->setX($_POST['x']);
        $this->setY($_POST['y']);
    }

    public function getX() {
        return $this->x;
    }

    public function getY() {
        return $this->y;
    }

    public function setX($x) {
        return $this->x = $x;
    }

    public function setY($y) {
        return $this->y = $y;
    }
}

class Circle extends Point {
    private $radius;

    function __construct() {
        parent::__construct();
        $this->setRadius($_POST['r']);
    }

    public function getRadius() {
        return $this->radius;
    }

    public function setRadius($radius) {
        $this->radius = $radius;
    }
}

class Cylinder extends Circle {
    private $height;

    function __construct() {
        parent::__construct();
        $this->setHeight($_POST['h']);
    }

    public function getHeight() {
        return $this->height;
    }

    public function setHeight($height) {
        $this->height = $height;
    }
}