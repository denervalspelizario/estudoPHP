<?php 

$temRg = true;

if($temRg) {
  echo "Usuário tem rg e pode paticipar do processo seletivo";
} else {
  echo "Usuário não tem a documentação adequada para participar do processo seletivo";
}


echo "<br>";

if(is_bool($temRg)){
  echo  "A variavel tem rg é um boleano";
}




?>