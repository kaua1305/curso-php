<div class="titulo">Argumentos & Retornos</div>

<?php 
function obterMensagem() {
    return 'Seja bem vindo(a)!';//retornando a string
}

$mensagem = obterMensagem();//guardando a string na variavel

echo $mensagem;

//funcao com parametro
function obterMensagegmComNome($nome){
    return "Bem vindo, {$nome}";
}

echo '<br>' . obterMensagegmComNome("João");//chamou a funcao com argumento
echo '<br>' . obterMensagegmComNome("Marcos");

function soma(){
    return 5 + 20;
}

function somaComParametros($x, $y){
    return $x + $y;
}

echo '<br>' . "A soma é: " . soma();//funcao sem parametros
echo '<br>' . "A soma com argumentos é: " . somaComParametros(100, 25);//funcao com parametros



?>