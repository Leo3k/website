<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, trim(ucfirst(strtolower($_POST['usuario']))));    
$senha = (mysqli_real_escape_string($conexao, $_POST['senha']));

$query = "select id, name from students where name = '{$usuario}' and password = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


if($row >= 1) {
  $_SESSION['usuario'] = $usuario;         //above
  $_SESSION['username'] = $_POST['usuario'];   //below   
//header('Location: home.php');
switch ($usuario) {
  case 'Guilherme':
      header('Location: gui.php');
      
    break;
  case 'Allan':
      header('Location: allan.php');
      
    break;
  case 'Alex':
      header('Location: alex.php');
      
    break;
  case "Tamires":
      header('Location: tamires.php');
      
    break;
  case "Jessica":
      header('Location: jess.php');
      
    break;
  case "Leo":
      header('Location: teacher.php');
      
    break;
  case "Tadeu":
      header('Location: tadeu.php');
      
    break;
  case "Kainan":
      header('Location: kainan.php');
      
    break;
  case "Romulo":
    header('Location: romulo.php');
    
    break;
  case "Cesar":
      header('Location: cesar.php');
      
    break;
  case "Edicarlos":
      header('Location: edi.php');
      
    break;
  case "Adilson":
      header('Location: adilson.php');
      
    break;
  case "Eli":
      header('Location: eli.php');
      
    break;
  case "Allife":
      header('Location: allife.php');
      
    break;
  case "Gi":
      header('Location: gi.php');
      
    break;
  case "Raoni":
      header('Location: raoni.php');
      
    break;
  case "Vini":
      header('Location: vini.php');
      
    break;
  default:
      header('Location: index.php');
  exit();
}
 exit();
} else {
  $_SESSION['nao_autenticado'] = true;
  header('Location: index.php');
  exit();
}

//if($row==1){//check if found username and password
 //   if($row['usuario_id'] == 1){
//        header("Location: home.php");
 //   }elseif($row['usuario'] == "www"){
//        header("'Location: index.php'");
 //   }

//}


