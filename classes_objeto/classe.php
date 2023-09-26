<div class="titulo">Primeira Classe</div>

<?php 

Class Cliente {
    //atributos
    public $nome = "Anônimo";
    public $idade = 18;
    public function apresentar() {
        echo "Nome: {$this->nome} Idade: {$this->idade} <br>";
    }
}

$c1 = new Cliente();// criação de objeto --- instanciar uma classe
$c1 -> nome = "Marcos,";
$c1 -> idade = 89;
$c1 -> apresentar();// acesando uma função dentro da classe

$cliente2 = new Cliente();
$cliente2 -> nome = "Josefa,";
$cliente2 -> idade = 72;
$cliente2 -> apresentar();

?>