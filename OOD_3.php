<HTML>
<head>
<title>OOD_1: Student class: setters and getters</title>
</head>
<body>

<?php
class Currency_converter
{
var $euros;
var $exchange_rate;
var $pounds;



//setters
public function setEuros($euros)
{
$this->euros=$euros;
}

public function setExchange_rate($exchange_rate)
{
$this->exchange_rate=$exchange_rate;
}

public function setPounds($pounds)
{
$this->pounds=$pounds;
}



//getters
public function getEuros()
{
return $this->euros;
}

public function getExchange_rate()
{
return $this->exchange_rate;
}

public function getPounds()
{
return $this->pounds;
}

//constructor
  function __construct($euros, $exchange_rate, $pounds){
    $this->euros=$euros;
    $this->exchange_rate=$exchange_rate;
    $this->pounds=$pounds;
  }

  public function print()
  {
    echo "Euros: " . $this->getEuros();
    echo "<br>";
    echo "Exchange_rate: " . $this->getExchange_rate();
    echo "<br>";
    echo "Pounds: " . $this->getPounds();
    echo "<br>";
  }
}

$var_1 = new Currency_converter('12', '0,5', '6');
    $var_1->print();




?>
</body>
</HTML>
