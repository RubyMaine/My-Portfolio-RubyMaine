<?php
session_start();
error_reporting(1);
$connection_db = mysqli_connect('localhost','root','','my_portfolio') or die("База данных не подключена!");
?>