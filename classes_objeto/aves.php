<div class="titulo">Aves</div>

<?php 

Class Aves {
    public $nome;
    public $tiposDeAsas;
    public $tiposDeBicos;
    public $habitat;
    public $alimentacao;
    public $tiposDePes;

    public __construct($nome, $tiposDeAsas, $tiposDePes, $tiposDeBicos, $habitat, $alimentacao)

    public function apresentar() {
        echo "A ave {$this->nome}, tem como habitat natural {$this->habitat}, elas se alimentam naturalmente de {$this->alimentacao}.<br>
         A asa dela é {$this->tiposDeAsas}, e os tipo de pé é {$this->tiposDePes}, o tipo de bico é {$this->tiposDeBicos}.";

    }
}

$ave1 = new Aves("Pica-Pau", )

?>