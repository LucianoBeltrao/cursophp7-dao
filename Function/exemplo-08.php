<?php

function soma(float ...$valores):float {

    return array_sum($valores);

}

echo var_dump(soma(2, 2, 8));
echo "<br>";
echo soma(25, 33, 52);
echo "<br>";
echo soma(1.5, 3.2, 4,5);
echo "<br>"; 