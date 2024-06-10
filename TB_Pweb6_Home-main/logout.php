<?php
if(isset($_POST['logout'])!=null){
    session_start();
    session_unset();
    session_destroy();
    header('Location: index.php');
}
?>