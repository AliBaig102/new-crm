<?php
require_once '../core/index.php';
global $auth;
$action = $_GET['action'];
if ($action == 'create' && isset($_POST['name'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $area = $_POST['area'];
    $result = $auth->register($name, $email, $phone, $area, $password);
    if ($result['status'] === 'success') {
        redirectWithSuccess('add-booker.php', $result['message']);
    } else {
        redirectWithError('add-booker.php', $result['message']);
    }
} elseif ($action == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $auth->deleteBooker($id);
    if ($result['status'] === 'success') {
        redirectWithSuccess('all-booker.php', $result['message']);
    } else {
        redirectWithError('all-booker.php', $result['message']);
    }
}