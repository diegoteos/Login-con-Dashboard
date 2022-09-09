<?php
echo "hola mundo";

session_start();



if (!isset($_SESSION['id'])) {
    header('Location hola.php');
 }  
 if (isset($_SESSION['id']))
 {
    if ((time() - $_SESSION['time']) > 10) {
        header('location: logout.php');
    }
} 

?>
