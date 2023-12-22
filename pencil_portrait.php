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
    <title>Spill Art</title>

    <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

<!-- custom css file link  -->
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'components/user_header.php'; ?>


<section class="about">

   <div class="row">

      <div class="image">
        <img src="./project images/posters/pencil_portrait.png">
      </div>
      <div class="content">
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScTMLzmAH1FHYsCgKN2UsOX_Z4sAtA_L0JQl0ckh5cV9mh9cA/viewform?embedded=true" width="640" height="750" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>

   </div>

</section>
<?php include 'components/footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>