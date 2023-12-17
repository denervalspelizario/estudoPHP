<?php 

  // Array associativa  
  $arr = ['nome' => 'Dog', 'patas' => 4, 'cor' => 'Caramelo'];

  echo $arr['nome'];

  echo "<br>";

  echo $arr['patas'];

  echo "<br>";
  echo $arr['cor'];

  echo "<br>";

  print_r($arr);

  $arrayExercicio = ['nome' => 'BMW X6','potencia' => '390 cv', 'cor' => 'Azul Marinho', 'valor' => 'R$750.000,00' ];

  echo "<br>";

  print_r($arrayExercicio);

  echo "<br>";

  echo "$arrayExercicio[nome],  com potencia $arrayExercicio[potencia], cor $arrayExercicio[cor], no valor de $arrayExercicio[valor]";

  echo "<br>";



  $pessoa = ['nome' => 'Denerval', 'idade' => 36, 'cor' => 'branco', 'peso' => 141, 'altura' => 1.75];


  if($pessoa['idade'] > 18){
    echo "$pessoa[nome] é maior de idade";
  }



?>