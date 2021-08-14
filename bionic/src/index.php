<?php

echo "Testando conexão <br /> <br />";
//$servername = "192.168.1.8";
$servername = "192.168.1.10";
$username = "phpuser";
$password = "pass";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "Conectado com sucesso";

?>