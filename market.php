<?php

 include 'config.php';

//Query 
$query = "SELECT * FROM data";
$result = $conn->query($query);
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
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark header px-lg-4 bg-white">
         <a class="navbar-brand" href="#">
         <img src="assets/img/logo1.png" class="img-fluid" style="height:40px;">
         </a>
         <button class="navbar-toggler menu" type="button" data-toggle="collapse" data-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="main_nav">
            <ul class="navbar-nav">
               <li class="nav-item active"> <a class="nav-link cryp" href="#">Products </a> </li>
               <li class="nav-item"><a class="nav-link" href="#"> Community </a></li>
               <li class="nav-item"><a class="nav-link" href="#"> Tools </a></li>
               <li class="nav-item"><a class="nav-link" href="#"> Jobs </a></li>
               <li class="nav-item dropdown">
                  <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  About  </a>
                  <ul class="dropdown-menu">
                     <li><a class="dropdown-item" href="#"> About 1</a></li>
                     <li><a class="dropdown-item" href="#"> About 2 </a></li>
                     <li><a class="dropdown-item" href="#"> About 3 </a></li>
                  </ul>
               </li>
            </ul>
            <ul class="navbar-nav ml-auto">
               <div class="d-flex">
                  <div class="searchbar mx-2">
                     <input class="search_input" type="text" name="" placeholder="Search...">
                     <a href="#" class="search_icon"> <i class="fa fa-search abc"></i></a>
                  </div>
               </div>
               <button type="button" class="btn btn-org">Sign Up</button>
            </ul>
         </div>
      </nav>
      <section  class="px-lg-5 mt-5 mb-5">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-7">
                  <img src="assets/img/musing.png" class="img-fluid pt-lg-5">
                  <div class="f-70 fw-700">Blog List</div>
                  <div class="pr-4 co f-18"></div>
               </div>
            </div>
         </div>
      </section>
      <section  class="px-lg-5 mt-lg-4 pt-lg-5">
         <div class="container-fluid">
           
         <div class="row justify-content-center align-items-center">


         <?php
           while($row = $result->fetch_assoc()) {
         ?>
               <div class="col-lg-6">
                  <a class="card r-10 p-4 mb-3 h-248" href="post.php?id=<?php echo $row['id'];?>">
                
                  <div class="row">
                        <div class="col-lg-4">
                           <img src="images/<?php echo $row['image'];?>" class="img-fluid imge">
                        </div>
                        <div class="col-lg-8">

                           <div class="f-24 psb"><?php echo $row['title']; ?></div>
                           <div class="f-14 co py-2"><?php echo $row['content']; ?></div> 
                           <div class="f-14 co py-2"><?php echo $row['date']; ?></div> 
                        </div>
                     </div>
                 </a>
               </div>
         <?php } ?>
              

         

               <a href="#">
                  <button type="button" class="btn btn-custom mx-3"><i class="fa fa-angle-left px-2"></i>Previous</button>
               </a>

               <a href="#">
               <button type="button" class="btn btn-custom mx-3">Next<i class="fa fa-angle-right px-2"></i> </button>
               </a>
              

               <div class="col-lg-12">
                  <div class="text-center pt-5 pb-3">Join the thousands already learning crypto!</div>
                  <div class="text-center py-2 f-30 fw-600">Join our free newsletter for daily crypto updates!</div>
               </div>

                <div class="col-lg-3 mx-auto">
                  <div class="text-center">
                     <div class="form-group">
                        <input type="text" class="form-control" id="usr" placeholder="Enter your email...">
                     </div>
                     <button type="button" class="btn btn-primary r-10 mb-5 f-14 p-3">Subscribe now</button>
                  </div>
               </div>

        
            </div>
         </div>
      </section>
   </body>
</html>