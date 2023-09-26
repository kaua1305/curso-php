<div class="titulo">Closure & Callable</div>

<?php

// Closure (Função Anônima):

// Uma closure é uma função anônima, o que significa que ela não precisa ser definida com 
// um nome.
// Ela é definida usando a sintaxe function () { /* código da função */ }.
// As closures podem capturar variáveis do ambiente circundante, tornando-as úteis para 
// criar funções que preservam o estado.
// Closures são frequentemente usadas como callbacks ou em situações onde uma função 
// temporária é necessária.

// Um "callback" é uma função que é passada como argumento para outra função e é executada
// após a conclusão de uma tarefa específica ou evento. Em outras palavras, é uma técnica de
// programação que permite que você especifique qual código deve ser executado quando uma 
// determinada ação ocorre.

// function executarOperacao(a, b, operacaoCallback) {
//     const resultado = operacaoCallback(a, b);
//     console.log(Resultado: ${resultado});

// O termo "callable" em PHP é uma maneira de referenciar qualquer valor 
// que possa ser chamado como se fosse uma função.
// }


$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
}

echo $soma1(2, 3) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

echo soma2(2, 3) . '<br>';
echo (is_callable('soma2') ? 'Sim' : 'Não') . '<br>';

var_dump($soma1);

function executar1($a, $b, $op, Callable $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar1(2, 3, '+', $soma1);
executar1(2, 3, '+', 'soma2');

function executar2($a, $b, $op, Closure $funcao) {
    $resultado = $funcao($a, $b) ?? 'Nada';
    echo "$a $op $b = $resultado<br>";
}

echo '<br>';
executar2(100, 100, '+', $soma1);
//executar2(3000, 5000, '+', 'soma2')

?>







