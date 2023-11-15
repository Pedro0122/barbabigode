<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "barbabigode";

// Criando nova conexão 
global $conn;
$conn = mysqli_connect($servidor, $usuario, $senha, $bd);
// Verificar a conexão 
if (!$conn) {
    die("Falha na conexão" . mysqli_connect_error());
}
?>



