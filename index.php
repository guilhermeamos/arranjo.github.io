<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Arranjo</title>
</head>
<body>
<form action="" method="get" nome="form" id="form">
<h1>Arranjo</h1>
<label for="">Elemento do conjuto <b>n</b>:</label><br>
    <input type="text" name="n" id="n"><br>
<label for="">Elemento do grupo <b>p</b>:</label><br>
    <input type="text" name="p" id="p"><br><br>
<input type="submit" value="Calcular" name="calc"><input type="reset" value="Limpar" name="limpar">


</form>
<section id="phpp">
<?php
    require "./funcoes.php";
    $funcoe = new funcoes();
    if (filter_input(INPUT_GET, "calc", FILTER_DEFAULT)) {
        $n = filter_input(INPUT_GET, "n", FILTER_DEFAULT);
        $p = filter_input(INPUT_GET, "p", FILTER_DEFAULT);
        if (!empty($n)) {
            if (!empty($p)) {

                if ($n < $p) {
                    echo "<br>Valor n:{$n} menor que p{$p}, n tem que ser maior.<br>";
                } else {
                    echo "<br>n!/(n-p)!<br><hr>";
                    $arit = $n-$p;
                    $funcoe->visual($n,"n! => {$n}!");
                    $fat_n = $funcoe->fatorial($n);
                    $funcoe->visual($arit,"(n-p)!  => ($n-$p)! => {$arit}!");
                    $fat_p = $funcoe->fatorial($arit);
                    echo "<br>";
                    $soma_fat = $fat_n/$fat_p;
                    echo "<hr><br>resultado: ".$soma_fat." <br><br><hr>";

                }
            }else{
                echo "preencha o campo elemento do grupo.";
            }
        }else{
            echo "preencha o campo de elemento do conjuto.";
        }
    
    }
    
?>
</section>
</body>
</html>