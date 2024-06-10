<?php
require_once "config.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pas1 = md5($pass);
    $query = "SELECT * FROM user_form WHERE email = ? AND password = ?";
    $q = $conn->prepare($query);
    $q->bind_param("ss", $email, $pas1);
    $q->execute();
    $rest = $q->get_result();
    
    if ($rest->num_rows > 0) {
        session_start();
        $r = mysqli_fetch_assoc($rest);
        $fname = $r['fname'];
        $lname = $r['lname'];
        $lengkap = $fname . " " . $lname;
        $_SESSION['user'] = $lengkap;
        header("Location: account.php");
    } else {
        header("Location: login.php");
    }
}
?>
