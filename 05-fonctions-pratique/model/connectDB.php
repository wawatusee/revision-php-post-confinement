<?php
// procedural mysqli connection

function connectDB(){
    $connect = @mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME, DB_PORT);
    // error
    if(mysqli_connect_errno()){
        die("Erreur : ".mysqli_connect_error()."<br>Numéro d'erreur : ".mysqli_connect_errno());
    }
    // change charset
    mysqli_set_charset($connect,DB_CHARSET);
}