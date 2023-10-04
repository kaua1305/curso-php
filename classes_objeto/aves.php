<div class="titulo">Aves</div>

<?php 

Class Aves {
    public $nome;
    public $tiposDeAsas;
    public $tiposDeBicos;
    public $habitat;
    public $alimentacao;
    public $tiposDePes;

    function __construct ($novoNome, $tiposDeAsas, $tiposDeBicos, $habitat, $alimentacao, $tiposDePes){
        $this->nome = $novoNome;
        $this->tiposDeAsas = $tiposDeAsas;
        $this->tiposDeBicos = $tiposDeBicos;
        $this->habitat = $habitat;
        $this->alimentacao = $alimentacao;
        $this->tiposDePes = $tiposDePes;
    }

    public function apresentar() {
        echo "A ave {$this->nome}, tem como habitat natural {$this->habitat}, elas se alimentam naturalmente de {$this->alimentacao}.<br>
         A asa dela é {$this->tiposDeAsas}, e os tipo de pé é {$this->tiposDePes}, o tipo de bico é {$this->tiposDeBicos}.";

    }
}

$ave1 = new Aves("Pica-Pau", "florestas", "vermes e frutas", "longas", "quatro dedos");
$ave1 -> apresentar();

?>