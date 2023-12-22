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
        <p>DIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
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
        <p>DIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
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
        <p>DIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
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
        <p>DIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
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
        <p>DIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
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
        <p>DIn publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.</p>
      </div>
    </div>
      </div>


















<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>