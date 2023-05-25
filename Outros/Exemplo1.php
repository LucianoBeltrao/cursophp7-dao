<?php

$frase = " A repetição é a mãe da retenção";

$q = strpos($frase, "mãe");

$texto = substr($frase, $q, strlen($frase));

var_dump($texto);



$nascimento = new DateTime();

var_dump($nascimento); 
///////////////////////////////////////////////////////////////
?>

'<br>' '<br>'
'<br>' '<br>'
'<br>' '<br>'

<?php

$arquvio = fopen("Exemplo1.php", "r");

//var_dump($arquvio);

$nulo = NULL

?>
'<br>' '<br>'
'<br>' '<br>'
'<br>' '<br>'

<?php

$nome = (int)$_GET["a"];

var_dump($nome);

?>

'<br>' '<br>'
'<br>' '<br>'
'<br>' '<br>'

<?php

$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>

'<br>' '<br>'
'<br>' '<br>'
'<br>' '<br>'


<?php
 $nome = "Luciano";

 function teste(){

    global $nome;
    echo $nome;
 }
function teste2(){
    $nome = "joao";
    echo $nome." agora no teste2";
}

teste();
teste2();
 ?>
    