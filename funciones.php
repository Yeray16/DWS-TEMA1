<!--ListadoImpares-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de impares</h1>
    <?php
        function oddList(int $start, int $end):void{
            for($i=$start; $i<=$end; $i++){
                if($i%2 != 0){
                    echo "<li>$i </li>";
                }
            }
        }
    ?>
    <ul>
        <?php
            oddList(5,14);
        ?>
    </ul>
</body>
</html>