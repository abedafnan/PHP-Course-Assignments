<?php

// Add members to Appointment for counting the number 
// of object of the class has been created
class Appointment {
  private $time;
  private $place;
  static $counter;

  public function setTime($m) {
    $this->time = $m;
  }

  public function getTime() {
    return $this->time;
  }

  public function setPlace($c) {
    $this-> place = $c;
  }

  public function getPlace() {
    return $this-> place;
  }  

  public function __construct($time, $place ){
    $this->setTime($time);
    $this->setPlace($place);
    self::$counter++;
  }
}

$apt = new Appointment("4:00pm","I215");
echo "Time: ", $apt->getTime(), "<br>Place: ", $apt->getPlace(), "<br><br>";
$apt2 = new Appointment("5:00pm","I202");
echo "Time: ", $apt2->getTime(), "<br>Place: ", $apt2->getPlace(), "<br><br>";
$apt3 = new Appointment("10:00am","I107");
echo "Time: ", $apt3->getTime(), "<br>Place: ", $apt3->getPlace();

echo "<br><br> Number of Appointments: ", Appointment::$counter;

?>