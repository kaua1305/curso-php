<div class="titulo">Visibilidade</div>

<?php 

Class VisibilidadeA {
    public $publico = "Público";
    protected $protegido = "Protegido";
    private $privado = "Privado";

    public function mostrarVisibilidade() {
        echo "Classe Visibilidade Publico = {$this->publico}<br>";
        echo "Classe Visibilidade Protegido = {$this->protegido}<br>";
        echo "Classe Visibilidade Privado = {$this->privado}<br>";
    }

    public function naoMostrar(){
        echo "Não vou imprimir";
    }

    public function vaiPorHeranca(){
        echo "Serei transmitido por heranca";
    }
}

$visi = new VisibilidadeA();
echo $visi->publico . ": <br>";
$visi->mostrarVisibilidade();

Class VisibilidadeB extends VisibilidadeA{
    public function mostrarVisibilidadeB() {
        echo "Classe VisibilidadeB Publico = {$this->publico}<br>";
        echo "Classe VisibilidadeB Protegido = {$this->protegido}<br>";
        echo "Classe VisibilidadeB Privado = {$this->privado}<br>";

        parent::vaiPorHeranca();

        echo "<br>";
    }

}

echo "<br>";
$visiB = new VisibilidadeB();
$visiB->mostrarVisibilidadeB();
$visiB->mostrarVisibilidade();
$visiB->vaiPorHeranca();

?>