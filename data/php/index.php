<html>

<head>
<title>Exemplo PHP</title>
</head>


<?php
ini_set("display_errors", 1);
header('Content-Type: text/html; charset=iso-8859-1');



echo 'Versao Atual do PHP: ' . phpversion() . '<br>';

$servername = "db";
$username = "root";
$password = "Senha123";
$database = "testedb";

// Criar conexão


$link = new mysqli($servername, $username, $password, $database);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$valor_rand1 =  rand(1, 999);
$valor_rand2 = strtoupper(substr(bin2hex(random_bytes(4)), 1));


$query = "INSERT INTO dados (AlunoID, Nome, Sobrenome, Endereco, Cidade) VALUES ('$valor_rand1' , '$valor_rand1', '$valor_rand1', '$valor_rand1', '$valor_rand1')";


if ($link->query($query) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $link->error;
}
?>
</html>
