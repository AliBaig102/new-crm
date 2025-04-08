<?php
require_once '../core/index.php';
global $auth;

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $result=$auth->login($email, $password);
    printPre($result);
    if ($result['status']=='success') {
        printPre($result['message']);
        redirectWithSuccess('index.php',"Login Successful");
    }else{
        redirectWithError('login.php',$result['message']);
    }
}

if (isset($_GET['logout'])) {
    $result= $auth->logout();
    if ($result['status']=='success') {
        redirectWithSuccess('login.php', $result['message']);
    }
}