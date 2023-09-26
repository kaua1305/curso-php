<div class="titulo">Funcoes Anomimas</div>

<?php 

$soma = function($a, $b){
    return $a + $b;
};

echo $soma(1,2) . "<br>";

function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}

executar(2, 3, "+", $soma);

$divisao = function($n, $m){
    return $n / $m;
};

function executar2($n, $m, $op, $funcao){
    $resultado = $funcao($n, $m);
    echo "$n $op $m = $resultado<br>";
}

executar2(6, 2, "/", $divisao);

$divisao = function($n, $m){
    return $n * $m;
};

function executar3($n, $m, $op, $funcao){
    $resultado = $funcao($n, $m);
    echo "$n $op $m = $resultado<br>";
}

executar3(6, 2, "*", $divisao);

?>