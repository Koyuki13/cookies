<?php
require 'inc/head.php';

$_SESSION = [];
session_destroy();
unset($_SESSION);
header('Location: index.php');