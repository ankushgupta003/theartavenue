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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customize</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">


</head>

<body class="custom">
  <?php include 'components/user_header.php'; ?>
  <h1 class="heading">Customize by category</h1>
  <div class=container>
    <div class=card>
      <div class=image>
        <a href="spill_art.php">
          <img src="./uploaded_img/shiv1.jpg">
        </a>
      </div>
      <div class=content>
        <h3>SPILL ART</h3>
        <h3>By AnkushArts._</h3>
        <p>Imagine creating a masterpiece with just a splash of paint you feel like!You can go big or go small, as we offer custom sizes to suit your every need. Our A4 size is the perfect start to your art journey. Plus, every painting is carefully framed and packed with a whole lot of love!</p>
      </div>
    </div>
    <div class=card>
      <div class=image>
        <a href="bookmark.php">
          <img src="./project images/card cover/bookmark.jpg">
        </a>
      </div>
      <div class=content>
        <h3>BOOKMARKS</h3>
        <h3>By vinniverse_2.0</h3>
        <p>Never lose your page again! Score a bespoke bookmark where you can tailor the quote and slap on your name. It's the ultimate gift for you and your bookworm pals.
          Crafted on 350 gsm paper, it comes with a few extra goodies just for you. Keep calm and read on!</p>
      </div>
    </div>
    <div class=card>
      <div class=image>
        <a href="digital_art.php">
          <img src="./project images/card cover/digital art.png">
        </a>
      </div>
      <div class=content>
        <h3>DIGITAL ART</h3>
        <p>BYE BYE BORING GIFTS, HELLO WOW FACTOR! Our pal, vinniverse_2.0, has a pretty sweet offer for you: a digital painting on 300 gsm paper, framed with extra love and care! Imagine the look of shock and awe on your loved one's face when they open THIS baby! Want to make it even more special? Customize the size and quote to create a unique masterpiece tailored to their taste. Who says gifts can't be awesome AND easy?</p>
      </div>
    </div>
    <div class=card>
      <div class=image>
        <a href="pencil_portrait.php">
          <img src="./project images/card cover/pencil portrait.jpg">
        </a>
      </div>
      <div class=content>
        <h3>PENCIL PORTRAIT</h3>
        <h3>By AnkushArts._</h3>
        <p>All you need to do is provide your photo, and we will try the magic to create a stunningly realistic portrait. Plus, you can customize the size to make sure it's just right for you. And don't worry, your masterpiece will be carefully framed and packaged with love to ensure it arrives safe and sound!</p>
      </div>
    </div>
    <div class=card>
      <div class=image>
        <a href="vintage_frame.php">
          <img src="./project images/card cover/vintage frame.jpg">
        </a>
      </div>
      <div class=content>
        <h3>VINTAGE FRAME</h3>
        <h3>By vinniverse_2.0</h3>
        <p>Let's turn your precious memories into a vintage work of art! All you gotta do is send in your favorite snapshots and tell us the occasion you're celebrating. We'll weave our magic to create a stunning vintage frame that captures your unique personality. You can even tell us what you love and hate to make it extra special.
          We'll customize the frame size to make sure it fits you like a glove. And don't worry, your masterpiece will be wrapped up with all the love and care it deserves, ensuring it arrives in pristine condition!</p>
      </div>
    </div>
    <div class=card>
      <div class=image>
        <a href="cards.php">
          <img src="./project images/card cover/cards.png">
        </a>
      </div>
      <div class=content>
        <h3>CARDS</h3>
        <h3>By vinniverse_2.0</h3>
        <p>Surprise your loved ones with a custom-made greeting card! Give us the deets about the occasion or the special someone's name, and we'll wrap it up with a sprinkle of fun goodies and a whole lot of love!</p>
      </div>
    </div>
  </div>


















  <?php include 'components/footer.php'; ?>

  <script src="js/script.js"></script>

</body>

</html>