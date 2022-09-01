<?php
$name = $_POST["name"];
$email = $_POST["usuario"];
$password = $_POST["senha"];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1:8000/api/student',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "name" : leo333,  
    "email" : leo@leo.com,
    "password" : leoleo 
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));
session_start();

$response = json_decode(curl_exec($curl));

curl_close($curl);

if ($response->status==201) {
    $_SESSION['create_user'] = true;
    header('Location: /login/pages/createUser.php');
    exit(); 
} else {
    $_SESSION['create_user'] = false;
    header('Location: /login/pages/createUser.php');
    exit();
}


