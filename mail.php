<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "professionalassignmentbay5@gmail.com";

mail($recipient, $subject, $message, $mailheader)
 or die("Error!");

echo'


<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
     <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Proffesional Assignment Bay</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="images/my.jpg" alt="#"
                              width="100"
                              height="20" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <div class="header_information">
                        <nav class="navigation navbar navbar-expand-md navbar-dark ">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                           </button>
                           <div class="collapse navbar-collapse" id="navbarsExample04">
                              <ul class="navbar-nav mr-auto">
                                  <li class="nav-item">
                                    <a class="nav-link" href="index.html"> Home  </a>
                                 </li> 
                                 <li class="nav-item">
                                    <a class="nav-link" href="about.html"> About Us  </a>
                                 </li> 
                                 <li class="nav-item">
                                    <a class="nav-link" href="clients.html">How it works</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="ourwork.html">Our Work</a>
                                 </li>
                                 <li class="nav-item active">
                                    <a class="nav-link" href="contact.html">Contact Us</a>
                                 </li>
                              </ul>
                              <div class="sign_btn"><a href="#">Order Now</a></div>
                              <br>
                              <br>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      
      <!--  contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Thank you for contacting us we will be back to you as soon as possible</h2>
                    <p style="color: greenyellow;">Feel free to contact us and we will be back to you as soon as we can</p>
                    <h3 class="back"><i style="color:whitesmoke;">Go back to the</i> <a href="index.html" class="btn btn-secondary">Home page</a></h3>
                  </div>
               </div>
             
               
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border-top">
                  <div class="col-md-6 padding_bottom1   ">
                     <h3>Subscribe Now</h3>
                     <form class="footer_form" action = "submit.php">
                        <input class="enter" placeholder="Enter your email" type="type" name="Enter your email">
                        <button class="submit">submit</button>
                     </form>
                  </div>
                  <div class="col-md-6">
                     <div class="row">
                        <div class="col-md-5 offset-md-1 padding_bottom1">
                           <h3>Links</h3>
                           <ul class="cont">
                               <li><a href="https://api.whatsapp.com/send?phone=16823826573&app=facebook&entry_point=page_cta&fbclid=IwAR1wSX7dHTUkLu-b-zeN-DHj1dNo6bN9mDccWpfnNBpJUy-Ql7qE5nPyXsk" class="fa fa-whatsapp" style="color:#adaaaa;"> WhatsApp</a> </li>
                              <li><a href="https://www.facebook.com/Professional-Assignment-Bay-100263296010257/" class="fa fa-facebook" class="fa fa-facebook" style="color:#adaaaa;"> Facebook</a></li>
                              <li><a href="" class="fa fa-instagram" style="color:#adaaaa;"> Intagram</a></li>
                              <li><a href="" class="fa fa-twitter" style="color:#adaaaa;"></a> Twitter</li>
                           </ul>
                        </div>
                        <div class="col-md-5 offset-md-1">
                           <h3>Contact us</h3>
                           <ul class="cont">
                              <li><span><i class="fa fa-phone"></i> <a href="tel:+16823826573"><i style="color:#adaaaa;">+1 (682) 382-6573</i></a></span></h4></li>
                              <li><h4 style="color:#adaaaa;"><i>professionalassignmentbay5@gmail.com</i></h4></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>?? 2022 All Rights Reserved. <a href=""> Peoffesional Assignment Bay</a></p>
                        <p>Designed by <a> Owuor Bilgates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
    
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>


';



?>