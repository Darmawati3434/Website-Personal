<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>Tentang Kami</h3>
   <p><a href="home.php">Beranda</a> <span> / Tentang</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Mengapa Harus di Kami?</h3>
         <p>Karena Serenity' akan selalu malayani anda dengan sepenuh hati dan tidak setengah hati, dan akan memberikan hasil yang terbaik!</p>
         <a href="index.php" class="btn">Ayo Lihat Menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Tinggal Pilih</h3>
         <p>Pesan Melalui Website Kami Dan Langsung Di Catat</p>
      </div>

      <div class="box">
         <img src="images/courier.png" alt="">
         <h3>Langsung Ambil Di Tempat</h3>
         <p>Langsung Ambil Di Tempat Supaya Bisa Menikmati Suasana Expo</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Nikmati Makanan Mu</h3>
         <p>Nikmati Makanan Dan Minuman Mu Di Tempatnya Langsung</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">Kelompok 3 Pemrograman Web'</h1>
         <div class="swiper-slide slide">
            <img src="images/Darma.jpg" alt="">
            <p>"Menawarkan ketenangan dan kedamaian"</p>
            <h3>Darmawati Damba'</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/uci.jpg" alt="">
            <p> “Kesempurnaan rasa kopi berasal dari rasa pahit di dalamnya. Maka dari itu, kenangan yang pahit juga akan membentuk kita menjadi lebih baik di waktu yang akan datang.”</p>
            <h3>Andijusriani</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/mita.jpg" alt="">
            <p>"Cinta tidak hanya duduk di suatu tempat atau berdiam diri seperti batu. Cinta sama seperti roti yang adonannya selalu diolah berulang kali setiap hari."</p>
            <h3>Miftahul jannah</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>