<?php

$n = intval(trim(readline()));

for ($i = 0; $i < $n; $i++) {
    $cod = trim(readline());
    $v = intval(trim(readline()));
    $comp = strlen($cod);
    
    for ($j = 0; $j < $comp; $j++) {
        if ($cod[$j] == '\0') break;
        if ((ord($cod[$j]) - $v) < 65) {
            echo chr((ord($cod[$j]) - $v) + 26);
        } else {
            echo chr((ord($cod[$j]) - $v));
        }
    }
    echo "\n";
}

?>