<div class="titulo">Argumentos & Variaveis</div>

<?php 

function soma($x, $y){
    return $x + $y;
}

echo soma(14, 15) . "<br>";
echo soma(6, 5, 4) . "<br>";

function somaCompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $numero){
        $soma += $numero;
    }
    return $soma;
}

echo somaCompleta(1,2,3,4,5,6,7) . "<br>";

function menbros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if ($dependentes){
        foreach($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}
echo "<br>";
menbros("Ana Silva", "Pedro", "Rafaela", "Amanda");

echo "<br>";
menbros("Roberta", "Junior", "Matheus");

?>