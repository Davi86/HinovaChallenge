<?php
    include("../config/config.php");

    $conn = mysqli_connect(HOST, USER,PASS,DB);

    //Caso ocorra algum problema quando a conexão for solicitada
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
?>
