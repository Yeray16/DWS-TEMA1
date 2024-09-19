<?php
    $fruits = ['manzana', 'plátano', 'kiwi'];
    print_r($fruits);
    
    print_r("<p>Longitud del array: ".count($fruits)."</p>");
    $fruits[]='naranjas';
    print_r($fruits);
    
    $fruitsCopy = $fruits;
    array_unshift($fruitsCopy, 'sandía');
    print_r($fruitsCopy);
    
    echo in_array('papaya', $fruits) ? "Está la fruta" : "No está la fruta";
    $fruits[]='papaya';
    echo in_array('papaya', $fruits) ? "Está la fruta" : "No está la fruta";
    print_r($fruits);
    
    $pos = array_search('manzana', $fruits);
    echo "La posicion de la manzana es $pos";
    
    unset($fruits[$pos]);
    $fruits=array_values($fruits);
    print_r($fruits);
    
    $apple = array_splice($fruits,$pos, 1)[0];
    print_r($fruits);
    echo $apple;
    //inserta manzana en la posicion 2
    array_splice($fruits,1,0,$apple);
    print_r($fruits);
    
    //ORdena en orden alfabético frutas y muestra en pantalla
    sort($fruits);
    print_r($fruits);
    
    //Invertir el orden del array
    $fruits = array_reverse($fruits);
    print_r($fruits);

    //Obtener una fruta de forma aleatoria
    echo array_rand($fruits);

    //Ordenar de forma aleatoria todas las frutas
    shuffle($fruits);
    print_r($fruits);

    // Crea un array de verduras
    $vegetables = ["berenjena", "zanahoria", "tomate", "pimiento"];
    print_r($vegetables);

    //Une el array de frutas y verduras en un único array llamado total
    $total = array_merge($fruits, $vegetables);
    sort($total);
    print_r($total);
?>