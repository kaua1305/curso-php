<div class="titulo">Classe Abstrata</div>

<?php
abstract class AbstrataExemplo {
    public abstract function metodo01();
    abstract protected function metodo02($parametro);
}

abstract class FilhaAbstrataExemplo extends AbstrataExemplo{
    public function metodo01(){
        echo "Executrando método 01 <br>";
    }
    abstract public function metodo03();
}

class Concreta extends FilhaAbstrataExemplo{
    public function metodo01(){
        echo "Executando... Metodo01 extendido <br>";
        parent::metodo01();
    }
    public function metodo02($parametro){
        echo "Executando... Metodo02, com parametro <br>";
    }
    public function metodo03(){
        echo "Executando o metodo03 <br>";
        $this->metodo02('Interno');
    }
}

$c = new Concreta();
$c->metodo01();
$c->metodo02("Externo");
$c->metodo03();
echo "Fim...";



?>