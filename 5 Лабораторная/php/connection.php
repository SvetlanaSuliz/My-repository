<?php
    
    $server = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "konditerskiy_magazin"; 
     
    // Подключение к базе данный через MySQLi
    $mysqli = mysqli_connect($server, $username, $password,$database);
   
    // Проверяем, успешность соединения. 
    if (mysqli_connect_errno()) { 
        echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
        exit(); 
    }
 
?>