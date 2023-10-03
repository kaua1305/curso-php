<div class="titulo">TRY/CATCH</div>

<?php

//echo 7 / 0;
//echo intdiv(10,2);

try {
    echo intdiv(7,0);

}catch(Error $e){
    echo "Teve um erro no código...!!";//capturar a excecao do erro
}

try {
    throw new Exception("um erro muito estranho");//lança uma excecao do erro com uma mensagem
    echo intdiv(7,0);

}catch(DivisionByZeroError $e){
    echo "Divisão por zero";//captura a excecao especifica de divisao por zero(que nao ocorreu aqui)

}catch(Throwable $e){
    echo "Erro encontrado: " . $e->getMessage() . "<br>";//captura qualquer outra excecao(neses caso, a Exception que foi lancada acima)

}finally{
    echo "Sempre executado!! <br>";//o codigco dentro do bloco 'finally sempre sera executado, independentemente de ter havido excecoes ou nao

}

?>