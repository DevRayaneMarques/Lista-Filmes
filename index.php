<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Filmes</title>
</head>
<body>
    <h1>Lista de Filmes</h1>
       <?php
       $filmes = array(
           "Matrix",
           "O Poderoso Chefão",
           "Interestelar",
           "Cidade de Deus",
           "O Senhor dos Anéis"
       );
   ?>
   echo "<ul>";
    foreach ($filmes as $filme) {
        echo "<li>$filme</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
