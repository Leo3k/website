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
                            <a class="navbar-bran" href="adilson.php">
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
                                        <a class="page-scroll" href="adilson.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="adilson_class.php">All classes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="adilson_pay.php">Pagamento</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="logout.php">Sair</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                               <p><a class="main-btn" data-scroll-nav="0" href="adilson.php"><?php echo $_SESSION['usuario']; ?></a></p>
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
                                <th>05/01</th>
                                <td>Where Things Are I</td>
                                <td><a class="more" href="assets/classes/3-3.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_a.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>05/01</th>
                                <td>Where Things Are II</td>
                                <td><a class="more" href="assets/classes/3-3.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_right_adilson.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>12/01</th>
                                <td>Numbers and Statistics</td>
                                <td><a class="more" href="assets/classes/3-4.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_numb_adilson.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>12/01</th>
                                <td>Times and Dates</td>
                                <td><a class="more" href="assets/classes/3-5.pdf">&#128196;</a></td>
                                <td><a class="more" href="q_time_3-5.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>19/01</th>
                                <td>Times and Dates 2</td>
                                <td><a class="more" href="assets/classes/3-5.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QA3JPT5K7">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>19/01</th>
                                <td>Contact Details</td>
                                <td><a class="more" href="assets/classes/3-6.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QSQLDZ3P8">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>26/01</th>
                                <td>Contact Details 2</td>
                                <td><a class="more" href="assets/classes/3-6.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QSQLDZ3P8">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>26/01</th>
                                <td>Spelling</td>
                                <td><a class="more" href="assets/classes/3-6.pdf">&#128196;</a></td>
                                <td><a class="more" href="q_week_1-14.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>02/02</th>
                                <td>Talking about jobs</td>
                                <td><a class="more" href="assets/classes/3-7.pdf">&#128196;</a></td>
                                <td><a class="more" href="q_jobs_3-7.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>02/02</th>
                                <td>Talking about jobs II</td>
                                <td><a class="more" href="assets/classes/3-7.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QU52VTO14">&#9745;</a></td>
                                </tr><tr>
                                <th>09/02</th>
                                <td>Talking about jobs III</td>
                                <td><a class="more" href="assets/classes/3-7.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QV1VFWOMJ">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>09/02</th>
                                <td>Talking about jobs IV</td>
                                <td><a class="more" href="assets/classes/3-7.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QV1VFWOMJ">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>15/02</th>
                                <td>Routine and Free Time</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-8.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QP76KQTBW">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>21/02</th>
                                <td>Routine and Free Time II</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-8.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz.biz/quizz-760331.html">&#9745;</a></td>
                                </tr> 
                                <tr>
                                <th>23/02</th>
                                <td>Routine and Free Time III</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-8.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz.biz/quizz-760331.html">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>23/02</th>
                                <td>Body, hair, and appearance</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-10.pdf">&#128196;</a></td>
                                <td><a class="more" href="http://take.quiz-maker.com/QJVBDILV9">&#9745;</a></td>
                                </tr> 
                                <tr>
                                <th>02/03</th>
                                <td>Describing people</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-11.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_ops.php">&#9745;</a></td>
                                </tr> 
                                <tr>
                                <th>02/03</th>
                                <td>Clothes</td>
                                <td><a class="more" target="_blank" href="assets/classes/3-12.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_ops.php">&#9745;</a></td>
                                </tr>  <!-- Tirou uma semana de férias -->
                                <tr>
                                <th>16/03</th>
                                <td>Song - If I Were a Boy by Beyoncé</td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=x2GVLf1FPSw">&#x1F3B5;</a></td>
                                <td></td>
                                </tr> 
                                <tr>
                                <th>16/03</th>
                                <td>Song - If I Were a Boy by Beyoncé</td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=x2GVLf1FPSw">&#x1F3B5;</a></td>
                                <td></td>
                                </tr> 
                                <tr>
                                <th>21/03</th>
                                <td>Simple Past</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1zNdw87YG5drUhx1fqr_VdYNYf6Pv8Y4WVVdbedUl_1k/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QC5K0XXCQ"> &#128221;</a></td>
                                </tr> 
                                <tr>
                                <th>23/03</th>
                                <td>Tell me about...</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/17GB1C8M1SNl75kNZFQfcZ-28efpaj9CU96oxaVuzw0o/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>23/03</th>
                                <td>Tell me about...</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/17GB1C8M1SNl75kNZFQfcZ-28efpaj9CU96oxaVuzw0o/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>28/03</th>
                                <td>Useful words</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1WpWki33PiifVPe-FiqBtB7PcRkRv18Xx6NKhDkw-mNo/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>30/03</th>
                                <td>Useful words</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1WpWki33PiifVPe-FiqBtB7PcRkRv18Xx6NKhDkw-mNo/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QG2G3FV6L"> &#128221;</a></td>
                                </tr>
                                <tr>
                                <th>30/03</th>
                                <td>Emily in Paris</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1yQL_NKuEEQq3CJkFExHrhF64ayJiJD4tUUzqrbB07Lo/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>06/04</th>
                                <td>Listening</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1ckQuwn7h-abSRyspID-Pk08BQMoUEXC2w3AZHz_Pd_o/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>06/04</th>
                                <td>Listening</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1ckQuwn7h-abSRyspID-Pk08BQMoUEXC2w3AZHz_Pd_o/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>13/04</th>
                                <td>Prepositions</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1ZVdy4A2_vGhVtX8aFFGJLpq143xZgFC3q2_woQYNR0M/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>13/04</th>
                                <td>Prepositions</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1ZVdy4A2_vGhVtX8aFFGJLpq143xZgFC3q2_woQYNR0M/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>20/04</th>
                                <td>Vocabulary</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1LXlWJDvpRNq_Q28anHNeszYfFEeFjVwhHVvIJEl2NIk/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="http://take.quiz-maker.com/QBZB1SJ5H">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>20/04</th>
                                <td>Vocabulary</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1LXlWJDvpRNq_Q28anHNeszYfFEeFjVwhHVvIJEl2NIk/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="http://take.quiz-maker.com/QBZB1SJ5H">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>27/04</th>
                                <td>Song - Somewhere Over The Rainbow</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1D72-_rukCJjU3sbdHAWh4sDOC--0o-lFM1SBlbQNMsQ/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=V1bFr2SWP1I">&#x1F3B5;</a></td>
                                </tr> 
                                <tr>
                                <th>27/04</th>
                                <td>Song - Somewhere Over The Rainbow</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1D72-_rukCJjU3sbdHAWh4sDOC--0o-lFM1SBlbQNMsQ/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=V1bFr2SWP1I">&#x1F3B5;</a></td>
                                </tr> 
                                <tr>
                                <th>04/05</th>
                                <td>The Guide Dog</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/17_hF53vboFcHMFSgo39XWvssZi_28WloXql46NbYhW4/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href=""></a></td>
                                </tr>
                                <tr>
                                <th>04/05</th>
                                <td>The Guide Dog</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/17_hF53vboFcHMFSgo39XWvssZi_28WloXql46NbYhW4/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href=""></a></td>
                                </tr>
                                <tr>
                                <th>11/05</th>
                                <td>Tongue Twisters</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1YWwJy9UQ6sPKUzl685WxkQEeQI2z2bQ3i72y7mhkaDE/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href=""></a></td>
                                </tr>
                                <tr>
                                <th>11/05</th>
                                <td>Tongue Twisters</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1YWwJy9UQ6sPKUzl685WxkQEeQI2z2bQ3i72y7mhkaDE/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href=""></a></td>
                                </tr>
                                <tr>
                                <th>18/05</th>
                                <td>Useful Words II</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1cm_RaB8bdV3BH-JuHmJ7KERvMsU3nov0hByXWJIlHnE/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>18/05</th>
                                <td>Useful Words II</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1cm_RaB8bdV3BH-JuHmJ7KERvMsU3nov0hByXWJIlHnE/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>25/05</th>
                                <td>Useful Words III</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1gmleCaE39Flq_e5FHhOqygvUY3IJ8u5p03qtonNPP6w/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>25/05</th>
                                <td>Useful Words III</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1gmleCaE39Flq_e5FHhOqygvUY3IJ8u5p03qtonNPP6w/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>01/06</th>
                                <td>Commonly Used Adjectives</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1rsgZ2gOZ5RmPaJ5Lq4aYH6v1uWZa5COGHRNljEMDNus/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>01/06</th>
                                <td>Commonly Used Adjectives</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1rsgZ2gOZ5RmPaJ5Lq4aYH6v1uWZa5COGHRNljEMDNus/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>08/06</th>
                                <td>Very</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/19sYQHiSNW6hm744I_0pZPAM4Zt6uN0zeQ2bihz-3138/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/Q09RIEABO">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>08/06</th>
                                <td>Many and Much</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1NoK_MKU2gk3UpCQWk3fvOOhfryrwDIhZWPz0lrJ8Xxk/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>15/06</th>
                                <td>The Greatest Showman Soundtrack</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>15/06</th>
                                <td>The Greatest Showman Soundtrack</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>22/06</th>
                                <td>English-speaking countries</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>22/06</th>
                                <td>English-speaking countries</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>29/06</th>
                                <td>WOULD</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>29/06</th>
                                <td>WOULD</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>06/07</th>
                                <td>do - did</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>06/07</th>
                                <td>past</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>20/07</th>
                                <td>present perfect</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>20/07</th>
                                <td>present perfect</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>27/07</th>
                                <td>formal x informal</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>27/07</th>
                                <td>formal - informal</td>
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