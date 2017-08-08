<?php

$a="160";
$b="30000";
$c="98000";


$d=($a*$b)-$c;

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Algoritmos</title>
  </head>
  <body>
    <h4>Horas trabajadas: <?php echo $a ?></h4>
    <h4>Sueldo por horas <?php echo $b ?></h4>
    <h4>Impuestos <?php echo $c ?></h4>

    <h1>el pago neto es $<?php echo " $d "; ?></h1>

  </body>
</html>
