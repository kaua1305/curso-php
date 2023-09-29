<div class="titulo">Polimorfismo</div>

<?php

abstract class Comida{
    public $peso;
}

class Arroz extends Comida{

}

class ArrozAGrega extends Comida{

}

class Feijão extends Comida{
    
}

class Sorvete extends Comida{
    
}

class PessoaN1{
    public $peso;

    function __construct($peso){
        $this->peso = $peso;
    }

    public function comer(Comida $comida){
        $this->peso += $comida->peso;
    }
}

$c1 = new Arroz();
$c1->peso = 0.45;

$c2 = new Sorvete();
$c2->peso = 0.65;

$c3 = new ArrozAGrega();
$c3->peso = 0.95;

$p = new PessoaN1(83.45);
$p->comer($c1);
$p->comer($c2);
$p->comer($c3);

echo $p->peso;

?>