<?php

$qualasuaidade = 11; 

$idadecrianca = 12;
$idademaior= 18;
$idademelhor = 60;

if ($qualasuaidade < $idadecrianca){

    //echo "criança";

} else if ($qualasuaidade < $idademaior){

    //echo "Adolescente";

} else if ($qualasuaidade < $idademelhor){

    //echo "Adulto";

} else{
 
    //echo "idoso";

}


?>

'<br>''<br>'

<?php

$frutas = array("laranja", "abacaxi", "melancia");


//print_r($frutas);

?>


'<br>''<br>'

<?php

$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";


$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

//echo $carros[0][3];



//echo  end($carros[1]);


?>

'<br>''<br>'

<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
)); 

array_push($pessoas, array(
    'nome' => 'Glaucio',
    'idade' => 25
));

echo json_encode($pessoas);

?>

'<br>''<br>'

<?php

define("SERVIDOR", "127.0.0.1");
 
echo SERVIDOR;


?>

'<br>''<br>'

<?php

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test',
]);

print_r(BANCO_DE_DADOS);
?>


'<br>''<br>'


<?php

echo PHP_VERSION;

?>

'<br>'
'<br>'

<?php

define("BANCO_DE_DADOS", [
    '127.0.0.1',
    'root',
    'password',
    'test',
]);

print_r(BANCO_DE_DADOS);
?>







