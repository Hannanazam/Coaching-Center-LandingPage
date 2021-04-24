<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>The Collegiate</title>
    
    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <!-- Loading Template CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pe-icon-7-stroke.css">
    <link href="css/style-magnific-popup.css" rel="stylesheet">

    <!-- Awsome Fonts -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">


    <!-- Font Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <?php require_once('index.php'); ?> 
    
</head>

<body>


<script>
        function alertMissing(){
        // $('.allll2').click(function(){
         $(document).ready(function(){
              $('.alert2').addClass("show");
              $('.alert2').removeClass("hide");
              $('.alert2').addClass("showAlert");
              setTimeout(function(){
                $('.alert2').removeClass("show");
                $('.alert2').addClass("hide");
              },5000);
          //   });
        });
            $('.close-btn').click(function(){
              $('.alert2').removeClass("show");
              $('.alert2').addClass("hide");
            });
            console.log('chal raha hy')
      
          }
        function alertWarning(){
        // $('.allll1').click(function(){
          $(document).ready(function(){
              $('.alert').addClass("show");
              $('.alert').removeClass("hide");
              $('.alert').addClass("showAlert");
              setTimeout(function(){
                $('.alert').removeClass("show");
                $('.alert').addClass("hide");
              },5000);
            // });
          });
            $('.close-btn').click(function(){
              $('.alert').removeClass("show");
              $('.alert').addClass("hide");
            });
            console.log('chal raha hy')
      
          }
        function alertSuccess(){
        // $('.allll2').click(function(){
          $(document).ready(function(){
              $('.alert1').removeClass("hide");
              $('.alert1').addClass("showAlert");
                 $('.alert1').addClass("show");
              setTimeout(function(){
                $('.alert1').removeClass("show");
                $('.alert1').addClass("hide");
              },5000);
            // });
          });
            $('.close-btn').click(function(){
              $('.alert1').removeClass("show");
              $('.alert1').addClass("hide");
            });
      console.log('chal raha hy')
          }
      </script>
      
      
      
      
      <?php
      if(isset($_POST["send"])){
        $FName=" Name : ".$_POST["contact_names"];
        $LName=" Phone Number : ".$_POST["contact_phone"];
        $Subject= " This is my web ";
        $Email=" User Email : ".$_POST["contact_email"];
        $Message=" User Message : ".$_POST["contact_message"];
      
      
        $from = "hannanazam200@gmail.com";
        
        $Message = $FName .' '.$LName.' '.$Subject.' '.$Email.''.$Message;
        
        $to = "hannanazam200@gmail.com";
        $headers = "From:" . $from;
          
          if($FName !="" && $LName !="" && $Subject !="" && $Email !="" && $Message !="")
          {
              if(mail($to,$Subject,$Message,$headers))
        {
          
          echo '<script type="text/javascript">alertSuccess() </script>';
            
          //   alert("Your Message has been succesfully sended, we will contact you soon!");
          //   // var url= "thanks.html"; 
          //   // window.location = url; 
           
         
        }
        else
        { 
          // <script type="text/javascript">
          // alert("Your Message has been warning!")
          // alertWarning();
          // </script>
            echo '<script type="text/javascript">alertWarning() </script>';
        
        }
      }
      else
      {
        
          // <script type="text/javascript">
          // alert("Your Message has been missing")
          //   alertMissing()
          // </script>
             echo '<script type="text/javascript">alertMissing() </script>';
         
              
          }
        }
      ?>





    <!--begin header -->
    <header class="header">

        <!--begin navbar-fixed-top -->
        <nav class="navbar navbar-default navbar-fixed-top">

            <!--begin container -->
            <div class="container">

                <!--begin navbar -->
                <nav class="navbar navbar-expand-lg">

                    <!--begin logo -->
                    <a class="navbar-brand" href="#">The Collegiate</a>
                    <!--end logo -->

                    <!--begin navbar-toggler -->
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
                    </button>
                    <!--end navbar-toggler -->

                    <!--begin navbar-collapse -->
                    <div class="navbar-collapse collapse" id="navbarCollapse" style="z">
                        
                        <!--begin navbar-nav -->
                        <ul class="navbar-nav ml-auto">

                            <li><a href="#home">Home</a></li>

                            <li><a href="#services">Services</a></li>

                            <li><a href="#about">About</a></li>

                            <li><a href="#testimonials">Testimonials</a></li>

                            <li><a href="#gallery">Gallery</a></li>

                            <li><a href="#faculty">Faculty</a></li>

                            <li><a href="#faq">FAQ</a></li>

                            <li class="discover-link"><a href="#contact" class="discover-btn">Get In Touch</a></li>

                        </ul>
                        <!--end navbar-nav -->

                    </div>
                    <!--end navbar-collapse -->

                </nav>
                <!--end navbar -->

            </div>
    		<!--end container -->
            
        </nav>
    	<!--end navbar-fixed-top -->
        
    </header>
    <!--end header -->

    <!--begin home section -->
    <section class="home-section" id="home">

        <div class="home-section-overlay"></div>

		<!--begin container -->
		<div class="container">

	        <!--begin row -->
	        <div class="row">
	          
	            <!--begin col-md-6-->
	            <div class="col-md-6">

	          		<h1>Hi. <span class="red">I'm Hannan</span>. I design awesome websites.</h1>

	          		<p class="hero-text">I am a website designer based in the heart of Camden Town, London.</p>

                    <!--begin popup-video-wrapper-->
                    <div class="popup-gallery-wrapper">
                        
                        <!--begin popup-video-->
                        <div class="popup-gallery">
                            
                            <a class="popup4 video-icon" href="https://www.youtube.com/watch?v=FPfQMVf4vwQ">
                                <i class="fas fa-play"></i>
                            </a>

                        </div>
                        <!--end popup-video-->

                        <p class="popup-video-text">Watch Presentation Video</p>

                    </div>
                    <!--end popup-video-wrapper-->

	            </div>
	            <!--end col-md-6-->

	        </div>
	        <!--end row -->

		</div>
		<!--end container -->

    </section>
    <!--end home section -->

    <!--begin section-white -->
    <section class="section-white" id="services">
    
        <!--begin services-wrapper -->
        <div class="services-wrapper">

            <!--begin container -->
            <div class="container">

                <!--begin row -->
                <div class="row">

                    <!--begin col-md-12-->
                    <div class="col-md-12 text-center">

                        <h2 class="section-title">What I do the best</h2>

                        <p class="section-subtitle">Quis autem velis ets reprehender net etid quiste voluptate.</p>

                    </div>
                    <!--end col-md-12 -->

                </div>
                <!--end row -->

                <!--begin row -->
                <div class="row">

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services">

                            <i class="pe-7s-medal"></i>

                            <h4>Website Design</h4>

                            <p>Curabitur quam etsum lacus net netsum nulat iaculis etsimun vitae etsum nisle varius netsum.</p>
                            
                        </div>

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services">

                            <i class="pe-7s-tools"></i>

                            <h4>Web Development</h4>

                            <p>Curabitur quam etsum lacus net netsum nulat iaculis etsimun vitae etsum nisle varius netsum.</p>
                            
                        </div>

                    </div>
                    <!--end col-md-4 -->

                    <!--begin col-md-4 -->
                    <div class="col-md-4">

                        <div class="main-services">

                            <i class="pe-7s-umbrella"></i>

                            <h4>Online Marketing</h4>

                            <p>Curabitur quam etsum lacus net netsum nulat iaculis etsimun vitae etsum nisle varius netsum.</p>
                            
                        </div>

                    </div>
                    <!--end col-md-4 -->

                </div>
                <!--end row -->
                
            </div>
            <!--end container -->

        </div>
        <!--end services-wrapper -->

    </section>
    <!--end section-white -->

    <!--begin section-grey -->
    <section class="section-grey" id="about">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-6-->
                <div class="col-md-6">

                    <!--begin col-md-6-->
                    <div class="left-image">

                        <!-- <img src="http://placehold.it/555x590" class="image-shadow width-100" alt="Happy"> -->
                        <img src="images/ab1.jpg" class="image-shadow width-100" alt="Happy">

                    </div>
                    <!--end col-sm-6-->
                    
                </div>
                <!--end col-sm-6-->
                
                <!--begin col-md-6-->
                <div class="col-md-6 margin-top-20">

                    <h3>A little about us</h3>

                    <p>Velis demo enim ipsam voluptatem quia voluptas sit aspernatures netsum norems fugit, seditum netis velas matrix net nesciunt.</p>
                    
                    <ul class="benefits">
                        <li><i class="fas fa-check"></i> Quias netus magni netsum eos qui ratione sequi.</li>
                        <li><i class="fas fa-check"></i> Venis ratione sequi netus enim quia tempor magni.</li>
                        <li><i class="fas fa-check"></i> Enim ipsam netus voluptatem quia voluptas.</li>
                    </ul>

                    <!--begin row-->
                    <div class="row">
                    
                        <!--begin col-md-6-->
                        <div class="col-md-6">

                            <ul class="freelancer-details">
                                <li><span class="freelancer-main-details">Location</span><span class="freelancer-second-details">Karachi, Pakistan</span></li>
                                <li><span class="freelancer-main-details">Since</span><span class="freelancer-second-details">1991</span></li>
                                <li><span class="freelancer-main-details">Direction</span><span class="freelancer-second-details">Available</span></li>
                            </ul>

                        </div>
                        <!--end col-sm-6-->
                        
                        <!--begin col-md-6-->
                        <div class="col-md-6">

                            <ul class="freelancer-details">
                                <li><span class="freelancer-main-details">Phone</span><span class="freelancer-second-details">(021) 555 789</span></li>
                                <li><span class="freelancer-main-details">Email</span><span class="freelancer-second-details myemail">hi@Hannan-s.com</span></li>
                                <li><span class="freelancer-main-details">Facebook</span><a href="#" target="_blank"><span class="freelancer-second-details">The Collegiate</span></a></li>
                            </ul>

                        </div>
                        <!--end col-sm-6-->
                        
                    </div>
                    <!--end row-->
                    
                    <a href="#" class="btn-red small scrool">Our Page</a>

                </div>
                <!--end col-md-6-->
            
            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end section-grey -->

    <!--begin section-white -->
    <section class="section-white">
        
        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col-md-6-->
                <div class="col-md-6">

                    <h3>Skills and Education</h3>

                    <p>Utise wisi enim minim veniam, quis et stationes ullamcorper nets suscipit ets lobotis nisle consequat nihis etim. Quis autem velis ets reprehender net etid quiste voluptate velite esse sedis.</p>

                    <p>Velis demo enim ipsam voluptatem quia voluptas sit aspernatures netsum norems fugit, seditum netis velas matrix net nesciunt.</p>
                
                    <a href="#gallery" class="btn-red small scrool">Discover My Work</a>

                </div>
                <!--end col-sm-6-->
                
                <!--begin col-md-6-->
                <div class="col-md-6">

                    <!--begin progress-list -->
                    <ul class="progress-list">
                        
                        <li>
                            <p>Matriculation <span>99%</span></p>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 97%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        
                        <li>
                            <p>Intermediate <span>90%</span></p>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        
                        <li>
                            <p>B.Com <span>75%</span></p>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        
                        <li>
                            <p>B.SC <span>87%</span></p>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 87%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>
                        
                        <li>
                            <p>B.A <span>65%</span></p>
                            <div class="progress" style="height: 20px;">
                                <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </li>

                    </ul>
                    <!--end progress-list -->
                    
                </div>
                <!--end col-md-6-->
            
            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end section-white -->

    <!--begin testimonials section -->
    <section class="section-grey" id="testimonials">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row align-items-center">

                <!--begin col-md-5 -->
                <div class="col-md-5 col-sm-12">

                    <h2>What People Are Saying.</h2>

                    <p>Quis autem velis ets reprehender net etid quiste nets voluptate. Utise wisi enim minim veniam, quis etsad aspernatis netsum stationes nets.</p>
                    
                        <!--begin row-->
                        <div class="row">
                        
                            <!--begin col-md-4-->
                            <div class="col-md-4 col-sm-6">

                                <!--begin testim-platform-->
                                <div class="testim-platform first">

                                    <p>Education</p>

                                    <div class="testim-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fas fa-star-half-alt" aria-hidden="true"></i>
                                    </div>

                                </div>
                                <!--end testim-platform-->
                                
                            </div>
                            <!--end col-sm-4-->
                            
                            <!--begin col-md-4-->
                            <div class="col-md-4 col-sm-6">

                                <!--begin testim-platform-->
                                <div class="testim-platform">

                                    <p>Skills</p>

                                    <div class="testim-rating">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="far fa-star" aria-hidden="true"></i>
                                    </div>

                                </div>
                                <!--end testim-platform-->
                                
                            </div>
                            <!--end col-sm-4-->
                            
                        </div>
                        <!--end row-->
                        
                </div>
                <!--end col-md-5 -->

                <!--begin col-md-1 -->
                <div class="col-md-1"></div>
                <!--end col-md-1 -->

                <!--begin col-md-6-->
                <div class="col-md-6">

                    <!--begin accordion -->
                    <div class="accordion" id="accordionFAQ">

                        <!--begin card -->
                        <div class="card">
                            
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionFAQ">
                                <div class="card-body">
                                Nemo enim ipsam voluptatem quia voluptas situm ets aspernatis netsum loris fugit, sed quia magni dolores eos quis ratione sequi etum nets vesciunt neque.
                                </div>
                            </div>

                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <img src="images/person_1.png" alt="testimonials" class="testim-img">
                                  <p class="testim-name">Alexandra Smith / <span>Manager - SmartCoders</span></p>
                                </button>
                                </h5>
                            </div>

                        </div>
                        <!--end card -->

                        <!--begin card -->
                        <div class="card">

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionFAQ">
                                <div class="card-body">
                                Nemo enim ipsam voluptatem quia voluptas situm ets aspernatis netsum loris fugit, sed quia magni dolores eos quis ratione sequi etum nets vesciunt neque.
                                </div>
                            </div>

                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <img src="images/person_2.png" alt="testimonials" class="testim-img">
                                  <p class="testim-name">John Doe / <span>CEO - Epic Design</span></p>
                                </button>
                                </h5>
                            </div>

                        </div>
                        <!--end card -->

                        <!--begin card -->
                        <div class="card">

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionFAQ">
                                <div class="card-body">
                                Nemo enim ipsam voluptatem quia voluptas situm ets aspernatis netsum loris fugit, sed quia magni dolores eos quis ratione sequi etum nets vesciunt neque.
                                </div>
                            </div>

                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <img src="images/person_3.png" alt="testimonials" class="testim-img">
                                  <p class="testim-name">Christina Pages / <span>Designer - New Fashion</span></p>
                                </button>
                                </h5>
                            </div>

                        </div>
                        <!--end card -->

                    </div>
                    <!--end accordion -->

                </div>
                <!--end col-md-6-->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end testimonials section -->
    
    <!--begin gallery section -->
    <section class="section-white" id="gallery">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">
        
                <!--begin col-md-12 -->
                <div class="col-md-12 text-center padding-bottom-30">

                    <h2 class="section-title">A selection of my work</h2>

                    <p class="section-subtitle">BEST . MOST . FIRST . ONLY</p>
                  
                </div>
                <!--end col-md-12 -->
           
            </div>
            <!--end row -->
        
        </div>
        <!--end container -->
    
        <!--begin container -->
        <div class="container">

            <!--begin row-->
            <div class="row">

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/gallery1.jpg">
                                <img src="images/gallery1.jpg" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>
                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/gallery1.jpg">
                                <img src="images/gallery1.jpg" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>
                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/gallery1.jpg">
                                <img src="images/gallery1.jpg" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>
                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/gallery1.jpg">
                                <img src="images/gallery1.jpg" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>
                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/gallery1.jpg">
                                <img src="images/gallery1.jpg" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>
                </div>
                <!--end col-md-4 -->

                <!--begin col-md-4 -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <figure class="gallery-insta">
                        <!--begin popup-gallery-->
                        <div class="popup-gallery popup-gallery-rounded portfolio-pic">
                            <a class="popup2" href="images/gallery1.jpg">
                                <img src="images/gallery1.jpg" class="width-100" alt="pic">
                                <span class="eye-wrapper"><i class="fa fa-search-plus eye-icon" style="font-size: 38px;"></i></span>
                            </a>
                        </div>
                        <!--end popup-gallery-->
                    </figure>
                </div>
                <!--end col-md-4 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">
        
                <!--begin col-md-12 -->
                <div class="col-md-12 text-center padding-top-10">

                    <p class="follow-instagram">Like what you see? Follow me <a href="#">@Hannan</a></p>
                  
                </div>
                <!--end col-md-12 -->
           
            </div>
            <!--end row -->
        
        </div>
        <!--end container -->
    
    </section>
    <!--end gallery section -->

   

    <!-- my sample -->
<section id="faculty">
    <div class="col-md-12 text-center padding-bottom-30">

        <h2 class="section-title">OUR FACULTY</h2>

        <p class="section-subtitle">BEST . MOST . FIRST . ONLY</p>
      
    </div>
  <div class="container">
    <div id="slide-left-container">
      <div class="slide-left">
      </div>
    </div>
    <div id="cards-container">
      <div class="cards">
        <div class="card">
          <img src="images/f1.jpg" alt="Animals" style="width:100%">
          <div class="container">
            <h4>
              <b>Animals</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="images/f1.jpg" alt="Nature" style="width:100%">
          <div class="container">
            <h4>
              <b>Nature</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="images/f1.jpg" alt="Architecture" style="width:100%">
          <div class="container">
            <h4>
              <b>Architecture</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="images/f1.jpg" alt="Technology" style="width:100%">
          <div class="container">
            <h4>
              <b>Technology</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="images/f1.jpg" alt="People" style="width:100%">
          <div class="container">
            <h4>
              <b>People</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="images/f1.jpg" alt="Animals" style="width:100%">
          <div class="container">
            <h4>
              <b>Animals</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="images/f1.jpg" alt="Nature" style="width:100%">
          <div class="container">
            <h4>
              <b>Nature</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="images/f1.jpg" alt="Architecture" style="width:100%">
          <div class="container">
            <h4>
              <b>Architecture</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="images/f1.jpg" alt="Technology" style="width:100%">
          <div class="container">
            <h4>
              <b>Technology</b>
            </h4>
          </div>
        </div>
        <div class="card">
          <img src="images/f1.jpg" alt="People" style="width:100%">
          <div class="container">
            <h4>
              <b>People</b>
            </h4>
          </div>
        </div>
      </div>
    </div>

    <div id="slide-right-container">
      <div class="slide-right">
      </div>
    </div>

  </div>
  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>

    <!-- <div class="container-fluid">
        <h1 class="text-center mb-3">OUR FACULTY</h1>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner row w-100 mx-auto">
            <div class="carousel-item col-md-3 active">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 1</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/418cf4/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 2</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/3ed846/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 3</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 4</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 5</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 6</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
            <div class="carousel-item col-md-3">
              <div class="card">
                <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card 7</h4>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div> -->
    </section>
    
    <!-- my sample -->


    <!--begin faq section -->
    <section class="section-white" id="faq">

        <!--begin container -->
        <div class="container">

            <!--begin row -->
            <div class="row">

                <!--begin col-md-12-->
                <div class="col-md-12 text-center padding-bottom-10">

                    <h2 class="section-title">Frequently Asked Questions</h2>

                    <p class="section-subtitle">Quis autem velis ets reprehender net etid quiste voluptate.</p>

                </div>
                <!--end col-md-12 -->

            </div>
            <!--end row -->

            <!--begin row -->
            <div class="row">

                <!--begin col-md-6-->
                <div class="col-md-6">

                    <div class="faq-box">

                        <h5>Velit ut tortizi pretium viverra suspendisse?</h5>

                        <p>Utise wisi enim minim veniam, quis et stationes ullamcorper nets suscipit ets lobotis nisle consequat nihis etim. Quis autem velis ets reprehender net etid quiste voluptate velite esse sedis.</p>

                    </div>

                    <div class="faq-box">

                        <h5>Maecenas volutpat blandit etiam?</h5>

                        <p>Utise wisi enim minim veniam, quis et stationes ullamcorper nets suscipit ets lobotis nisle consequat nihis etim. Quis autem velis ets reprehender net etid quiste voluptate velite esse sedis.</p>

                    </div>
                    
                </div>
                <!--end col-md-6 -->

                <!--begin col-md-6-->
                <div class="col-md-6">

                    <div class="faq-box">

                        <h5>Nibh sit amet aliquam commodo?</h5>

                        <p>Utise wisi enim minim veniam, quis et stationes ullamcorper nets suscipit ets lobotis nisle consequat nihis etim. Quis autem velis ets reprehender net etid quiste voluptate velite esse sedis.</p>

                    </div>

                    <div class="faq-box">

                        <h5>Elementum curabitur vitae?</h5>

                        <p>Utise wisi enim minim veniam, quis et stationes ullamcorper nets suscipit ets lobotis nisle consequat nihis etim. Quis autem velis ets reprehender net etid quiste voluptate velite esse sedis.</p>

                    </div>

                </div>

                <!--end col-md-6 -->

            </div>
            <!--end row -->

        </div>
        <!--end container -->

    </section>
    <!--end faq section -->

    <!--begin section-bg-1 -->
    <section class="section-bg-1">
        
        <div class="section-bg-red-overlay"></div>

        <!--begin container-->
        <div class="container">

            <!--begin row-->
            <div class="row">
            
                <!--begin col md 7 -->
                <div class="col-md-7 mx-auto margin-bottom-20 text-center">

                    <h3 class="white-text">Fun Facts About My Work</h3>

                </div>
                <!--end col md 7-->
            
            </div>
            <!--end row-->
    
            <!--begin row-->
            <div class="row">
        
                <!--begin fun-facts-box -->
                <div class="col-md-2 offset-md-2 fun-facts-box text-center">
                    
                    <i class="far fa-gem"></i>
                    
                    <p class="fun-facts-title"><span class="facts-numbers">1050+</span><br>Projects Completed</p>
                    
                </div>
                <!--end fun-facts-box -->

                <!--begin fun-facts-box -->
                <div class="col-md-2 fun-facts-box text-center">
                    
                    <i class="far fa-heart"></i>
                                               
                    <p class="fun-facts-title"><span class="facts-numbers">217k</span><br>Happy Clients</p>
                        
                </div>
                <!--end fun-facts-box -->

                <!--begin fun-facts-box -->
                <div class="col-md-2 fun-facts-box text-center">
                    
                    <i class="fas fa-award"></i>
                                               
                    <p class="fun-facts-title"><span class="facts-numbers">1210</span><br>Design Awards</p>
                        
                </div>
                <!--end fun-facts-box -->

                <!--begin fun-facts-box -->
                <div class="col-md-2 fun-facts-box text-center">
                    
                    <i class="fas fa-anchor"></i>
                                               
                    <p class="fun-facts-title"><span class="facts-numbers">2137</span><br>Line Of Codes</p>
                        
                </div>
                <!--end fun-facts-box -->

            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end section-bg-1 -->

    <!--begin section-white -->
    <section class="section-white no-padding" id="contact">
        
        <!--begin container-->
        <div class="container-fluid px-0">

            <!--begin row-->
            <div class="row no-gutters align-items-center">
            
                <!--begin col-md-6-->
                <div class="col-md-6">

                    <!-- <img src="http://placehold.it/795x755" class="bottom-margins-images width-100" alt="Happy"> -->
                    <iframe class="bottom-margins-images width-100" alt="Happy" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d226.17845131583735!2d67.20352230000002!3d24.902919600000008!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x15334b2bbb0ffd83!2sThe%20Collegiate%20Coaching%20Centre!5e0!3m2!1sen!2s!4v1615573709339!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                </div>
                <!--end col-sm-6-->
                
                <!--begin col-md-6-->
                <div class="col-md-6">

                    <!--begin small-column-inside-->
                    <div class="small-col-inside">

                        <h3>Get In Touch</h3>

                        <p>Please contact me using the form bellow.</p>

                        <!--begin success message -->
                        <p class="contact_success_box" style="display:none;">We received your message and you'll hear from us soon. Thank You!</p>
                        <!--end success message -->

                        <!--begin contact form -->
                        <form id="contact-form" class="contact" method="post">

                            <input class="contact-input white-input" required="" name="contact_names" placeholder="Full Name*" type="text">

                            <input class="contact-input white-input" required="" name="contact_email" placeholder="Email Adress*" type="email">

                            <input class="contact-input white-input" required="" name="contact_phone" placeholder="Phone Number*" type="text">

                            <textarea class="contact-commnent white-input" rows="2" cols="20" name="contact_message" placeholder="Your Message..."></textarea>

                            <input value="Get In Touch"  name="send" id="submit-button" class="contact-submit" type="submit">

                        </form>
                        <!--end contact form -->

                        <p class="register-form-terms">Free Quotes • TrustMark Accredited</p>

                    </div>
                    <!--end small-column-inside-->

                </div>
                <!--end col-md-6-->
            
            </div>
            <!--end row-->
    
        </div>
        <!--end container-->
    
    </section>
    <!--end section-white -->

    <!--begin footer -->
    <div class="footer">
                
        <!--begin container -->
        <div class="container">
        
            <!--begin row -->
            <div class="row">
            
            
                <!--begin col-md-12 -->
                <div class="col-md-12 text-center">
                   
                    <p>Copyright © 2020 <span class="template-name">Hannan</span>.</p>
                    
                </div>
                <!--end col-md-12 -->
                
            </div>
            <!--end row -->
            
        </div>
        <!--end container -->
                
    </div>
    <!--end footer -->

 <!-- alert -->
 <div class="alertsss1">
        <!-- <button class="allll1" onclick="alertSuccess()">success</button> -->
      <div class="alert1 hide">
        <i class="fas fa-check-circle"></i>
        <span class="msg">Congratulation! Your message has been submitted we will contact you soon.</span>
        <div class="close-btn">
          <span class="fas fa-times"></span>
        </div>
    </div>
    </div>
    <div class="alertsss">
      <!-- <button class="allll" onclick="alertWarning()">warning</button> -->
    <div class="alert hide">
      <i class="fas fa-exclamation-circle"></i>
      <span class="msg">Oops! Message not send poor connection.</span>
      <div class="close-btn">
        <span class="fas fa-times"></span>
      </div>
  </div>
</div>


  <div class="alertsss2">
    <!-- <button class="allll2" onclick="alertMissing()">missing</button> -->
  <div class="alert2 hide">
    <i class="fas fa-exclamation-circle"></i>
    <span class="msg">Warning! Record fields has been missing.</span>
    <div class="close-btn">
      <span class="fas fa-times"></span>
    </div>
</div>
    <!-- alert -->



<!-- Load JS here for greater good =============================-->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo-min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/plugins.js"></script>
<script src="js/custom.js"></script>
<script src="js/slider.js"></script>
</body>
</html>