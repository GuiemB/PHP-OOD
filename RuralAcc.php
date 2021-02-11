<?php
//Constant global

define ('TIPUS_ACTIVITATS ', array('senderisme', 'equitacio', 'ciclisme'));

error_reporting(E_ERROR | E_PARSE);

class RuralAcc extends Accommodation {

//constrant class

const INST_AIRE_LLUIRE  = array('jardi','montanya','platja');

//propietats
private $orgActivitats;
private $instAireLliure;

//getter i setters
protected function set_orgActivitats($orgActivitats)
{
  $this->orgActivitats=$orgActivitats;
}
protected function get_orgActivitats() {
  return $this->orgActivitats;
}

protected function set_instAireLliure($instAireLliure)
{
  $this->instAireLliure=$instAireLliure;
}
protected function get_instAireLliure() {
  return $this->instAireLliure;
}

// __construct
public function __construct($orgActivitats,$instAireLliure,$numHabit)
{
$this->orgActivitats=$orgActivitats;
$this->instAireLliure=$instAireLliure;
parent::set_numHabit($numHabit);
parent::set_menjador(MENJADOR[0]);
}

}

 ?>
