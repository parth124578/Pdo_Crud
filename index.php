<?php 

include("db_con.php");
$_SESSION['login_email'];
if(isset($_SESSION['login_email']) && !empty($_SESSION['login_email']))
{
  header("Location: dashboard.php");
  exit;
}


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
    <h1 style="text-align: center;">Login</h1>
    
    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Email</label>
        <div class="col-xs-6">
            <input type="email" class="form-control" id="email" name="email" placeholder="Customer Email">
        </div>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="control-label col-xs-2">Password</label>
        <div class="col-xs-6">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
    </div>
   
    <div class="form-group">
        <div class="col-xs-offset-2 col-xs-6">
            <input type="submit"  name="register" value="Submit" class="btn btn-primary" id="register" />

            <span id="err_register"></span>

        </div>
    </div>
    <a href="sign_up.php">SignUp</a>
</form>
</div>
</body>
</html>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script> 
<script type="text/javascript">
$("#submit_form").submit(function(e){
e.preventDefault();  
proceed = true;
  
    //var preference1=$("input[type='radio'][name='Preference']:checked").val();
    var email=$("#email").val();
    var password=$("#password").val();
    
    
     //var action=$("input[type='radio'][name='action']:checked").val();
     var str =   /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
     
  
  if(email == "" )
  {
    alert("Please enter the email.");
    return false;
  }
  else if(!email.match(str))
  {
    alert("Please enter valid email");
    return false;
  }
  else if(password == "")
  {
    alert("Please enter the password");
    return false;
  }
  
  else
  {
    
  }
    
    if(proceed){ 
    var post_url = $(this).attr("action"); 
    var request_method = $(this).attr("method"); 
    var form_data = new FormData(this); 
    
    $.ajax({ //ajax form submit
      url : post_url,
      type: request_method,
      data : form_data,
      
      dataType : "text",
      contentType: false,
      cache: false,
      processData:false
    }).done(function(result){
      console.log(result);
      
      if(result == 1)
      {
        window.location="dashboard.php";
        
      }
      else if(result == 2)
      {
        $("#err_register").html("Please enter right email and password.");
      }
      else if(result == 3)
      {
        $("#err_email").html("Please changed your email");
      }
    
    });
    }
          
             
});
</script>
