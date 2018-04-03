<?php 
include("db_con.php");

unset($_SESSION['login_email']);

header("Location: index.php");
exit;

?>