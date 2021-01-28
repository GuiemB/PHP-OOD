<html>
<head>
<title>OOD_5: inheritance example</title>
</head>
<body>
<?php
require "person.php";//similar to include
require "student.php";
require "teacher.php";
require "apprentice.php";


$teacher1=new Teacher('Rose','12345678A');//using __construct from Person
$teacher1->setSalary(10);

$student1=new Student('Pauline','98765432S');//using __construct from Person
$student1->setStudyField('ASIX');

$apprentice1=new Apprentice('ASIX');//using __construct from Student
$apprentice1->setFCTBusinessName(10);


echo $teacher1->print();//using method print implemented on Person class
echo $student1->print();//using method print implemented on Student class
echo $apprentice1->print();//using method print implemented on Student class
 ?>
</body>
</html>
