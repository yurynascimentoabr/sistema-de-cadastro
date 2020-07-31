<!-- "Insert"" utilizando o 'form1' -->
<?php
    $nome=$_POST['nome'];
    $senha=$_POST['senha'];
    $connect=mysqli_connect('localhost', 'root', null, 'Dados');
    $sql="Insert into usuario (NOME, SENHA) values ('".$nome."', '".$senha."')";
    $insert=$connect -> query($sql);
    mysqli_close($connect);
    header("Location:../frontend/index.php");
    ?>