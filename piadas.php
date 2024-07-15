<?php 
require_once 'cabecalho.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class = "chuck">
    <h1 >Piadas Chuck Norris</h1> <img src="imagens/unnamed.webp" alt="" width = "60px" height = "60px">
    <button class = "butao"><a href="piadas.php">Nova Piada</a></button>
    </div> 
    <!-- botao pra nova piada!-->
    

</body>
</html>

<?php  //// esse busca a piada da API e decodifica a resposta JSON//
$resposta =  json_decode(file_get_contents("https://api.chucknorris.io/jokes/random"), true);
if(!empty($resposta)){
    ?>
    <img src="<?=$resposta['icon_url']?>"/><br/><br/> 
    <p class = "piada"><strong>Piada:</strong></p>
    <br>
    <p class = "letra"><?=$resposta['value']?></p>

    <?php //icone e as piadas//
}


echo "<br>";  //só repetindo//

$resposta =  json_decode(file_get_contents("https://api.chucknorris.io/jokes/random"), true);
if(!empty($resposta)){
    ?>
    <img src="<?=$resposta['icon_url']?>"/><br/><br/>
    <p class = "piada"><strong>Piada:</strong></p>
    <br>
    <p class = "letra"><?=$resposta['value']?></p>

    <?php
}


echo "<br>"; ///só repetindo//

$resposta =  json_decode(file_get_contents("https://api.chucknorris.io/jokes/random"), true);
if(!empty($resposta)){
    ?>
    <img src="<?=$resposta['icon_url']?>"/><br/><br/>
    <p class = "piada"><strong>Piada:</strong></p>
    <br>
    <p class = "letra"><?=$resposta['value']?></p>

    <?php
}
