<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de divisão</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php 
    $dividendo = $_GET["dividendo"] ?? 0;
    $divisor = $_GET["divisor"] ?? 1;
    $quociente = intdiv($dividendo, $divisor);//(int)($dividendo/$divisor);
    $resto = $dividendo % $divisor;
    
    
    
    ?>
    <main>
        <h1>Anatomia de uma Divisão</h1>
        <form action="<?= /*php echo*/ $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
                <input type="number" name="dividendo" id="idDividendo" value="<?=$dividendo?>">
            <label for="divisor">Divisor</label>
                <input type="number" name="divisor" id="idDivisor" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>
        <section>
            <h2>Estrutura da Divisão</h2>
            <table class="divisao"> 
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$quociente?></td>

                </tr>

            </table> 
            


            


        </section>


    </main>
</body>
</html>