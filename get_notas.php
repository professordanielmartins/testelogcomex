<?php

// Arquivo: get_notas.php

// Conexão com o banco de dados
$servername = "10.16.4.48:3006";
$username = "consulta";
$password = "123456";
$dbname = "teste";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consulta SQL para selecionar todos os valores da tabela
$sql = "SELECT * FROM Notas";
$result = $conn->query($sql);

// Verifica se existem resultados e os retorna como JSON
if ($result->num_rows > 0) {
    $rows = array();
    while($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($rows);
} else {
    echo "0 resultados";
}
$conn->close();

