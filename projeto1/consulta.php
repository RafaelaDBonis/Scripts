<?php

$mysqli=new mysqli("localhost","root","","projeto");

if($mysqli -> connect_errno){
    echo "Falha na conexao MySQL:" .$mysqli -> connect_error;
    exit();
}

?>