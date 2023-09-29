<div class="titulo">Traits #01</div>

<?php 
/*trait é um mecanismo que permite a reutilizacao do codigo
em classes, ou seja, em vez de usar a heranca para compartilhar
funcionalidades emtre calsse voce pode usar traits para adicionar
metodos e propriedades e varia classes independentes*/

/* Isset() é usada para verificar se uma variável foi definida e se
 seu valor não é nulo (null). Ela retorna true se a variável estiver 
 definida e tiver um valor diferente de null, e false caso contrário.*/

/*trim() remover espaços em branco (ou outros caracteres especificados) do início e do final de uma string
exemplo felipe__
*/

trait validacao{
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validarMelhorAString{
    public $a = "Valor A";
    public $b = "Valor B";
    private $c = "Valor Privado";
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class UsuarioNovo{
    use validacao, validarMelhorAString;

    public function imprimirValorC(){
        echo "<br>" . $this->c;
    }
}

$usuario01 = new UsuarioNovo();
var_dump($usuario01->validarString(" "));//errado devido a contagem de espaco
echo "<br>";
var_dump($usuario01->validarStringMelhor("                 "));
echo "<br>";

echo $usuario01->a, "<br>" . $usuario01->b;
echo $usuario01->imprimirValorC()

?>