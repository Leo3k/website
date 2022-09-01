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

    <script src="display.js"></script>
    
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
                            <a class="navbar-bran" href="eli.php">
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
                                        <a class="page-scroll" href="eli.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="eli_class.php">All classes</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="eli_pay.php">Pagamento</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="logout.php">Sair</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse -->
                            
                            <div class="navbar-btn d-none d-sm-inline-block">
                               <p><a class="main-btn" data-scroll-nav="0" href="eli.php"><?php echo $_SESSION['usuario']; ?></a></p>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
        
        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8" >
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s" style="color:midnightblue"><?php echo $_SESSION['usuario']; ?></h3>             
        <div class="container">
                        <h3 class="title" style="color:aliceblue">Acompanhe suas aulas.</h3>
                        <br><br>
                        <div class="container"> <!-- when an option is selected, redirect to the value !--> 
                            <button type="button" class="btn btn-success" onclick="displayLessons('jun')">June</button>
                            <button type="button" class="btn btn-success" onclick="displayLessons('may')">May</button> 
                            <button type="button" class="btn btn-success" onclick="displayLessons('apr')">April</button>
                            <button type="button" class="btn btn-success" onclick="displayLessons('mar')">March</button>
                            <button type="button" class="btn btn-success" onclick="displayLessons('feb')">February</button>
                            <button type="button" class="btn btn-success" onclick="displayLessons('jan')">January</button>
                        
                        <br><br>
                        <table id="jan" class="table table-bordered table-hover" style="background-color: white; width:400px; margin:auto; margin-top:40px;">
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
                                <th>10/01</th>
                                <td>Clothes</td>
                                <td><a class="more" href="assets/classes/3-12.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_clothes_eli.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>11/01</th>
                                <td>What I'm wearing</td>
                                <td><a class="more" href="assets/classes/3-13.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_wear_eli.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>12/01</th>
                                <td>Rooms and Furniture</td>
                                <td><a class="more" href="assets/classes/3-14.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_house_eli.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>17/01</th>
                                <td>Daily Routine</td>
                                <td><a class="more" href="assets/classes/3-15.pdf">&#128196;</a></td>
                                <td><a class="more" href="quiz_routine_eli.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>18/01</th>
                                <td>Daily Routine Part 2</td>
                                <td><a class="more" href="assets/classes/3-15.pdf">&#128196;</a></td>
                                <td><a class="more" href="q_chores_3-15.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>19/01</th>
                                <td>Phrasal Verbs</td>
                                <td><a class="more" href="assets/classes/3-16.pdf">&#128196;</a></td>
                                <td><a class="more" href="q_phrasal_3-16.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>24/01</th>
                                <td>Phrasal Verbs - Part 2</td>
                                <td><a class="more" href="assets/classes/3-16.pdf">&#128196;</a></td>
                                <td><a class="more" href="q_phrasal2_3-16.php">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>25/01</th>
                                <td>Phrasal Verbs - Part 3</td>
                                <td><a class="more" href="assets/classes/3-16.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QYEH73KXM">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>26/01</th>
                                <td>Comparing Places</td>
                                <td><a class="more" href="assets/classes/3-17.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/Q01VG8OMJ">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>31/01</th>
                                <td>Likes and dislikes</td>
                                <td><a class="more" href="assets/classes/3-18.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QYAH03KUM">&#9745;</a></td>
                                </tr>
                            </tbody>
                        </table>
                        <table id="feb" class="table table-bordered table-hover" style="background-color: white; width:400px; margin:auto; margin-top:40px;">
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
                                <th>01/02</th>
                                <td>Likes and dislikes II</td>
                                <td><a class="more" href="assets/classes/3-18.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/QYA26TJ83">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>02/02</th>
                                <td>Family</td>
                                <td><a class="more" href="assets/classes/3-19.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/Q09RMIP2O">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>07/02</th>
                                <td>Early years</td>
                                <td><a class="more" href="assets/classes/3-20.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.quiz-maker.com/Q052NY9K4">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>08/02</th>
                                <td>Early years</td>
                                <td><a class="more" href="assets/classes/3-20.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QBGCSJ79A">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>09/02</th>
                                <td>Education</td>
                                <td><a class="more" href="assets/classes/3-21.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QXI41DVVG">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>14/02</th>
                                <td>Changing Meaning</td>
                                <td><a class="more" href="assets/classes/3-22.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.ecenglish.com/learnenglish/lessons/un-prefix">&#9745;</a><a class="more" href="https://www.ecenglish.com/learnenglish/lessons/using-prefix-re">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>15/02</th>
                                <td>Transportation and travel</td>
                                <td><a class="more" href="assets/classes/3-23.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QVB1P7U72">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>16/02</th>
                                <td>Places I have been</td>
                                <td><a class="more" href="assets/classes/3-24.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://grammar.hello.ef.com/exercise/present-perfect-vs-simple-past?_ga=2.233705374.1208201202.1645442097-2019555943.1643308515">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>21/02</th>
                                <td>Places I have been II</td>
                                <td><a class="more" href="assets/classes/3-24.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://www.perfect-english-grammar.com/past-simple-present-perfect-1.html">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>22/02</th>
                                <td>Present Perfect</td>
                                <td><a class="more" href="https://www.perfect-english-grammar.com/present-perfect-or-past-simple.html">&#128196;</a></td>
                                <td><a class="more" href="https://www.perfect-english-grammar.com/past-simple-present-perfect-1.html">&#9745;</a></td>
                                </tr>
                                <tr>
                                <th>23/02</th>
                                <td>Things I have done</td>
                                <td><a class="more" href="assets/classes/3-25Eli.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QK2B5F75T">&#9745;</a></td>
                                </tr> 
                                <tr>
                                <th>28/02</th>
                                <td>Song - abcdefu by Gayle</td>
                                <td><a class="more" href="">&#128196;</a></td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=NaFd8ucHLuo">&#x1F3B5;</a></td>
                                </tr> 
                            </tbody>
                        </table>
                        <table id="mar" class="table table-bordered table-hover" style="background-color: white; width:400px; margin:auto; margin-top:40px;">
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
                                <th>01/03</th>
                                <td>Things I have done II</td>
                                <td><a class="more" href="assets/classes/3-25Eli.pdf">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QK2B5F75T">&#9745;</a></td>
                                </tr> <!-- Já fizemos 32 e 35 -->
                                <tr>
                                <th>02/03</th>
                                <td>Kitchen vocabulary</td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=tTw2-aHcUEA">&#127916;</a></td>
                                <td></td>
                                </tr>
                                <!-- Tirou uma semana de férias -->
                                <tr>
                                <th>14/03</th>
                                <td>Song - With You by Chris Brown</td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=nmjdaBaZe8Y">&#x1F3B5;</a></td>
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
                                <td></td>
                                </tr>
                                <tr>
                                <th>21/03</th>
                                <td>Friends: Monica Isn't a Good Masseuse</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1-WSchBoE6brsWNA11wGqjhYfto66joxJLFjGmq2lnP0/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" target="_blank" href="https://www.youtube.com/watch?v=BNRItz1Ngt0">&#127916;</a></td>
                                </tr>
                                <tr>
                                <th>22/03</th>
                                <td>Catch Me If You Can scene</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/16UcqEEBvg6P7NGf0Kji2nT3z-Twt1P7HEqRJRZ858Xg/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" target="_blank" href="https://www.youtube.com/watch?v=ppunAo8ckBc">&#127916;</a></td>
                                </tr>
                                <tr>
                                <th>23/03</th>
                                <td>Verbs in the past</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1U_V7ihgTK3VSnUmOwM6gCC_oZ2KrZxttATrv_67pDy0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>28/03</th>
                                <td>Comparison</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1i3jWnhdcxysIC4P_4Jy5WBT9xhOmS2fnDLDLj1kP2K8/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>29/03</th>
                                <td>Superlatives</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1rbJW6f0n8KLS6B5Wh8u4WEwhVZYH2OLR-ho8VlK2CJo/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr> 
                                <tr>
                                <th>30/03</th>
                                <td>Cartoons</td>
                                <td><a class="more" target="_blank" href="https://docs.google.com/presentation/d/1k2WPP_JV05s2MM4OR6QRw20Oh3eHJFYfAlYQvUlRS80/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                            </tbody>
                        </table>
                        <table id="apr" class="table table-bordered table-hover" style="background-color: white; width:400px; margin:auto; margin-top:40px;">
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
                                <th>04/04</th>
                                <td>FUTURE</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/15BhgMFDGNgQRVGdgyK05FN-VRDcx30j7bI-K0R7lKJ0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>05/04</th>
                                <td style="color:crimson;">Ausente</td>
                                <td><a class="more" target="_blank" href="">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>06/04</th>
                                <td>FUTURE 2</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/153TBmkBRoytD8bz_B4gjEFBpIXhyCD7o6EslJn77NBU/edit?usp=sharing"><img src="https://i.ibb.co/3swb9h8/file-type-pdf-icon-130274.png" alt="pdf" height="25px" width="25px"></a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>11/04</th>
                                <td>FUTURE 3</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1dsUiMWQfC7Animz84QDjyr52hcFw-_S1yrEvIjetAjY/edit?usp=sharing"><img src="https://i.ibb.co/3swb9h8/file-type-pdf-icon-130274.png" alt="pdf" height="25px" width="25px"></a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>12/04</th>
                                <td>There is and There are</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1pVaOFu4eUQLPnpMHVK1H-SIhWapWDW5TT20ANCqJGRA/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>25/04</th>
                                <td>Some - any - no</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1wJ5a-qYH1L6tlF0tKZe-oiC1vkhZyk2diyKAk15D6Ek/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/QWYGVXO3K">&#9745;</a></td>
                                </tr> 
                                <tr>
                                <th>26/04</th>
                                <td>Somebody - anything - nowhere</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1VfJdEmzXnBYu5pS6O_Uq_88pPRdHtbemnboW33nZi04/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>27/04</th>
                                <td>Somebody - anything - nowhere</td>
                                <td><a class="more" href=" https://docs.google.com/presentation/d/15KVVH-kU-IXZb86ZCT98haAd2nyNo8kNsocM97hPFPA/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://test-english.com/grammar-points/a2/something-anything-nothing-etc/">&#9745;</a></td> 
                                </tr> 
                            </tbody>
                        </table>
                        <table id="may" class="table table-bordered table-hover" style="background-color: white; width:400px; margin:auto; margin-top:40px;">
                            <thead style="margin:auto;">
                                <tr>
                                <th>Dia</th>
                                <th>Tema</th>
                                <th>Arquivo</th>
                                <th>Exercícios</th>
                                </tr>
                            </thead>
                            <tbody style="margin:auto;">
                                <tr>
                                <th>03/05</th>
                                <td>Song - Somewhere Over The Rainbow</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1D72-_rukCJjU3sbdHAWh4sDOC--0o-lFM1SBlbQNMsQ/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://www.youtube.com/watch?v=V1bFr2SWP1I">&#x1F3B5;</a></td>
                                </tr>
                                <tr>
                                <th>04/05</th>
                                <td>Prepositions</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1ZVdy4A2_vGhVtX8aFFGJLpq143xZgFC3q2_woQYNR0M/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>09/05</th>
                                <td>Simple Past</td>
                                <td><a class="more" href="https://learnenglishteens.britishcouncil.org/grammar/a1-a2-grammar/past-simple-regular-verbs">&#128196;</a></td>
                                <td><a class="more" href="http://www.learnenglish-online.com/grammar/readings/simplepastreading.html">&#128196;</a></td>
                                </tr>
                                <tr>
                                <th>10/05</th>
                                <td>Simple Past Review</td>
                                <td><a class="more" href="http://www.learnenglish-online.com/grammar/tests/simplepast.html">&#128196;</a>&nbsp;&nbsp;<a class="more" href="http://www.learnenglish-online.com/grammar/tests/simplepastquestions.html">&#128196;</a></td>
                                <td><a class="more" href="http://www.learnenglish-online.com/grammar/tests/simplepast2.html">&#128196;</a>&nbsp;&nbsp;<a class="more" href="http://www.learnenglish-online.com/grammar/tests/simplepastquestions2.html">&#128196;</a></td>
                                </tr>
                                <tr>
                                <th>11/05</th>
                                <td>Practicing the Prepositions</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1WkAIjMx4nI3-MC9BdvcEMEi9zZN64kk8-idDeHisSIA/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>16/05</th>
                                <td>Creating a Story</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1jU6RB4wp1COlFoGph5Zm8SdsycUlDqsPdkkt_A6r10A/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>17/05</th>
                                <td>Writing a Letter</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/17NeekVH6LoiWphONdJDugubEChs29UXn2BcbJSPINKo/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>18/05</th>
                                <td>Useful Words II</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1cm_RaB8bdV3BH-JuHmJ7KERvMsU3nov0hByXWJIlHnE/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>31/05</th>
                                <td>Very</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/19sYQHiSNW6hm744I_0pZPAM4Zt6uN0zeQ2bihz-3138/edit?usp=sharing">&#128196;</a></td>
                                <td><a class="more" href="https://take.quiz-maker.com/Q09RIEABO">&#9745;</a></td> 
                                </tr>
                            </tbody>
                        </table>
                        <table id="jun" class="table table-bordered table-hover" style="background-color: white; width:400px; margin:auto; margin-top:40px;">
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
                                <th>01/06</th>
                                <td>Many and Much</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1NoK_MKU2gk3UpCQWk3fvOOhfryrwDIhZWPz0lrJ8Xxk/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>06/06</th>
                                <td>Ordinal Numbers</td>
                                <td><a class="more" href="https://docs.google.com/presentation/d/1qDvXsP8sNDmfT6jD-bpfVmwibEybKYzhnP4VJfLYGw0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>07/06</th>
                                <td>Mistakes part 1</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1QVc-lsoTGUeLQ_6I8t3JsNUfEZNQnGbqT9rZLxUf5bw/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>08/06</th>
                                <td>Mistakes part 2</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1QVc-lsoTGUeLQ_6I8t3JsNUfEZNQnGbqT9rZLxUf5bw/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>13/06</th>
                                <td>Modal Verbs</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>14/06</th>
                                <td>Taylor Swift</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>15/06</th>
                                <td>IELTS</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>20/06</th>
                                <td>Mary's Saturday</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>21/06</th>
                                <td>Traveling</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>22/06</th>
                                <td>Body Parts</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>27/06</th>
                                <td>Dating</td>
                                <td><a class="more" href="https://docs.google.com/document/d/19x0LVD6kyYrTTxo5mg9Gl9HfzPq8jH9FUwyyJtsa1eY/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>28/06</th>
                                <td>Present Perfect</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1Cf3L5Iq-yyhMTw5d_h_BnQNz0zMXF9aoO8HvpSm5OaY/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>29/06</th>
                                <td>FOOD</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1T3VIb_p1L_P0t2Xi_wvB1ak3E1ok09KHBRNLckrURGY/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>04/07</th>
                                <td>WOULD</td>
                                <td><a class="more" href="https://docs.google.com/document/d/1Bl4FCZZgyTVOt0d7Fiaxp4WXB4YOS9I1gr5W5FTxqFc/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>05/07</th>
                                <td>Do x Did</td>
                                <td><a class="more" href="https://docs.google.com/document/d/18E2Gfk2iB848DUKm7ZNE8gJ6okXw5gzLiF9Lh_83Xv0/edit?usp=sharing">&#128196;</a></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>06/07</th>
                                <td>MOOD</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>18/07</th>
                                <td>Difficult Words</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>25/07</th>
                                <td>want - have - need</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>26/07</th>
                                <td>slang</td>
                                <td></td>
                                <td></td>
                                </tr>
                                <tr>
                                <th>27/07</th>
                                <td>Creativity</td>
                                <td></td>
                                <td></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
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