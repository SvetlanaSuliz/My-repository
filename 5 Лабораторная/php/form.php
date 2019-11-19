<?php
 if (isset($_POST['Date'])&& isset($_POST['Name']) && isset($_POST['Price'])&& isset($_POST['Сode'])&& isset($_POST['Quantity'])){

    // Переменные с формы
	$id=$line;
	$date=$_POST['Date'];
    $name = $_POST['Name'];
    $price = $_POST['Price'];
    $code = $_POST['Сode'];
    $quantity = $_POST['Quantity'];
    
    $mysqli = mysqli_connect("localhost", "root", "","pastry_shop");
    $sql = 'INSERT INTO `cakes` (`id`,`Date`,`name`,`price`,`code`,`quantity`) VALUES ('.$id.','.$date.',"'.$name.'","'.$price.'",'.$code.','.$quantity.')';
    $result = mysqli_query($mysqli,$sql);
    
}
 
 ?>