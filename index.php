<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<div class="home-bg">

<section class="home">

   <div class="swiper home-slider">
   
   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <div class="image">
         <a href="category.php?category=Sketch"><img src="./uploaded_img/Ganesh1.jpg" alt=""></a> 
         </div>
         <div class="content">
            <h3>latest Sketches</h3>
            <a href="category.php?category=Sketch" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
         <a href="category.php?category=bookmark"><img src="./uploaded_img/photo1700300959.jpeg" alt="Anime Bookmarks">
         </div>
         <div class="content">
            <h3>latest Bookmarks</h3>
            <a href="category.php?category=Bookmark" class="btn">shop now</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <div class="image">
         <a href="category.php?category=poloroid"><img src="./uploaded_img/asd.jpg" alt="">
         </div>
         <div class="content">
            <h3>latest Poloroids</h3>
            <a href="category.php?category=Poloroid" class="btn">shop now</a>
         </div>
      </div>

   </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

</div>

<section class="category">

   <h1 class="heading">shop by category</h1>

   <div class="swiper category-slider">

   <div class="swiper-wrapper">

   <a href="category.php?category=Sketch" class="swiper-slide slide">
      <img src="images/icon-1.png" alt="">
      <h3>Sketch</h3>
   </a>

   <a href="category.php?category=Spill" class="swiper-slide slide">
      <img src="./images/spill.png" alt="">
      <h3>Spill Arts</h3>
   </a>

   <a href="category.php?category=canvas" class="swiper-slide slide">
      <img src="./images/canvas.png" alt="">
      <h3>canvas Paintings</h3>
   </a>

   <a href="category.php?category=Handmade" class="swiper-slide slide">
      <img src="./images/gifts.png" alt="">
      <h3>Handmade Gifts</h3>
   </a>

   <a href="category.php?category=Bookmark" class="swiper-slide slide">
      <img src="./images/bookmark.png" alt="">
      <h3>Bookmarks</h3>
   </a>

   <a href="category.php?category=digital" class="swiper-slide slide">
      <img src="./images/digital.png" alt="">
      <h3>Digital Art</h3>
   </a>

   <a href="category.php?category=Poloroid" class="swiper-slide slide">
      <img src="./images/Poloroid.png" alt="">
      <h3>Poloroids</h3>
   </a>

   <a href="category.php?category=Paintings" class="swiper-slide slide">
      <img src="./images/frame.png" alt="">
      <h3>Framed Paintings</h3>
   </a>

   <a href="customize.php" class="swiper-slide slide">
      <img src="./images/customize.png" alt="">
      <h3>Customised</h3>
   </a>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>

<section class="home-products">

   <h1 class="heading">latest products</h1>

   <div class="swiper products-slider">

   <div class="swiper-wrapper">

   <?php
     $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6"); 
     $select_products->execute();
     if($select_products->rowCount() > 0){
      while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
   ?>
   <form action="" method="post" class="swiper-slide slide">
      <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
      <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
      <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
      <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
      <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
      <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
      <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
      <div class="name"><?= $fetch_product['name']; ?></div>
      <div class="flex">
         <div class="price"><span>Rs.</span><?= $fetch_product['price']; ?><span>/-</span></div>
         <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
      </div>
      <input type="submit" value="add to cart" class="btn" name="add_to_cart">
   </form>
   <?php
      }
   }else{
      echo '<p class="empty">no products added yet!</p>';
   }
   ?>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
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