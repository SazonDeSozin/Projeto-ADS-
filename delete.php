<?php
include("conexao.php");

    $deletar=$_POST['deletar'];

    $sql="DELETE FROM cadastro where nome='$deletar'";

    $resultado=mysqli_query($conexao, $sql);

    if($resultado){
        echo"h1>Cliente excluido com sucesso</h1>";
    }
    else{
        echo"<h1>Cliente não foi excluido<h1>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>
<br>
<button onclick="window.location.href='Index.html'">Voltar</button>