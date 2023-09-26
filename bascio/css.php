<div class="titulo">integração CSS</div>
<h1 center>
    <?php
    echo "Olá";
    echo "<small>";
    echo " Mundo";
    echo "</small>"; 
    ?>
</h1>

<?= "<div center azul> Outra <big>forma</big> de me 'Expressar'! </div>" ?>

<br>

<div center><button dobro><?= "legal" ?></button></div>

<style>
    button {
        padding: 15px <?= 2 * 15 ?>px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    <?= "[azul]" ?> {
        color: #4286f4;
    }

    [dobro] {
        font-size: 2rem;
        
    }
</style>