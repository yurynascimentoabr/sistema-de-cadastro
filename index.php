<html>
    <head></head>
    <body>
        <div>Cadastro</div><br>
        <!-- Formulario para inserção de dados no Banco 'Dados' -->
        <form name="form1" method="POST" action="backend/salvar.php">
        Nome:<br><input type="text" name="nome" required><br>
        Senha:<br><input type="password" name="senha" required>
        <input type="submit" value="Salvar"><br>
        </form>

        <table border=1><tr><td>ID</td><td>NOME</td><td>SENHA</td><td><center>X</center></td><td><center>----</center></td></tr>
        <!-- "Select" direcionando todos os dados do Banco 'Dados' para uma tabela -->
            <?php
                $connect=mysqli_connect('localhost', 'root', null, 'Dados');
                    $query="Select * from usuario;";
                    $select=$connect -> query($query);
                    while ($resultado=$select -> fetch_assoc()) {
                        echo '<tr><td>'.$resultado['ID'].'</td>
                        <td>'.$resultado['NOME'].'</td>
                        <td>'.$resultado['SENHA'].'</td>
                        <td><a href="backend/delete.php?id='.$resultado['ID'].'">Excluir</a></td>
                        <td><a href="atualizar.php?id='.$resultado['ID'].'">Atualizar</a></td></tr>';
                    }
            ?>
        </table>
    </body>
</html>
