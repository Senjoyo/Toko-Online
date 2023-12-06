<?php
    session_start();
    unset($_SESSION['cart'][$_GET['Id']]);
    header('location: cart.php');
?>
