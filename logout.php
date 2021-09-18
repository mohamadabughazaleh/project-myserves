<?php 

 session_start();   // Start The Session
 session_unset($_SESSION['Username']); 
 session_unset($_SESSION['user']);  // Unset the data
 session_destroy(); // Destroy the session
 header('Location: login.php');
 exit();