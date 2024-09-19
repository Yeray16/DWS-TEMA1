<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista Numeros Primos</h1>
    <?php
        function isPrime(int $n) : bool{
            for($i=2; $i < $n; $i++){
                if($n%$i==0){
                    return false;
                }
            }
            return true;
        }
        //echo isPrime(7) ? "Es primo" : "No es primo";
        function primeList(int $start, $amount=10) : array {
            $list = [];
            while(count($list) < $amount){
                if(isPrime($start)){
                    $list[] = $start;
                }
                $start++;
            }
            return $list;
        }
        // Mostramos la lista de números primos
        // La etiqueta a continuación es para mostrar los números
        echo "<ol>";
        foreach(primeList(2,15) as $prime){
            echo "<li>$prime</li>";
        }
        echo "</ol>";
        //print_r(primeList(3))
    ?>
</body>
</html>