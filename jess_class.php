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
                            <a class="navbar-bran" href="jess.php">
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
                                        <a class="page-scroll" href="jess.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="jess_class.php">All classes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="jess_pay.php">Payment</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="logout.php">Sair</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                               <p><a class="main-btn" data-scroll-nav="0" href="jess.php"><?php echo $_SESSION['usuario']; ?></a></p>
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
                                <th>04/01</th>
                                <td>Telling the Time</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-11.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_time.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>06/01</th>
                                <td>Vocabulary</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-12.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_vocab_jess.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>11/01</th>
                                <td>Describing your day</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-13.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_present_jess.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>13/01</th>
                                <td>Describing your day II</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-13.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_simplepresent_jess.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>18/01</th>
                                <td>Describing your week</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-14.pdf">&#128196;</a></td>
                                <td><a class="more" href="q_week_1-14.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>20/01</th>
                                <td>Describing your week II</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-14.pdf">&#128196;</a></td>
                                <td><a class="more" href="q_once_1-14.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>25/01</th>
                                <td>Negatives with to be</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-15.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/Q1M0RWH5F">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>25/01</th>
                                <td>Negatives with to be II</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-15.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QEZ92ONXP">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>01/02</th>
                                <td>More Negatives</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-16.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QL32XW3WC">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>03/02</th>
                                <td>Creating a story</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-16.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QWMYVX4AK">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>08/02</th>
                                <td>Simple Questions</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-17.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QG2XKFAAL">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>10/02</th>
                                <td>Simple Questions II</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-17.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QXK41D2VG">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>15/02</th>
                                <td style="color:crimson;">Ausente</td>
                                <td><a class="more" target="_blank" href=""></a></td>
                                <td><a class="more" href=""></a></td>
                                </tr>
                                <tr>
                                <th>17/02</th>
                                <td>Answering Questions</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-18.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.english-4u.de/en/grammar-quizzes/questions-do-does.htm">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>22/02</th>
                                <td>Asking Questions</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-19.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.learnenglishfeelgood.com/esl-who-when-where-what2.html">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>24/02</th>
                                <td>Question words</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-19.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://agendaweb.org/exercises/grammar/questions/wh-questions">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>01/03</th>
                                <td>Question words II</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-19.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://agendaweb.org/exercises/grammar/questions/wh-questions">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>04/03</th>
                                <td>Around Town</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-20.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/Q31HF3KPM">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>08/03</th>
                                <td>Around Town part 2</td>
                                <td><a class="more" target="_blank" href="assets/classes/1-20.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/Q31HF3KPM">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>15/03</th>
                                <td>Verbs in the past</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1U_V7ihgTK3VSnUmOwM6gCC_oZ2KrZxttATrv_67pDy0/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="quiz_ops.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>25/03</th>
                                <td>Simple Past</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1zNdw87YG5drUhx1fqr_VdYNYf6Pv8Y4WVVdbedUl_1k/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QC5K0XXCQ"> &#128221;</a></td>
                                </tr>
                                <tr>
                                <th>29/03</th>
                                <td>Common Verbs</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1iyyp15h-WfCO9vJYuljB6FXXkKg3j8KVTxyumBDtaDU/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="quiz_ops.php"> &#128221;</a></td>
                                </tr>
                                <tr>
                                <th>05/04</th>
                                <td>Verb Tenses</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1B3-SYvEZCPyEQQzXdNz62Gpy5ObhzJ9vVfeCaAUuYTo/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>12/04</th>
                                <td style="color:crimson;">Ausente</td>
                                <td><a class="more" target="_blank" href=""></a></td>
                                <td><a class="more" href=""></a></td>
                                </tr>
                                <tr>
                                <th>19/04</th>
                                <td>Prepositions</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1ZVdy4A2_vGhVtX8aFFGJLpq143xZgFC3q2_woQYNR0M/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>26/04</th>
                                <td>Some - any - no</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1wJ5a-qYH1L6tlF0tKZe-oiC1vkhZyk2diyKAk15D6Ek/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QWYGVXO3K">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>10/05</th>
                                <td>Vocabulary Part 1</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1LXlWJDvpRNq_Q28anHNeszYfFEeFjVwhHVvIJEl2NIk/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="http://take.quiz-maker.com/QBZB1SJ5H">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>18/05</th>
                                <td>Creating a Story</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1jU6RB4wp1COlFoGph5Zm8SdsycUlDqsPdkkt_A6r10A/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>24/05</th>
                                <td>Very</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/19sYQHiSNW6hm744I_0pZPAM4Zt6uN0zeQ2bihz-3138/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/Q09RIEABO">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>31/05</th>
                                <td>Many and Much</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1NoK_MKU2gk3UpCQWk3fvOOhfryrwDIhZWPz0lrJ8Xxk/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>14/06</th>
                                <td>Ordinal Numbers</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1qDvXsP8sNDmfT6jD-bpfVmwibEybKYzhnP4VJfLYGw0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>21/06</th>
                                <td>Mary's Saturday</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>28/06</th>
                                <td>Body Parts</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1uGqNffCHb8_SZaODhtA6mBJoCL8JK0X_RFahBpUypi0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>05/07</th>
                                <td>Do x Did</td>
                                <td><a class="more" href="https://docs.google.com/document/d/18E2Gfk2iB848DUKm7ZNE8gJ6okXw5gzLiF9Lh_83Xv0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>19/07</th>
                                <td>WANT - HAVE - NEED</td>
                                <td><a class="more" href="https://docs.google.com/document/d/18E2Gfk2iB848DUKm7ZNE8gJ6okXw5gzLiF9Lh_83Xv0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>26/07</th>
                                <td>slang</td>
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