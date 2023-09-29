<deiv class="titulo">Membros Estáticos <br></deiv>

<?php 

/*this serve para acessar membros de instancia(variaveis ou metodos)
de uma classe apartir de dentro da classe*/

/*self é usado para acessar membros estaticos(variaveis ou metodos)
a partir de dentro da classe*/

class A {
    public $naoStatica = "Variavel de instancias";
    public static $statico = "Variavel de classe(estática)";

    public function mostrarA(){
        echo "<br> Não estático = {$this->naoStatica} <br>";
        //primeira tentativa de imprimir a variavel estatica
        //echo "Variavel Estática = {$this->statico} <br>";
        //segunda tentativa...
        echo "Variavel Estatica = " . self::$statico . "<br>";
    }

    public static function mostrarStaticA(){
        echo "Estatica = " . self::$statico . "<br>";
    }
}

$obA = new A();
$obA->mostrarA();
A::mostrarStaticA();
A::$statico = "Alterar membro de classe";
A::mostrarStaticA();

?>