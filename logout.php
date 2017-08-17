<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);

   echo 'This ends the session!';
   header('Refresh: 2; URL = index.php');
?>

