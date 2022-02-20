<?php
require 'connect.php';

$pname = $_POST['pname'];
$pic = $_POST['pic'];
$category = $_POST['category'];
$pdest = $_POST['pdest'];
$price = $_POST['price'];
$qstock = $_POST['qstock'];

$sql = "INSERT INTO Products (ProductName,Picture,category,ProductDescription,Price,QuantityStock) VALUE ('$pname','$pic','$category','$pdest','$price','$qstock')";
$resultInsert = mysqli_query($con, $sql);

if ($resultInsert){
    header("LOCATION:http://localhost/code/index.php");
}
?>