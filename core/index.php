<?php
session_start();
require_once 'Connection.php';
require_once 'Auth.php';
require_once 'constants.php';
require_once 'functions.php';


$conn = new Connection();
$conn=$conn->getConnection(DB_HOST, DB_NAME, DB_USER, DB_PASS);
$auth = new Auth($conn);