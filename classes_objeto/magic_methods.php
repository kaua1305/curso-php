<div class="titulo">Métodos Mágicos</div>

<?php

class PessoaN{
    public $nome;
    public $idade;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo "<br> E morreu!! <br>";
    }

    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos. <br>";
    }

    public function __get($atrib){
        echo "Lendo atributo não declarado: {$atrib} <br>";
    }

    public function __set($atrib, $valor){
        echo "Alterando atributo não declarado: {$atrib} / {$valor} <br>";
    }

    public function __call($metodo, $params){
        echo "Tentando executar o metodo: {$metodo}";
        echo ", com os parametros: <br>";
        print_r($params);//print_r serve para imprimir de forma legivel para todo humano
    }
}

$pessoa = new PessoaN("Ricardo", 40);
echo $pessoa;//chamando o __toString
$pessoa->nomeComletoDaPessoa = "Ricardo da Silva";//__set
$pessoa->nomeComletoDaPessoa;//__get
$pessoa->exec(1, "teste", true, [1,2 ,3 ,4, 5, 6]);//__call
$pessoa = null;//chamando o __destruct

?>