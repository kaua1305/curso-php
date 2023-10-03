<div class="titulo">Erros Personalizados</div>

<?php

class FaixaEtariaException extends Exception{
    public function __construct($message, $code = 0, $previous = null){
        echo "Erro Personalizado: $message<br>";
        parent::__construct($message, $code, $previous);
    }
}

function calcularTempoAposentadoria($idade){
    if($idade < 18){
        throw new FaixaEtariaException("Ainda está muito longe para se aposentar <br>");
    }
    if($idade > 70){
        throw new FaixaEtariaException("Já deveria está aposentado <br>");
    }
    return 70 - $idade;
}

$idadeAvaliadas = [15, 30, 60, 80];

foreach($idadeAvaliadas as $idade){
    try{
        $tempoRestante = calcularTempoAposentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes, ";

    }catch(FaixaEtariaException $e){
        echo "Não foi possível calcular para $idade anos. <br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}

?>