<!DOCTYPE html>
   <?php
      session_start();
   ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div class="form-container">
      <?php
        if (isset($_SESSION['login'])&&($_SESSION['login'] == true )) {
            echo "Bạn đã đăng nhập <br>
            Click vào đây nếu bạn muốn đăng xuất 
            <br> 
            <button> <a href='logout.php'>Here</a> </button>" ;
         }
        else{
            echo "<form action='bai1.php' method='GET'>
            <h3>login </h3>
            <input type='text' name='user' required placeholder='Enter your username'>
            <input type='password' name='password' required placeholder='Enter your password'>
            <input type='submit' name='submit' value='login now' class='form-btn'>
         </form>";
        }
      ?>

        <!-- <form action="admin_page.php" method="GET">
      <h3>login now</h3>
      <input type="text" name="user" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">
   </form> -->

    </div>

</body>

</html>