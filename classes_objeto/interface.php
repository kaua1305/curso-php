<div class="titulo">Interface</div>

<?php 
/*interface é uma estrutura que permite definir
um conjunmto de metodos que uma classe deve implementar.
As interfaces sao usadas para criar um contrato entre classes*/

interface Veiculo {
    public function ligar();
    public function desligar();
    public function acelerar($velocidade);
}
//implementando a interface em uma classe
class Carro implements Veiculo{
    public $velocidade;
    public function ligar(){
        echo "Ligar com o botão Power e precisa de chave especial <br>";
    }
    public function desligar(){
        echo "Para desligar aperte e segure por três segundos o botão Power <br>";
    }
    public function acelerar($velocidade){
        $this->velocidade += $velocidade;
    }
}
class Moto implements Veiculo{
    public function ligar(){
        echo "Inserir a chave e girar no sentido horário <br>";
    }
    public function desligar(){
        echo "Girar no sentido anti-horário e retirar a chave <br>";
    }
    public function acelerar($velocidade){
        $this->velocidade += $velocidade;
        }
    }


$car = new Carro();
echo "Carro: ";
$car->ligar();
$car->desligar();
$moto = new Moto();
echo "<br>Moto: ";
$moto->ligar();
$car->desligar();

?>