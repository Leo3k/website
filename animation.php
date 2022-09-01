<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teacher Leo - Portal do Aluno</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <style>
            #modal {
                background-color:beige;
                border-radius: 4%;
                animation-name: slide;
                animation-duration: 3s;
                padding: 15px;
                border: solid 1px red;
            }

            @keyframes slide {
                from {
                    opacity: 0;
                    transform: translateY(-50px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            #load {
                width: 30px;
                height: 30px;
                border: 5px solid red;
                border-radius: 50%;
                border-top-color: transparent;
                animation: load 0.6s linear infinite;
                margin: auto;
                display: none;
            }

            #load.animar {display: block;}

            @keyframes load {
                to {
                    transform: rotate(360deg);
                }
            }

    </style>
   
</head>

<body>
        <div class="hero-body">
            <div class="container has-text-centered">
                <div id="modal" class="column is-4 is-offset-4">
                    <img src="assets/images/lg3.png" alt="Logo"><br><br>
                    <h2 id="countdown" class="title has-text-grey">Portal do Aluno</h3>
                            
                            <button id="ativar" onclick="openWin()" class="button is-block is-link is-large is-fullwidth">Let me in</button>
                </div>
            </div> 
        </div> <div id="load"></div>
    <script>
            ativar.addEventListener('click', () => {
                load.classList.toggle('animar')
             })

             function openWin() {
                setTimeout("window.open('index.php','_self')", 6000);
             

            var timeleft = 5;
            var downloadTimer = setInterval(function(){
            if(timeleft <= 0){
            clearInterval(downloadTimer);
            document.getElementById("countdown").innerHTML = "WELCOME";
            } else {
            document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
            }
            timeleft -= 1;
            }, 1000);

        }

    </script>
</body>

</html>