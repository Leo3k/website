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
                            <a class="navbar-bran" href="cesar.php">
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
                                        <a class="page-scroll" href="cesar.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="cesar_class.php">All classes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="cesar_pay.php">Payment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="logout.php">Sair</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                               <p><a class="main-btn" data-scroll-nav="0" href="cesar.php"><?php echo $_SESSION['usuario']; ?></a></p>
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
                                <th>17/01</th>
                                <td>Question Tags</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-1.pdf">&#128196;</a></td>
                                <td><a class="more" href="q_tags_3-1.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>24/01</th>
                                <td>Where things are</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-3.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QSQMDRH78">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>31/01</th>
                                <td>Where things are - Part II</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-3.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QSQMDRH78">&#9745;</a></td>
                                </tr>
                                <th>07/02</th>
                                <td style="color:crimson;">Ausente</td>
                                <td><a class="more" target="_blank" href="">&#128196;</a></td>
                                <td><a class="more" href="quiz_ops.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>14/02</th>
                                <td>Numbers and Statistics</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-4.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QZB59WU72">&#9745;</a></td>
                                </tr>
                                <tr>
                                <tr>
                                <th>21/02</th>
                                <td style="color:crimson;">Ausente</td>
                                <td><a class="more" target="_blank" href="">&#128196;</a></td>
                                <td><a class="more" href="quiz_ops.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>07/03</th>
                                <td style="color:crimson;">Ausente</td>
                                <td><a class="more" target="_blank" href="">&#128196;</a></td>
                                <td><a class="more" href="quiz_ops.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>14/03</th>
                                <td>Times and Dates</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-5.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QC5FWGXSQ">&#9745;</a>&nbsp;&nbsp;<a class="more" href="https://www.quiz-maker.com/QA3JPT5K7">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>21/03</th>
                                <td>Times and Dates II</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1kxy6QRkOYpS-XcmxN4ccxvUBMLbej0SHbW2nhWROojU/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="quiz_ops.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>28/03</th>
                                <td style="color:crimson;">Ausente</td>
                                <td><a class="more" target="_blank" href="">&#128196;</a></td>
                                <td><a class="more" href="quiz_ops.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>04/04</th>
                                <td>FUTURE</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/15BhgMFDGNgQRVGdgyK05FN-VRDcx30j7bI-K0R7lKJ0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>11/04</th>
                                <td>FUTURE 2</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/153TBmkBRoytD8bz_B4gjEFBpIXhyCD7o6EslJn77NBU/edit?usp=sharing"><img src="https://i.ibb.co/3swb9h8/file-type-pdf-icon-130274.png" alt="pdf" height="25px" width="25px"></a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>02/05</th>
                                <td>Some - any - no</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1wJ5a-qYH1L6tlF0tKZe-oiC1vkhZyk2diyKAk15D6Ek/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QWYGVXO3K">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>16/05</th>
                                <td>Somebody - anything - nowhere</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1VfJdEmzXnBYu5pS6O_Uq_88pPRdHtbemnboW33nZi04/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr> 
                                <tr>
                                <th>23/05</th>
                                <td>Somebody - anything - nowhere part 2</td>
                                <td><a class="more" href=" https://docs.google.com/presentation/d/15KVVH-kU-IXZb86ZCT98haAd2nyNo8kNsocM97hPFPA/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://test-english.com/grammar-points/a2/something-anything-nothing-etc/">&#9745;</a></td> 
                                </tr> 
                                <tr>
                                <th>06/06</th>
                                <td>Very</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/19sYQHiSNW6hm744I_0pZPAM4Zt6uN0zeQ2bihz-3138/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/Q09RIEABO">&#9745;</a></td> 
                                </tr>
                                <tr>
                                <th>20/06</th>
                                <td>Mary's Saturday</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1jxI4L1cfZG5FJEDpxGR2SXYcDmVy-BvYuJAIjEh0d-Y/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>27/06</th>
                                <td>Mary's Saturday Part 2</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1jxI4L1cfZG5FJEDpxGR2SXYcDmVy-BvYuJAIjEh0d-Y/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>04/07</th>
                                <td>FOOD</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1T3VIb_p1L_P0t2Xi_wvB1ak3E1ok09KHBRNLckrURGY/edit?usp=sharing">&#128196;</a></td>
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
                                <li style="color: white;">+55981323625</li>
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