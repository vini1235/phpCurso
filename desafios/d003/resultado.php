<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas v1.0</h1>
        <?php 
        $cotacao = 5.56;
        $reais = $_GET["reais"];
        $dolar = $reais / $cotacao;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <p>*<strong>Cotação fixa de R$ 5,56</strong> informada diretamente no código.
        <p>
            <a href="javascript:history.go(-1)">
                <input type="button" value="Voltar">
            </a>
        </p>
    </main>
</body>
</html>