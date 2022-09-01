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
                            <a class="navbar-bran" href="alex.php">
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
                                        <a class="page-scroll" href="alex.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="alex_class.php">All classes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="alex_pay.php">Payment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="logout.php">Sair</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                               <p><a class="main-btn" data-scroll-nav="0" href="alex.php"><?php echo $_SESSION['usuario']; ?></a></p>
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
                                <th>03/03</th>
                                <td>First Class</td>
                                <td></td>
                                <td></a></td>
                                </tr>
                                <tr>
                                <th>08/03</th>
                                <td>Jumping Ships I</td>
                                <td><a class="more" href="assets/classes/Alex/ships1.pdf">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>09/03</th>
                                <td>Jumping Ships II</td>
                                <td><a class="more" href="assets/classes/Alex/ships2.pdf">&#128196;</a></td>
                                <td><a class="more" href="p"></a></td>
                                </tr>
                                <tr>
                                <th>10/03</th>
                                <td>Jumping Ships III</td>
                                <td><a class="more" href="assets/classes/Alex/ships3.pdf">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>15/03</th>
                                <td>Tell me about...</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/17GB1C8M1SNl75kNZFQfcZ-28efpaj9CU96oxaVuzw0o/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>16/03</th>
                                <td>Verb Tenses</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1B3-SYvEZCPyEQQzXdNz62Gpy5ObhzJ9vVfeCaAUuYTo/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=XFRIb1R12A4">&#127916;</a></td>
                                </tr>
                                <tr>
                                <th>17/03</th>
                                <td>Simple Past</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1zNdw87YG5drUhx1fqr_VdYNYf6Pv8Y4WVVdbedUl_1k/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QC5K0XXCQ"> &#128221;</a></td>
                                </tr>
                                <tr>
                                <th>22/03</th>
                                <td>Catch Me If You Can scene</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/16UcqEEBvg6P7NGf0Kji2nT3z-Twt1P7HEqRJRZ858Xg/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" target="_blank" href="https://www.youtube.com/watch?v=ppunAo8ckBc">&#127916;</a></td>
                                </tr>
                                <tr>
                                <th>23/03</th>
                                <td>Reading a package insert</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1WlT3o7Rnw942GITF6H-655dZTPFUb1r4TPLfPxrtwuI/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>24/03</th>
                                <td>Story</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1MWgk04oN2IZMIrvVrk4DKLEA735xVjpCJNoiITsHcxQ/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>29/03</th>
                                <td>Parenting</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/document/d/1kP5_VnvYhGubCAUkY8SOCNSfWKnsmGVLVQYG0g9gE0M/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>     
                                <tr>
                                <th>30/03</th>
                                <td>Verbs related to eating</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1fh6o061JkvP0UURkHX79LDMLl00CJm7-dSdDe1UIQgc/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>  
                                <tr>
                                <th>31/03</th>
                                <td>Cartoons</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1k2WPP_JV05s2MM4OR6QRw20Oh3eHJFYfAlYQvUlRS80/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>  
                                <tr>
                                <th>05/04</th>
                                <td>Green Turtle</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1DnV1HTZ-4mnR4s9KCUkEBSK4CZKI4FxPvOKhfXQoYAM/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>  
                                <tr>
                                <th>06/04</th>
                                <td>FREE TIME</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/17B2u1BVbnId1fLHDgh6oSMRIleNpHy54bWFAJDBjAvk/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>  
                                <tr>
                                <th>07/04</th>
                                <td>FREE TIME part 2</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/17B2u1BVbnId1fLHDgh6oSMRIleNpHy54bWFAJDBjAvk/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>12/04</th>
                                <td>She's out of my league</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1uWFFlCwbTVlZ8umDeCbXhn_nns_7kYzqw1bWjXB1tpo/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>    
                                <tr>
                                <th>13/04</th>
                                <td>Friends: Marriage</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1jx3mVG-2-JWMa7nauIOsO_QzLHACXcuLwCicKM1Wit4/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" target="_blank" href="https://www.youtube.com/watch?v=s0OORxpYLbw">&#127916;</a></td>
                                </tr>  
                                <tr>
                                <th>19/04</th>
                                <td>Friends: Marriage Part 2</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1jx3mVG-2-JWMa7nauIOsO_QzLHACXcuLwCicKM1Wit4/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" target="_blank" href="https://www.youtube.com/watch?v=s0OORxpYLbw">&#127916;</a></td>
                                </tr>        
                                <tr>
                                <th>20/04</th>
                                <td style="color: crimson;">Ausente</td>
                                <td><a class="more" target="_blank" href="">&#128196;</a></td>
                                <td></td>
                                </tr> 
                                <tr>
                                <th>22/04</th>
                                <td>Paraphrasing</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/document/d/1jFrUUzqbhbTHAAt12WROXoIVr9HJLf7TMIn1DzObCTA/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>  
                                <tr>
                                <th>26/04</th>
                                <td>Paraphrasing Part 2</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1bWAHuUjSe8ZG5l6_-A8vUfcL0-TgCylMjUFnTAc3RqQ/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr> 
                                <tr>
                                <th>27/04</th>
                                <td>Unscramble the sentences</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1H4r0V0_MH9VRgBfVG3f9UEjV5SAPtNarpRI04KuvFMY/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr> 
                                <tr>
                                <th>28/04</th>
                                <td>Song - Somewhere Over The Rainbow</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1D72-_rukCJjU3sbdHAWh4sDOC--0o-lFM1SBlbQNMsQ/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=V1bFr2SWP1I">&#x1F3B5;</a></td>
                                </tr>      
                                <tr>
                                <th>03/05</th>
                                <td>Song - Somewhere Over The Rainbow</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1D72-_rukCJjU3sbdHAWh4sDOC--0o-lFM1SBlbQNMsQ/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=V1bFr2SWP1I">&#x1F3B5;</a></td>
                                </tr>  
                                <tr>
                                <th>04/05</th>
                                <td>Elon Musk buys Twitter</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1deJMcrfhsTJRMuS_ooqb_l_p9ijYE02rk1prBSkxNiw/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>  
                                <tr>
                                <th>05/05</th>
                                <td>The Guide Dog</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/17_hF53vboFcHMFSgo39XWvssZi_28WloXql46NbYhW4/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href=""></a></td>
                                </tr>
                                <tr>
                                <th>10/05</th>
                                <td>Question Tags</td>
                                <td><a class="more" href="https://learnenglishteens.britishcouncil.org/grammar/b1-b2-grammar/question-tags">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/Q83JPE5K7">&#128221;</a></td>
                                </tr> 
                                <tr>
                                <th>11/05</th>
                                <td>Meetings</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1vXwemtgJRd1P1BDtZ_1ZSIL-U2OcJWwIcnq5x48s4tU/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>18/05</th>
                                <td>Job Interview</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1lPhW6Dm3QH_P9JRTyOUKQd390GAAa_7ToBOP1O8Fh94/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>19/05</th>
                                <td>Job Interview II</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1lPhW6Dm3QH_P9JRTyOUKQd390GAAa_7ToBOP1O8Fh94/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>20/05</th>
                                <td>Useful words</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1WpWki33PiifVPe-FiqBtB7PcRkRv18Xx6NKhDkw-mNo/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QG2G3FV6L">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>25/05</th>
                                <td>Useful Words II</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1cm_RaB8bdV3BH-JuHmJ7KERvMsU3nov0hByXWJIlHnE/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>26/05</th>
                                <td>Useful Words II part 2</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1cm_RaB8bdV3BH-JuHmJ7KERvMsU3nov0hByXWJIlHnE/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>27/05</th>
                                <td>Useful Words III</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1gmleCaE39Flq_e5FHhOqygvUY3IJ8u5p03qtonNPP6w/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>31/05</th>
                                <td>Useful Words IV</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1CBAbvCbeScCd44mQ4cEzYRPaQcDUbKtTUWQQrkiagz8/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QC5GLOXQQ">&#128221;</a></td>
                                </tr>
                                <tr>
                                <th>01/06</th>
                                <td>Useful Words IV part 2</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1CBAbvCbeScCd44mQ4cEzYRPaQcDUbKtTUWQQrkiagz8/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QC5GLOXQQ">&#128221;</a></td>
                                </tr>
                                <tr>
                                <th>02/06</th>
                                <td>Commonly Used Adjectives</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1rsgZ2gOZ5RmPaJ5Lq4aYH6v1uWZa5COGHRNljEMDNus/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>07/06</th>
                                <td>Ordinal Numbers</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1qDvXsP8sNDmfT6jD-bpfVmwibEybKYzhnP4VJfLYGw0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>08/06</th>
                                <td>Ordinal Numbers part 2</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1qDvXsP8sNDmfT6jD-bpfVmwibEybKYzhnP4VJfLYGw0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>09/06</th>
                                <td>LinkedIn Profile </td>
                                <td><a class="more" href="https://br.linkedin.com/">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>14/06</th>
                                <td>Mistakes</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1QVc-lsoTGUeLQ_6I8t3JsNUfEZNQnGbqT9rZLxUf5bw/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>15/06</th>
                                <td>Bruno Mars</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>21/06</th>
                                <td>IELTS</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>22/06</th>
                                <td>Traveling</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>23/06</th>
                                <td>English-speaking countries</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>28/06</th>
                                <td>Dating</td>
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