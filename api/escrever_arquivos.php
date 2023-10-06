<div class="titulo">Escrevendo Arquivos</div>

<?php

$arquivo = fopen('teste.txt', 'w');/*O 'w' indica que o arquivo será aberto no modo de escrita,
 o que significa que você pode escrever dados no arquivo.*/
fwrite($arquivo, "Valor Iicial \n");

$str = "Segunda Linha \n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, "Novo Conteudo ");
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a');/*O modo "a" é usado para abrir um arquivo para escrita, mas 
ao contrário do modo "w" (escrita), o modo "a" não apaga o conteúdo existente do arquivo. Em vez 
disso, ele posiciona o ponteiro de escrita no final do arquivo, permitindo que você adicione novos
 dados ao final do arquivo sem afetar o conteúdo anterior. Se o arquivo não existir, ele será criado.*/
fwrite($arquivo, "Com novos valores \n");
fwrite($arquivo, "Adicionados em um segundo momento \n");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste2.txt', 'x');/*O modo "x" é usado para criar um arquivo somente se ele não 
existir. Se o arquivo já existir, a função fopen() retornará false e não abrirá o arquivo. Isso é 
útil quando você deseja criar um arquivo novo e garantir que ele não substitua um arquivo existente 
com o mesmo nome.*/
fwrite($arquivo, "Arquivo Novo!!");
fclose($arquivo);

?>