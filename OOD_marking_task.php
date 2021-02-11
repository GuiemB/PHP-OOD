<html>
<head>
<title>OOD_marking_task</title>
</head>
<body>
<?php

require "Accommodation.php";
require "BusinessAcc.php";
require "RuralAcc.php";
//objecte de la classe RuralAcc
$RuralAcc1=new RuralAcc (TIPUS_ACTIVITATS[0], INST_AIRE_LLUIRE[2], 10, MENJADOR[0]);


//objecte de la classe BusinessAcc
$BusinessAcc1=new BusinessAcc (1, MENJADOR[1]);


try {

  $BusinessAcc1->checkIn();
}

catch (Exception $error) {
  echo "Exception message is: " . $error->getMessage() . "<br>";
}


try {

  $BusinessAcc1->checkIn();
}

catch (Exception $error) {
  echo "Exception message is: " . $error->getMessage() . "<br>";
}




 ?>
</body>
</html>
