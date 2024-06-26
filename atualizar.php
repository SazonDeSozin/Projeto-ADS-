<?php
include("conexao.php");

$nome = $_POST["nome"];
$novaIdade = $_POST["novaIdade"];
$novoGenero = $_POST["novoGenero"];
$novaNacionalidade = $_POST["novaNacionalidade"];

$sql = "UPDATE cadastro SET idade = ?, genero = ?, nacionalidade = ? WHERE nome = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("isss", $novaIdade, $novoGenero, $novaNacionalidade, $nome);

if ($stmt->execute()) {
    echo "Cliente atualizado com sucesso. <br><br>";
} else {
    echo "Erro na atualização do cliente: " . $stmt->error;
}

$stmt->close();

$sql = "SELECT nome, idade, genero, nacionalidade FROM cadastro";
$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0) {
    echo "<table class='table'><tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Genero</th>
        <th>Nacionalidade</th>
        </tr>";
    
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>
            <td>" . $row['nome'] . "</td>
            <td>" . $row['idade'] . "</td>
            <td>" . $row['genero'] . "</td>
            <td>" . $row['nacionalidade'] . "</td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "Zero resultados";
}

$conexao->close();
?>
<br>
<button onclick="window.location.href='Index.html'">Voltar</button>
