<?php 

// classe pessoa que imprime na tela "ola pessoal"
class Pessoa {

  function falar(){
    echo "olá pessoal!";
  }

}

$denerval = new Pessoa();  // chamando os atributos da classe pessoa para a variavel denerval

$denerval->nome = 'Denerval';

echo $denerval->nome;

echo "<br>";

$denerval->falar();  // chamando a função falar da classe pessoa 

?>