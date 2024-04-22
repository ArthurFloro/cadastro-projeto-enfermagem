<?php
$hostname = "localhost"; 
$username = "root"; 
$password = "123456"; 
$database = "cad_enfermagem"; 

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome=$_POST['nome'];
$curso=$_POST['curso'];
$idade=$_POST['idade'];
$local_curso=$_POST['local_curso'];
$contato=$_POST['contato'];

$sql = "INSERT INTO usuarios (id_usuario, nome, curso, idade, local_curso, contato) VALUES (default, '$nome', '$curso', '$idade', '$local_curso', '$contato')";

if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Cadastro realizado com sucesso!"); window.location.href = "index.html";</script>';
} else {
    echo '<script>alert("Erro ao realizar o cadastro. Por favor, tente novamente."); window.location.href = "index.html";</script>' . $conn->error;
}

$conn->close();
?>