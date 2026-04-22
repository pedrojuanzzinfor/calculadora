<?php
   $resul=$_GET['resul'];
    ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="frufru.css">
    <title>Document</title>
</head>
<body>
    <?php
    if ($resul==0) echo "<p id='brutal'>BRUTAL! não sobrou nada</p>";
    ?>
    <div id="grade">
    <img id='gliter' src="╰—╮S͟p͟a͟r͟k͟l͟e͟s͟﹒♡﹒.png" alt="brilhos amarelos">  
    <div id='resultado'>
    <h1>Resultado:</h1>
    <?php
    if ($resul==67) echo "<p id='sixseven'> $resul</p>";
    else echo "<p>$resul</p>";
    ?>
    </div>
    <img src="pink pixel hearts.png" id="coracao" alt="corações cor-de-rosa">
    </div>
    <img id='imagemDecorativa' src="flor-imagem-animada-0218.gif" alt="imagem decorativa"> 
    <script src="calculator.js"></script>
</body>
</html>