<div class="titulo">Datas 01</div>

<?php

echo time() . "<br>";
echo date('D, d \d\e M \d\e Y H:i, hA') . "<br>";
echo strftime('%A, %d de %B de %Y', time()) . "<br>";

?>