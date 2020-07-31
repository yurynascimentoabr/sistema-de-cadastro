<?php
    $id=$_POST['id'];
    $nome=$_POST['novonome'];
    $senha=$_POST['novasenha'];
    $connect=mysqli_connect('localhost', 'root', null, 'Dados');
    $query="Update usuario set NOME='".$nome."', SENHA='".$senha."' where ID=".$id.";";
    $resultado=$connect -> query($query);
    mysqli_close($connect);
    header("Location:../frontend/index.php")  
    ?>