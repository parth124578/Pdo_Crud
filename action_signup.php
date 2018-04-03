<?php 

include("db_con.php");

$first_name = $_POST['first_name'];
$first_name = htmlentities($first_name, ENT_QUOTES);

$email = $_POST['email'];

$last_name = $_POST['last_name'];
$last_name = htmlentities($last_name, ENT_QUOTES);

$password = $_POST['password'];
$password = md5($password);




$sql = "INSERT INTO tbl_register(first_name,last_name,email,password)
VALUES ('".$first_name."','".$last_name."','".$email."','".$password."')";
   $Res = mysql_query($sql);

   if ($Res) {
      echo 1;
   }
   
   else {
     echo 2;
   } 

?>