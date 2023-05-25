
<?php


//OPERADORES DE STRING E DE CONCATENAÇÃO;

$nome = "Hcode";

echo $nome. " mais alguma coisa<br>";

$nome.=" Treinamentos";

echo $nome;

?>

<br>
<br>


<?php


$valorTotal = 0;

$valorTotal += 100;

$valorTotal += 25;

echo $valorTotal;

?> 

<br>
<br>

<?php
//OPERADORES ARITIMÉTICOS

$a = 10;
$b = 5;

echo $a - $b;
echo "<br>";
echo $a + $b;
echo "<br>";
echo $a * $b;
echo "<br>";
echo $a / $b;
echo "<br>";
echo $a % $b;
echo "<br>";
echo $a ** $b;

?> 

<br>
<br>


<?php

$a = 55.0;

$b = 55;

var_dump($a > $b);
echo "<br>";
var_dump($a == $b);
echo "<br>";
var_dump($a != $b);
echo "<br>";
// COMPARANDO O VALOR E O TIPO DAS VARIÁVEIS
echo "<br>";
var_dump($a !== $b);
echo "<br>";
var_dump($a === $b);


?>

<br>
<br>


<?php
// SPACESHIP

$a = 50;
$b = 35;

var_dump($a <=> $b);

?>

<br>
<br>


<?php
// NULL COALESCE

$a = null;
$b = null;
$c = 10;

echo $a ?? $b ?? $c;

?>

<br>
<br>


<?php
// NULL COALESSE

$a = 10;
echo ++$a; 

echo "<br>";
echo $a;

?>

<br>
<br>

<?php
// NULL COALESSE
//  && ---> AND
//  || ---> OR
?>

<?php
// NULL COALESSE
//  && ---> AND
//  || ---> OR
?>

<br>
<br>

<?php
$meses = array(
    "Janeiro", "Fevereiro", "Março", 
    "Abril", "Maio", "Junho", 
    "Julho", "Agosto", "Setembro", 
    "Outubro", "Novembro", "Dezenmbro"
);

foreach($meses as $index => $mes){

    echo "Indice: ".$index."<br>";
    echo "O mês é: ".$mes."<br><br>";

}
?>

<br>
<br>



<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>
 
<?php
if (isset($_GET)) {
    
    foreach ($_GET as $key => $value) {

        echo "Nome do campo: "  . $key;

        echo "Valor do campo: ". $value;

        echo "<hr>";
    
    }
}

?>


<?php

$condicao = true;

while ($condicao){

    $numero = rand(1, 10);

    if ($numero === 3){
        echo "TRES I I I";
        $condicao = false;
    }

    echo $numero . " ";
}

?>

<br>
<br> 

<?php

$frutas = array("laraja", "abacaxi", "melancia");

print_r($frutas);
?>

<br>
<br>

<?php

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3];


echo end($carros[1]);
?>

<br>
<br>

<?php

$pessoas = array();

array_push ($pessoa, array(
    'nome' => 'João'
    'idade' => ''
))
