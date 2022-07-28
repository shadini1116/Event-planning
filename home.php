<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>


    <!--font awesome cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!--swiper css link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

    <!-- custom css file link-->

    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="container">
    <?php @include 'header.php'; ?>

    <section class="home">
    <div class="swiper home-slider">

    <div class="swiper-wrapper">

    <div class="swiper-slide slide" style="background:url(images/bd.jpg) no-repeat">
        <div class="content">
            <h3>plan your birthday parties!</h3>
            <p>Celebrate your most precious days of your life in an unforgettable way...join with to discover your special occasions with us.</p>
            <a href="about.php" class="btn">Discover more</a>
        </div>
    </div>

    <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
        <div class="content">
            <h3>Plan your wedding!</h3>
            <p>Celebrate your most precious days of your life in an unforgettable way...join with to discover your special occasions with us.</p>
            <a href="about.php" class="btn">Discover more</a>
        </div>
    </div>

    <div class="swiper-slide slide" style="background:url(images/ann.jpg) no-repeat">
        <div class="content">
            <h3>plan your anniversary party</h3>
            <p>Celebrate your most precious days of your life in an unforgettable way...join with to discover your special occasions with us.</p>
            <a href="about.php" class="btn">Discover more</a>
        </div>
    </div>

    <div class="swiper-pagination"></div>

</div>

    </section>


    <section class="services">

   <h1 class="heading">our services</h1>
   <div class="swiper service-slider">
       <div class="swiper-wrapper">

           <div class="swiper-slide slide">
               <img src="images/ph.jpeg" alt="">
               <div class="content">
                   <h3>Photography</h3>
                   <p>You can get lot of memories in standarad quality and valuable memories from us at lowest price</p>
                   <a href="about.php" class="btn">About us</a>

               </div>
           </div>

           <div class="swiper-slide slide">
               <img src="images/ck.jpg" alt="">
               <div class="content">
                   <h3>Cakes</h3>
                   <p>Make your special occasions delicious with our cakes</p>
                   <a href="about.php" class="btn">About us</a>

               </div>
           </div>
           <div class="swiper-slide slide">
               <img src="images/download.jpg" alt="">
               <div class="content">
                   <h3>Decorations</h3>
                   <p>Beautify your special occasions with us</p>
                   <a href="about.php" class="btn">About us</a>

               </div>
           </div>
           <div class="swiper-slide slide">
               <img src="images/din.jpg" alt="">
               <div class="content">
                   <h3>fine dining</h3>
                   <p>Serve your special occasions with delicious meal</p>
                   <a href="about.php" class="btn">About us</a>

               </div>
           </div>
           <div class="swiper-slide slide">
               <img src="images/cer.jpg" alt="">
               <div class="content">
                   <h3>wedding ceremony</h3>
                   <p>You can get lot of memories in standarad quality and valuable memories from us at lowest price</p>
                   <a href="about.php" class="btn">About us</a>

               </div>
           </div>
           <div class="swiper-slide slide">
               <img src="images/dj.jpg" alt="">
               <div class="content">
                   <h3>Entertainment</h3>
                   <p>You can get lot of memories in standarad quality and valuable memories from us at lowest price</p>
                   <a href="about.php" class="btn">About us</a>

               </div>

               <div class="swiper-slide slide">
               <img src="images/in.jpeg" alt="">
               <div class="content">
                   <h3>Invitations</h3>
                   <p>You can get lot of memories in standarad quality and valuable memories from us at lowest price</p>
                   <a href="about.php" class="btn">About us</a>

               </div>
           </div>
       </div>
       <div class="swiper-pagination"></div>
   </div>
    </section>
    <?php @include 'footer.php'; ?>
    </div>




















    <!--swiper js link-->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!--custom js file link-->
    <script src="script.js"></script>
</body>
</html>