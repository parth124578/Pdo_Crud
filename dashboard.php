<?php 

include("db_con.php");

if(!isset($_SESSION['login_email']) && empty($_SESSION['login_email']))
{
  header("Location: index.php");
}

$Email = $_SESSION['login_email'];

$sql = "SELECT * FROM tbl_register WHERE email = '$Email'";
$Qry = mysql_query($sql);
$Row = mysql_fetch_array($Qry);


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Basic Bootstrap Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>

<div>

<form class="form-horizontal" id="submit_form" method="post" action="action_login.php" enctype="multipart/form-data">
    
    <h1 style="text-align: center;">WelCome, <?php echo $Row['first_name']." ".$Row['last_name'] ?></h1>
    
    <a href="logout.php">Logout</a>
    
</form>
</div>
</body>
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> 

