<?php
session_start();
session_destroy();
header('Location: login_signup.php'); // Redirect to login page after logout
?>
