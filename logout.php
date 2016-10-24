<?php
 session_start();
 unset($_SESSION['id']);
 unset($_SESSION['status']);
 header('Location:index.php');
?>
