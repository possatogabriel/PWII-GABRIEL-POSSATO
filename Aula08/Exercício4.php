<?php 

$inicio = 15;
$final = 25;

if ($inicio < $final) {
    echo "NÚMERO FINAL: $final <br/>";
    echo "<br/>";

    for ($i = $final - 1; $i > $inicio; $i--) {
        echo "INTERVALO: $i <br/>";
    }

    echo "<br/>";
    echo "NÚMERO INICIAL: $inicio <br/>";
}

else if ($inicio > $final) {
    echo "NÚMERO INICIAL: $inicio <br/>";
    echo "<br/>";

    for ($i = $inicio + 1; $i < $final; $i++) {
        echo "INTERVALO: $i <br/>";
    }

    echo "<br/>";
    echo "NÚMERO FINAL: $final <br/>";
}

?>