<?php
/* 1) This  class has a private property $color and a public method getRandColor().
   2) The getRandColor() method generates a random color which is returned to the object calling this method.
 */ 

class Color
{
  private $color;

  public function getRandColor()	
  {
    $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'A', 'B', 'C', 'D', 'E', 'F');

    $this->color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];

    return $this->color;

  }
}