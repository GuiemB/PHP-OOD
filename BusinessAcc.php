<?php
//class
class BusinessAcc extends Accommodation {

//constrant class

const SALES = array('reunions','audio visuals','internet', 'no');

//propietats
private $sales;

//getter i setters
protected function set_sales($sales)
{
  $this->sales=$sales;
}
protected function get_sales() {
  return $this->sales;
}

//checkin
public function checkIn()
{
    if ($this->numHabit == 0)
          throw new Exception('check-in Error: Hotel complet. Operació no permesa');
      else
      $this->sales=--$this->sales;
      echo "check-in successful<br>";
      }

}

 ?>
