<?php include 'config.php'; 

//Query

$id=$_GET['id'];

  $query= "SELECT * FROM data WHERE id='$id'";
  $result= mysqli_query($conn,$query);  

?>
<html lang="en">
   <head>
      <title>crypto || Market</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" href="#" type="assets/img/favicon.png" sizes="16x16">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   </head>
   <body>
 <?php include 'header.php';?>
      <section  class="my-5 py-5">
         <div class="container-fluid">
            <div class="row justify-content-center align-items-center">
               <div class="col-lg-7">
                  <div class="d-flex align-items-center pl-lg-4">
                     <img src="assets/img/musing.png" class="img-fluid wh-32">
                     <span class="f-16 fw-700 px-3">Market Musings</span>
                  </div>
                 <!--  <div class="pr-4 co f-18">Discover knowledgeable insights from leaders in the blockchain and crypto industries to help you navigate the crypto industry better.</div> -->
                 <?php
           while($row = $result->fetch_assoc()) {
         ?>
                 <div class="mx-4"> 
                  <div class="bits py-4 pb"><?php echo $row['title'];?></div>
                  <div class="f-16"><span class="co"><?php echo $row['content'];?></span>
                  <?php echo $row['date'];?> </div>

                  <div class="d-flex text-white">
                     <div class="f-12 text-dark mr-3">
                        327 <br>Shares
                     </div>

                     <div class="wh-social twit">
                        <i class="fa fa-twitter pt-1"></i>
                     </div>

                     <div class="wh-social facebook">
                        <i class="fa fa-facebook pt-1"></i>
                     </div>

                     <div class="wh-social reddit">
                        <i class="fa fa-reddit pt-1"></i>
                     </div>

                     <div class="wh-social linkedin">
                        <i class="fa fa-linkedin pt-1"></i>
                     </div>

                     <div class="wh-social tele">
                        <i class="fa fa-telegram pt-1"></i>
                     </div>

                     <div class="wh-social share">
                        <i class="fa fa-share-alt pt-1"></i>
                     </div>

                     <div class="wh-social envelo">
                        <i class="fa fa-envelope pt-1"></i>
                     </div>
              
<?php } ?>
                    
   </section>
   </body>
</html>