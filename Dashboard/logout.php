<?php
session_start();

if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit();
}

session_destroy();

header("Location: ../login.php");
exit();
?>
