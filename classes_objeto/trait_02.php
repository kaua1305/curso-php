<div class="titulo">Trait #02</div>

<?php

trait validacao{
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validarMelhorAString{
    public function validarStringMelhor($str){
        return isset($str) && trim($str);
    }
}

class UsuarioN{
    use validacao, validarMelhorAString{
        //validarMelhorAString::validarStringMelhor insteadof validacao;
        //validacao::validarString insteadof validarMelhorAString;

        validacao::validarString as validacaoSimples;
    }
}

$usuario02 = new UsuarioN();
var_dump($usuario02->validacaoSimples(" "));

?>