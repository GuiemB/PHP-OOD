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

  public function print()
  {
    echo "Euros: " . $this->getEuros();
    echo "<br>";
    echo "Exchange_rate: " . $this->getExchange_rate();
    echo "<br>";
    echo "Pounds: " . $this->getPounds();
    echo "<br>";
  }


public function convertPoundsToEuros(){
  $this->euros= ($this->pounds / $this->exchange_rate);
  return $this->euros;
}

//constructor
  function __construct($pounds, $exchange_rate){
    $this->pounds=$pounds;
    $this->exchange_rate=$exchange_rate;
  }

// end class Currency_converter
}
$euros=4;
$exchange_rate=2;

$currencyconverter = new Currency_converter($euros, $exchange_rate);

if($exchange_rate>0)
    $currencyconverter->convertPoundsToEuros();
else {
  echo 'The exchange_rate has to be greater than 0 <br>';
}
    $currencyconverter->print();



?>
</body>
</HTML>
