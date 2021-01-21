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

}

$guiem = new Currency_converter('12', '0,5', '6');

echo "Euros: " . $guiem->getEuros();
echo "<br>";
echo "Exchange_rate: " . $guiem->getExchange_rate();
echo "<br>";
echo "Pounds: " . $guiem->getPounds();
echo "<br>";


?>
</body>
</HTML>
