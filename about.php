<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="style1.css">



</head>

<body>

   <?php include 'header.php'; ?>

   <section class="about">

      <div class="flex">

         <div class="image">
            <iframe width="560" height="370" src="https://www.youtube.com/embed/ILmvKC-H1l0"
               title="YouTube video player" frameborder="0"
               allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
               allowfullscreen></iframe>
         </div>

         <div class="content">
            <h3>Librat me te bukur per tu lexuar nga Ava Jules</h3>
            <p>Këta libra janë disa nga të preferuarit e mi!!! Doja të bëja një video rreth librave që kam lexuar, por
               edhe librave që do të doja t'i shihja të përshtateshin nga BookFlix! Shpresoj të kënaqeni! Më tregoni
               cili është i preferuari juaj??? </p>
            <p>Bashkohuni me klubin tonë!</p>
            <a href="contact.php" class="btn">Na kontaktoni</a>
         </div>

      </div>

   </section>
   <section class="reviews" id="reviews">

      <h1 class="title"> Komentet e klientit </h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide box">
               <img src="image/pic-1.png" alt="">
               <h3>Hermes Ndreca</h3>
               <p>Libri erdhi ne gjendje te shkelqyer. E rekomandoj:))</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>

            <div class="swiper-slide box">
               <img src="image/pic-2.png" alt="">
               <h3>Marieta vata</h3>
               <p> <audio controls>

                     <source src="review.mp3" type="audio/mp3">
                  </audio> </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>

            <div class="swiper-slide box">
               <img src="image/pic-3.png" alt="">
               <h3>Flavio luku</h3>
               <p>Procesi i dorzimit ishte shume i shpejte erdhi ne kohe reale.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
            <div class="swiper-slide box">
               <img src="image/pic-4.png" alt="">
               <h3>Megi Stankoja</h3>
               <p>Me pelqen shume ky dyqan, ka vec librat me te mire dhe me te fundit,
                  keshtu qe e dini se ktu gjinden vetem librat me te mire.

               </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>

            <div class="swiper-slide box">
               <img src="image/pic-5.png" alt="">
               <h3>samed haveri</h3>
               <p>Me pelqen shume ky website, eshte lehtesisht i perdorshem dhe ka librat me te kerkuar.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>

            <div class="swiper-slide box">
               <img src="image/pic-6.png" alt="">
               <h3>Leonora dreshaj</h3>
               <p>Jam nje fanse e te blerit libra online dhe ky website i ka tejkaluar pritshmerite e mia.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
               
         </div>

      </div>

   </section>


   <section class="authors">

      <h1 class="title">Autore</h1>

      <div class="box-container">

         <div class="box">
            <img src="autore/rowling.jpg" alt="">
            <div class="share">
               <a href="https://www.facebook.com/JKRowling/" class="fab fa-facebook-f"></a>
               <a href="https://twitter.com/jk_rowling?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"
                  class="fab fa-twitter"></a>
               <a href="https://www.instagram.com/jkrowling_official/?hl=en" class="fab fa-instagram"></a>
               <a href="https://www.linkedin.com/in/jk-rowling-453020193" class="fab fa-linkedin"></a>
            </div>
            <h3>J.K.Rowling</h3>
         </div>

         <div class="box">
            <img src="autore/tevor.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Trevor Noah</h3>
         </div>

         <div class="box">
            <img src="autore/hoover.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Colleen Hoover</h3>
         </div>

         <div class="box">
            <img src="autore/jodi1.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Jodi Picoult</h3>
         </div>

         <div class="box">
            <img src="autore/Greven.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Alec Greven</h3>
         </div>

         <div class="box">
            <img src="autore/emma.jpg" alt="">
            <div class="share">
               <a href="#" class="fab fa-facebook-f"></a>
               <a href="#" class="fab fa-twitter"></a>
               <a href="#" class="fab fa-instagram"></a>
               <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Emma Cline</h3>
         </div>



      </div>

   </section>







   <?php include 'footer.php'; ?>

   <!-- custom js file link  -->
   <script src="script.js"></script>
   <script src="js/javascript.js"></script>

</body>

</html>