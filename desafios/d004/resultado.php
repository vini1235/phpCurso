<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor 2</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <h1>Conversor de moedas v2.0</h1>

        <?php 
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"]["0"]["cotacaoCompra"];
        $reais = $_GET["reais"];
        $dolar = $reais / $cotacao;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $reais, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
         <p>*Cotação obtida diretamente do site do <strong>Banco Central do Brasil</strong>
        <p>
            <a href="javascript:history.go(-1)">
                <input type="button" value="Voltar">
            </a>
        


    </main>
</body>
</html>