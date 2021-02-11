<?php
//Constant global MENJADOR que pot prendre els valors: casa, a la carta, buffet,no.

define ('MENJADOR', array('casa','a la carta','no'));

error_reporting(E_ERROR | E_PARSE);

class  Accommodation  {

//propietats
public $numHabit;
private $menjador;

//getter i setters
protected function set_numHabit($numHabit)
{
  $this->numHabit=$numHabit;
}
protected function get_numHabit() {
  return $this->numHabit;
}

protected function set_menjador($menjador)
{
  $this->menjador=$menjador;
}
protected function get_menjador() {
  return $this->menjador;
}

// __construct
public function __construct($numHabit,$menjador)
{
$this->numHabit=$numHabit;
$this->menjador=$menjador;
}

//checkin
public function checkIn()
{
$this->numHabit=--$this->numHabit;
}

//checkout
public function checkOut()
{
$this->numHabit=++$this->numHabit;
}


}

 ?>
