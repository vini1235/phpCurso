<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
    <h1>Analisador de Número Real</h1>
    <?php 
    $num = $_GET["num"] ?? 0;
    $sub = (int) $num;
    $numDec = $num - $sub;
    $numDecformatado = number_format($numDec, 3);

    echo "<ul><li> A parte inteira do número é <strong>".number_format($sub, 0, ",", ".")."</strong></li><li> A parte fracionária do número é <strong>".number_format($numDecformatado, 3, ",", "0")."</strong>";
    ?>
    <a href="javascript:history.go(-1)">
                <input type="button" value="Voltar">
            </a>
    </main>
</body>
</html>