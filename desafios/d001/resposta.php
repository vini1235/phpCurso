<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1> Resultado Final</h1>
    
    <?php 
    $num = $_GET["num"];
    echo "<p>O número escolhido foi <strong>$num</strong>";
    echo "<p>Seu antecessor é " . $num - 1;
    echo "<p>Seu sucessor é " . $num + 1;
    
    ?>
    
    <p><a href="javascript:history.go(-1)"><input type="button" value="Voltar"></a></p>
</main>
</body>
</html>