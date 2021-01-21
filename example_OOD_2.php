<HTML>
<head>
<title>OOD_1: Student class: setters and getters</title>
</head>
<body>

<?php
class Student
{
var $name;
var $dni;
var $surname_1;
var $surname_2;
var $age;



//setters
public function setName($name)
{
$this->name=$name;
}

public function setDni($dni)
{
$this->dni=$dni;
}

public function setSurname_1($surname_1)
{
$this->surname_1=$surname_1;
}

public function setSurname_2($surname_2)
{
$this->surname_2=$surname_2;
}

public function setAge($age)
{
$this->age=$age;
}

//getters
public function getName()
{
return $this->name;
}

public function getDni()
{
return $this->dni;
}

public function getSurname_1()
{
return $this->surname_1;
}

public function getSurname_2()
{
return $this->surname_2;
}

public function getAge()
{
return $this->age;
}

//constructor
  function __construct($name, $dni, $surname_1, $surname_2, $age){
    $this->name=$name;
    $this->dni=$dni;
    $this->surname_1=$surname_1;
    $this->surname_2=$surname_2;
    $this->age=$age;
  }

}

$guiem = new Student('Guiem', '1234asd', 'Buades', 'Estrany', '20');

echo "Name: " . $guiem->getname();
echo "<br>";
echo "DNI: " . $guiem->getdni();
echo "<br>";
echo "Surname_1: " . $guiem->getSurname_1();
echo "<br>";
echo "Surname_2: " . $guiem->getSurname_2();
echo "<br>";
echo "Age: " . $guiem->getAge();


?>
</body>
</HTML>
