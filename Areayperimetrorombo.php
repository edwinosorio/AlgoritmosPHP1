<?php

$n="4";
$lado="9";
$diagonalmayor="9";
$diagonalmenor="6";

$perimetro=($n*$lado);
$Area=($diagonalmayor*$diagonalmenor)/2;


?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Algoritmos</title>
  </head>
  <body>


    <h5>numero <?php echo $n ?></h5>
    <h5>la altura es <?php echo $lado ?></h5>
<hr>
    <h5>diagonalmayor= <?php echo $diagonalmayor ?></h5>
    <h5>diagonalmenor= <?php echo $diagonalmenor ?></h5>
<hr>
    <h1>El area del rombo es es :<?php echo $Area ?></h1>
      <h1>El perimetro del rombo es :<?php echo $perimetro ?></h1>







  </body>
</html>
