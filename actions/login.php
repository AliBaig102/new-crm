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