<?php
// procedural mysqli connection

function connectDB(){
    $connect = mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME, DB_PORT);
}