<?php
session_start();
include('verifica_login.php');
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    
    <!--====== Title ======-->
    <title><?php echo $_SESSION['usuario']; ?></title>
    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/png">
        
    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="assets/css/animate.css"> 
        
    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css"> 
        
    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/css/slick.css"> 
        
    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/css/LineIcons.css"> 
        
    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"> 
        
    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
    
    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/css/default.css"> 
    
    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/css/style.css"> 
    
</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->    
   
   
    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->
    
    <!--====== HEADER PART START ======-->
    
    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-bran" href="edi.php">
                                <img src="assets/images/logo1.png" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="edi.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="edi_class.php">All classes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="edi_pay.php">Payment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="logout.php">Sair</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                               <p><a class="main-btn" data-scroll-nav="0" href="edi.php"><?php echo $_SESSION['usuario']; ?></a></p>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s" style="color:yellow"><?php echo $_SESSION['usuario']; ?></h3>             
        <div class="container">
                        <h3 class="title" style="color:aliceblue">Acompanhe suas aulas.</h3><br><br>
                        <table class="table table-bordered table-hover" style="background-color: white;">
                            <thead>
                                <tr>
                                <th>Dia</th>
                                <th>Tema</th>
                                <th>Arquivo</th>
                                <th>Exercícios</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>20/01</th>
                                <td>Places I have been</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-24.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/Q4Z92EKQP">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>27/01</th>
                                <td>Places I have been II</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-24.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/Q052NY9K4">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>03/02</th>
                                <td style="color: crimson;">Ausente</td>
                                <td><a class="more" target="_blank" href="">&#128196;</a></td>
                                <td><a class="more" href="quiz_ops.php">&#9745;</a></td>
                                </tr> 
                                <tr>
                                <th>10/02</th>
                                <td>Things I have done</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-25.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://learnenglish.britishcouncil.org/grammar/intermediate-to-upper-intermediate/just-yet-still-and-already">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>17/02</th>
                                <td>Things I have done II</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-25.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://learnenglish.britishcouncil.org/grammar/intermediate-to-upper-intermediate/just-yet-still-and-already">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>24/02</th>
                                <td>Activities in progress</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-26.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QK2L5FUJT">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>03/03</th>
                                <td>Activities in progress II</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-26.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QK2L5FUJT">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>10/03</th>
                                <td>Song - With You by Chris Brown</td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=nmjdaBaZe8Y">&#x1F3B5;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>17/03</th>
                                <td>Tell me about...</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/17GB1C8M1SNl75kNZFQfcZ-28efpaj9CU96oxaVuzw0o/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>24/03</th>
                                <td>Catch Me If You Can scene</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/16UcqEEBvg6P7NGf0Kji2nT3z-Twt1P7HEqRJRZ858Xg/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" target="_blank" href="https://www.youtube.com/watch?v=ppunAo8ckBc">&#127916;</a></td>
                                </tr>
                                <tr>
                                <th>01/04</th>
                                <td>Green Turtle</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1DnV1HTZ-4mnR4s9KCUkEBSK4CZKI4FxPvOKhfXQoYAM/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>07/04</th>
                                <td style="color: crimson;">Ausente</td>
                                <td><a class="more" target="_blank" href="">&#128196;</a></td>
                                <td></td>
                                </tr> 
                                <tr>
                                <th>28/04</th>
                                <td>She's out of my league</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1uWFFlCwbTVlZ8umDeCbXhn_nns_7kYzqw1bWjXB1tpo/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>05/05</th>
                                <td>The Guide Dog</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/17_hF53vboFcHMFSgo39XWvssZi_28WloXql46NbYhW4/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="">&#x1F3B5;</a></td>
                                </tr>
                                <tr>
                                <th>12/05</th>
                                <td>Tongue Twisters</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1YWwJy9UQ6sPKUzl685WxkQEeQI2z2bQ3i72y7mhkaDE/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href=""></a></td>
                                </tr>
                                <tr>
                                <th>19/05</th>
                                <td>Useful Words II</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1cm_RaB8bdV3BH-JuHmJ7KERvMsU3nov0hByXWJIlHnE/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>16/06</th>
                                <td>IELTS</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>23/06</th>
                                <td>Dating</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>30/06</th>
                                <td>FOOD</td>
                                <td></td>
                                <td></td>
                                </tr>
                            </tbody>
                        </table>
        </div>
      
                        </div> <!-- header hero content -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header hero -->
    </header>
    
    
        </div> 
    </section>
    
   
    
  
    
    <footer id="footer" class="footer-area pt-120">
        <div class="container">
             
            <div class="footer-widget pb-100">
                <br><br><br>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="assets/images/logo1.png" alt="logo">
                            </a>
                            <p class="text">Contato</p>
                            <ul class="contact">
                                <li style="color: white;">+55(18)981323625</li>
                                <li style="color: white;">leonardosantunes@yahoo.com</li>
                               
                    </div>
                    
                           
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text">Designed and Developed by <a href="https://uideck.com" rel="nofollow">UIdeck</a></p>
                            </div> <!-- copyright content -->
                        </div> <!-- copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- footer copyright -->
        </div> <!-- container -->
        <div id="particles-2"></div>
    </footer>
    
    <!--====== FOOTER PART ENDS ======-->
    
    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

   


    <!--====== Jquery js ======-->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    
    <!--====== Bootstrap js ======-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!--====== Plugins js ======-->
    <script src="assets/js/plugins.js"></script>
    
    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script> 
    
    <!--====== Ajax Contact js ======-->
    <script src="assets/js/ajax-contact.js"></script> 
    
    <!--====== Counter Up js ======-->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script> 
    
    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script> 
    
    <!--====== Scrolling Nav js ======-->
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/scrolling-nav.js"></script> 
    
    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>
    
    <!--====== Particles js ======-->
    <script src="assets/js/particles.min.js"></script>
    
    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script> 
    
</body>

</html>