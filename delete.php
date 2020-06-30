<?php
    $id = $_GET['id'];
    $connect = mysqli_connect('localhost', 'root', null, 'Dados');
    $query = "Delete from usuario where id=".$id.";";
    $delete = $connect -> query($query);
    mysqli_close($connect);
    header("Location:index.php")
    ?>