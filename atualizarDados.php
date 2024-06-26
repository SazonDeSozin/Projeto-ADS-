<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Dados cadastrados</h1>

    <?php

        include("conexao.php");

        $sql="SELECT nome, idade, genero, nacionalidade FROm cadastro";

        $resultado=mysqli_query($conexao, $sql);

        if(mysqli_num_rows($resultado)){
            echo"<table class='table'><tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Genero</th>
            <th>Nacionalidade</th>
            </tr>";

            while($row=mysqli_fetch_assoc($resultado)){
                echo"<tr>
            <td>".$row['nome']."</td>
            <td>".$row['idade']."</td>
            <td>".$row['genero']."</td>
            <td>".$row['nacionalidade']."</td>
            </tr>";
        }
            echo"</table>";
    }
        else{
            echo"Zero Resultados";
    
    }
        mysqli_close($conexao);

?>
<br>
<h2>Atualizar Cliente</h2>
    <form action= "atualizar.php" method="post">
        <label for="">Cliente a ser atualizado</label>
        <input type="text" name="nome" id=""><br>
        <label for="">Idade do Cliente</label>
        <input type="text" name="novaIdade" id=""><br>
        <label for="">Genero do cliente</label>
        <input type="text" name="novoGenero" id=""><br>
        <label for="">Nacionalidade do cliente</label>
        <input type="text" name="novaNacionalidade" id=""><br>
        <input type="submit" value="Atualizar dados">
    </form>
    <button onclick="window.location.href='Index.html'">Voltar</button>
</body>
</html>
        