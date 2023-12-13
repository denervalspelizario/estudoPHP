<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos primitivos</title>
</head>
<body>
  <h1>Teste de tipos primitivos</h1>
  <?php 
      $num = 300; 

      echo "O valor da varável é $num <br>";

      // função nativa var_dump  indica o valor e o tipo

      var_dump($num); //  int(300)
      echo "<br>";

      // coerção em php

      $num02 = (int) "950";  // tranformando um valor string em inteiro
      
      var_dump($num02); // int(950)

      // array em php
      echo "<br>";
      $vet = [6, 2, 9, 3, 5];
      var_dump($vet); // array(5) { [0]=> int(6) [1]=> int(2) [2]=> int(9) [3]=> int(3) [4]=> int(5) }

      
    ?>
</body>
</html>