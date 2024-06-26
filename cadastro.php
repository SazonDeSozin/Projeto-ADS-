<?php
include("conexao.php");

$nome=$_POST['nome'];
$idade=$_POST['idade'];
$genero=$_POST['genero'];
$nacionalidade=$_POST['nacionalidade'];

$sql="INSERT INTO cadastro (nome, idade, genero, nacionalidade) VALUES ('$nome', '$idade', '$genero', '$nacionalidade')";

if(mysqli_query($conexao, $sql)){
    echo "Usuário cadastrado com sucesso";
}
else{
    echo "Erro" . mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>
<br>
<button onclick="window.location.href='Index.html'">Voltar</button>