<?php
session_start('student');
session_destroy();
header('location:login.php');
?>
