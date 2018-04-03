<?php 

include("db_con.php");

$email = $_POST['email'];

$password = $_POST['password'];
$password = md5($password);

$sql = "SELECT * FROM tbl_register WHERE email = '$email' AND password = '$password'";
$Qry = mysql_query($sql);

$Number = mysql_num_rows($Qry);

if ($Number) {
      
      $_SESSION['login_email'] = $email;
      echo 1;
}
   
else {
     echo 2;
} 

?>