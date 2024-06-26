<?php

include("conexao.php");

$pesquisar=$_POST['pesquisar'];

$sql="SELECT * FROM cadastro WHERE nome LIKE '%$pesquisar%'";

$resultado=mysqli_query($conexao, $sql);

if(mysqli_num_rows($resultado)){
    echo"<table><tr><th>Nome</th><th>Idade</th><th>Genero</th><th>Nacionalidade</th></tr>";
    
    while($row=mysqli_fetch_assoc($resultado)){
        echo"<tr><td>".$row ['nome']."</td>
        <td>".$row['idade']."</td>
        <td>".$row['genero']."</td>
        <td>".$row['nacionalidade']."</td></tr>";
    }
    echo"</table>";
}
else{
    echo"Zero resultados";

}
mysqli_close($conexao);

?>
<br>
<button onclick="window.location.href='Index.html'">Voltar</button>