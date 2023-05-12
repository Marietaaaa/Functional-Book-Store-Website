<?php

include 'config.php';

if(isset($_POST['submit'])){//ne momentin qe klikohet

   $name = mysqli_real_escape_string($conn, $_POST['name']);//perdorimin e ketyre te te dhenave ne nje query
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{ 
         mysqli_query($conn, "INSERT INTO `users`(name, email, password, user_type) VALUES('$name', '$email', '$cpass', '$user_type')") or die('query failed');
         $message[] = 'registered successfully!';
         header('location:login.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>



<?php
if(isset($message)){/*Ky kod perdoret per te paraqitur nje mesazh gabimi 
   se informacioni ne dritaren e aplikacionit ne rast se 
   ndodh ndonje gabim gjate procesimit te te dhenave te postuara nga 
   perdoruesi ne formen e login-it.*/
   foreach($message as $message){/*Nese variabla $message ka ndonje gabim, 
      atehere kjo pjese e kodit do te krijoje nje loop te foreach qe do te kalohet 
      nepermjet mesazheve ne variablen $message dhe do te paraqese secilin mesazh 
      ne nje div me klasen "message".*/ 
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';/* tekstin e mesazhit dhe nje ikone me klasen "fas fa-times" qe do te jete 
      e vendosur ne fund te div-it. Kur perdoruesi klikon ikonen e times, 
      elementi div do te largohet nga dritarja e aplikacionit*/
   }
}
?>
   
<div class="form-container">

   <form action="" method="post">
      <h3>register now</h3>
      <input type="text" name="name" placeholder="enter your name" required class="box">
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="password" name="cpassword" placeholder="confirm your password" required class="box">
      <select name="user_type" class="box">
         <option value="user">user</option>
         <option value="admin">admin</option>
      </select>
      <input type="submit" name="submit" value="register now" class="btn">
      <p>already have an account? <a href="login.php">login now</a></p>
   </form>

</div>

</body>
</html>