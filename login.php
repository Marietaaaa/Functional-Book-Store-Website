<?php

include 'config.php';
if(!isset($_SESSION)) //perdoret per mbartjen e informacionet ne te githa faqet e tjera
    { 
        session_start(); //variabel globale
    } 

if(isset($_POST['submit'])){//ne momentin qe klikohet 

   $email = mysqli_real_escape_string($conn, $_POST['email']);//perdorimin e ketyre te te dhenave ne nje query
   $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

   $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){

      $row = mysqli_fetch_assoc($select_users);//kontrollon rreshtat e te dhenave dhe kthen ate si nje grup info

      if($row['user_type'] == 'admin'){//nqs eshte admin kthen info te admin 

         $_SESSION['admin_name'] = $row['name'];
         $_SESSION['admin_email'] = $row['email'];
         $_SESSION['admin_id'] = $row['id'];
         header('location:admin_page.php');//i vendos ne header

      }elseif($row['user_type'] == 'user'){//nqs eshte user kthen infot e userit

         $_SESSION['user_name'] = $row['name'];
         $_SESSION['user_email'] = $row['email'];
         $_SESSION['user_id'] = $row['id'];
         header('location:home.php');//vendosen ne header

      }

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

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
      <h3>login now</h3>
      <input type="email" name="email" placeholder="enter your email" required class="box">
      <input type="password" name="password" placeholder="enter your password" required class="box">
      <input type="submit" name="submit" value="login now" class="btn">
      <p>don't have an account? <a href="register.php">register now</a></p>
   </form>

</div>

</body>
</html>