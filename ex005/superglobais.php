<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <main>
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);
                session_start();
                $_SESSION["Teste"] = "Funcionou!";
                echo "<h1> Testando superglobais</h1>";
                var_dump($_GET);
                var_dump($_POST);
                var_dump($_REQUEST);
                var_dump($_COOKIE);
                var_dump($_SESSION);
                var_dump($_ENV);
               // foreach(getenv() as $c => $v){
               // echo "<br>$c - $v";
               // }
               var_dump($_SERVER);
               var_dump($GLOBALS);
            ?>



        </pre>
    </main>
</body>
</html>