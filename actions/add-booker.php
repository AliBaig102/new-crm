<?php
require_once '../core/index.php';
global $auth;

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $area = $_POST['area'];
    $result = $auth->register($name, $email, $phone, $area, $password);
    if ($result['status']==='success') {
        redirectWithSuccess('add-booker.php',$result['message']);
    }else{
        redirectWithError('add-booker.php',$result['message']);
    }
}