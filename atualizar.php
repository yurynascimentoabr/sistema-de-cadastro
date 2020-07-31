<!-- "Select" direcionando os dados selecionados para uma tabela -->
<?php
    $id=$_GET['id'];
    $connect=mysqli_connect('localhost', 'root', null, 'Dados');
    $select=$connect -> query("Select * from usuario where id=".$id.";");
    $resultado=$select -> fetch_assoc();
    echo
    '<div>Atualizar dados</div><br><table border=1><tr><td>NOME</td><td>SENHA</td></tr>
    <tr><td>'.$resultado['NOME'].'</td><td>'.$resultado['SENHA'].'</td><tr></table>';
?>

<html>
    <head></head>
    <body>
        <form method="POST" action="backend/update.php">
            <br>Novo nome:<br><input type="text" name="novonome" required>
            <br>Nova senha:<br><input type="password" name="novasenha" required>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" value="Atualizar">
        </form>
    </body>
</html>