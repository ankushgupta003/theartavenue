<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
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

   <?php include 'components/user_header.php'; ?>
   <section class="reviews">
      <h1 class="heading">About Us</h1>
      <p class="usus">At Art Avenue, we believe that art has the power to transform spaces, evoke emotions, and inspire creativity. Our passion for art drives us to curate a collection that not only beautifies your surroundings but also tells a story, sparks conversations, and adds a touch of personality to your life. </p>
   </section>
   <section class="reviews">
      <h1 class="headin">🚀Our Mission </h1>
      <p class="ususus">Our mission is to bridge the gap between artists and art lovers, providing a platform where talent meets appreciation. We strive to showcase diverse artworks that cater to different tastes, styles, and preferences. By supporting emerging and established artists, we contribute to the flourishing art ecosystem. </p>
   </section>
   <section class="reviews">
      <h1 class="headin">💭Our Moto – Where Creativity meets Canvas </h1>
      <p class="ususus">Our motto encapsulates our commitment to providing a vibrant platform where artistic expression flourishes. We believe in the powerful convergence of creativity and canvas, embracing diverse forms of art and welcoming both creators and enthusiasts to a space where inspiration knows no bounds. </p>
   </section>
   <section class="reviews">
      <h1 class="headin">🎨Our Story </h1>
      <p class="ususus">Greetings art enthusiasts! We are a group of final year B.Tech students who share a profound love for art and technology. What started as a collective vision to bridge the gap between creators and enthusiasts has blossomed into The Art Avenue – Where Creativity meets Canvas, your go-to destination for an immersive art experience. </p>
   </section>
   <section class="reviews">
      <h1 class="headin">💡 What Sets Us Apart  </h1>
      <p class="ususus">Here at Art Avenue, we understand that every stroke of the brush and every pixel on the screen carries a story. Our platform is not just an e-commerce site; it's a canvas where artists can showcase their masterpieces, and art enthusiasts can discover and bring those creations into their lives. </p>
   </section>
   <section class="reviews">
      <h1 class="headin">🤝 Supporting Emerging Artists  </h1>
      <p class="ususus">One of our core values is to support emerging artists. We provide a platform for talented creators to showcase their work to a global audience, fostering a community where art is appreciated and artists are recognized for their unique perspectives. </p>
   </section>









   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>