
<?php

$conn = new PDO("pgsql:host=localhost;dbname=luciano_muriae", "postgres", "L5a0b6c9*");

$result = $conn->prepare("SELECT data, valor_estoque FROM saldo_estoque_diario WHERE idsetor = 1 and data between '2022-06-01' and '2022-06-20';");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){

    foreach ($row as $key => $value){

        echo "<strong>".$key.":</strong>".$value."<br>";

    }

    echo"=====================================================<br>";
}
var_dump($results);

?>