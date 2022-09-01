<?php
define('HOST', '127.0.0.1');
define('USUARIO', 'your username');
define('SENHA', 'your password');
define('DB', 'your database');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não conectado');