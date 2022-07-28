<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>


    <!--font awesome cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.1/css/lg-autoplay.min.css">

    <!--swiper css link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">

    <!-- custom css file link-->

    <link rel="stylesheet" href="style.css">


</head>
<body>
    <div class="container">
    <?php @include 'header.php'; ?>

    <section class="portfolio">

   <h1 class="heading">our portfolio</h1>

   <div class="portfolio-container">

      <a href="images/bp4.jpg" class="box">
         <div class="image">
            <img src="images/bp4.jpg" alt="">
         </div>
         <h3>Birthday Party</h3>
      </a>

      <a href="images/cake.jpg" class="box">
         <div class="image">
            <img src="images/cake.jpg" alt="">
         </div>
         <h3>Cakes</h3>
      </a>

      <a href="images/bp5.jpg" class="box">
         <div class="image">
            <img src="images/bp5.jpg" alt="">
         </div>
         <h3>Decorations</h3>
      </a>

      <a href="images/port-img-4.jpg" class="box">
         <div class="image">
            <img src="images/port-img-4.jpg" alt="">
         </div>
         <h3>wedding ceremony</h3>
      </a>

      <a href="images/pr.jpg" class="box">
         <div class="image">
            <img src="images/pr.jpg" alt="">
         </div>
         <h3>Poruwa ceremony</h3>
      </a>

      <a href="images/a.jpg" class="box">
         <div class="image">
            <img src="images/a.jpg" alt="">
         </div>
         <h3>Anniversary Party</h3>
      </a>

   </div>

</section>



    <?php @include 'footer.php'; ?>
    </div>



















   <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.5.0-beta.1/lightgallery.es5.min.js"></script>
    <!--swiper js link-->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <!--custom js file link-->
    <script src="script.js"></script>
    <script>
       lightGallery(document.querySelector('.portfolio .portfolio-container'));

   </script>
</body>
</html>