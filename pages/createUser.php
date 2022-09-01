<?php
session_start();
?>
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inserir Usuário - Teacher Leo</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="../css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/createUser.js"></script>
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey">Seus Dados:</h3>
                    <h3 class="title has-text-grey"><a href="https://youtube.com/canaltioficial" target="_blank">Teacher Leo</a></h3>
                    <?php
                    if(isset($_SESSION['create_user'])): 
                    ?>
                    <div class="notification is-success">
                      <p>Sucesso ao inserir</p>
                    </div>
                    <?php
                    elseif(isset($_SESSION['create_user'])  && $_SESSION['create_user'] == false):
                    ?> 
                        <div class="notification is-danger">
                      <p>Erro ao inserir</p>
                    </div>
                        <?php
                    endif;
                    unset($_SESSION['create_user']);
                    ?>
                    <div class="box">
                        <div>
                            <div class="field">
                                <div class="control">
                                    <input id="email" name="usuario" name="text" class="input is-large" placeholder="Seu email" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control"> 
                                    <input id="name" name="name" name="text" class="input is-large" placeholder="Seu primeiro nome" autofocus="">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input id="password" name="senha" class="input is-large" type="password" placeholder="Sua senha">
                                </div>
                            </div>
                            <button type="submit" onclick="createUser()" class="button is-block is-link is-large is-fullwidth">Enviar</button>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>