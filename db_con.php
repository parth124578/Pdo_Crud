<?php 

session_start();
error_reporting(0);
$localhost = "localhost";
$username = "root";
$password = "";
$database = "jigish";


$DB = mysql_connect("localhost","root","");
mysql_select_db("jigish");

?>