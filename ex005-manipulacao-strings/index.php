<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manipulação de strings</title>
</head>
<body>
  <?php 
    $nome = "Denerval";
    $sobreNome = "Pelizario";
  
    // diferença entre aspas duplas"" e aspas simples ''
    
    echo "$nome $sobreNome \u{1f596}";  // aspas duplas ele interpreta os dados 

    echo "<br>";

    echo '$nome $sobreNome \u{1f596}';  // aspas simples ele NÃO interpreta os dados 


    echo "<br>";

    const CANAL = "Curso em Vídeo \u{1F499}";
    echo "Eu adoro o " . CANAL;

    echo "<br>";

    echo "Estamos no ano de " . date('Y');

    echo "<br>";
    // exemplo de interpolação de string

    $newNome = "Rodrigo";

    $newSobreNome = "Nogueira";

    // 2 exemplos
    echo "$newNome ". "Minotauro" . " $newSobreNome";
    echo "<br>";
    echo "$newNome  \"Minotauro\"  $newSobreNome";

    // tabulação

    $nome02 = "Dener";
    $sobreNome02 = "Pelizario";
    $apelido = "Vaval";

    echo "<br>";
    echo "$nome02 \t\t \"$apelido\" \t\t$sobreNome02";




  ?>
</body>
</html>