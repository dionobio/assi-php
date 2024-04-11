<html lang="en">
<?php
      session_start();
      if($_GET["user"] == "admin" && $_GET["password"]== "admin123") {
         $_SESSION["login"]=true;
      }
      else{
      //     echo "LOGIN FAILED";
         header("location:login_form.php");  
      }
      
    
   ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="container">
        <div class="content">
            <h1>Hi</h1>
            <a href="logout.php" class="btn">logout</a>
        </div>
    </div>

</body>

</html>