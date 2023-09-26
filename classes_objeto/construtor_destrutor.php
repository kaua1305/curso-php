<div class="titulo">Contrutor & Destrutor</div>

<?php 

class Pessoa {
    public $nome;
    public $idade;

    function __construct($novoNome, $idade) {
        echo "Construtor invocado !! <br>";
        $this -> nome = $novoNome;
        $this -> idade = $idade;
    }
    function __destruct() {
        echo "classe pessoa morreu !!! <br>";
    }

    public function Apresentarpessoa() {
        echo "<br> {$this->nome}, {$this->idade} anos <br>";
    }
}

$pessoaNumero1 = new Pessoa("Rebeca", 40);
$pessoaNumero2 = new Pessoa("João", 60);
$pessoaNumero3 = new Pessoa("Roberto", 98);
$pessoaNumero4 = new Pessoa("Márcia", 55);

$pessoaNumero1 -> Apresentarpessoa();
unset($pessoaNumero1);
$pessoaNumero2 -> Apresentarpessoa();
unset($pessoaNumero2);
$pessoaNumero3 -> Apresentarpessoa();
unset($pessoaNumero3);
$pessoaNumero4 -> Apresentarpessoa();
unset($pessoaNumero4);

?>