<?php 
session_start();
require "config.php";
$email = "";
$name = "";
$errors = array();

// Jika pengguna mengklik tombol lupa password
if(isset($_POST['check-email'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $check_email = "SELECT * FROM user_form WHERE email = ?";
    $stmt = $conn->prepare($check_email);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0){
        $code = rand(999999, 111111);
        $insert_code = "UPDATE user_form SET code = ? WHERE email = ?";
        $stmt = $conn->prepare($insert_code);
        $stmt->bind_param('is', $code, $email);
        $run_query = $stmt->execute();
        
        if($run_query){
            $subject = "Kode Reset Password";
            $message = "Kode reset password Anda adalah $code";
            $sender = "From: shahiprem7890@gmail.com";
            if(mail($email, $subject, $message, $sender)){
                $info = "Kami telah mengirimkan kode OTP reset password ke email Anda - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            }else{
                $errors['otp-error'] = "Gagal mengirim kode!";
            }
        }else{
            $errors['db-error'] = "Terjadi kesalahan!";
        }
    }else{
        $errors['email'] = "Alamat email ini tidak ada!";
    }
}

// Jika pengguna mengklik tombol reset OTP
if(isset($_POST['check-reset-otp'])){
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($conn, $_POST['otp']);
    $check_code = "SELECT * FROM user_form WHERE code = ?";
    $stmt = $conn->prepare($check_code);
    $stmt->bind_param('i', $otp_code);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0){
        $fetch_data = $result->fetch_assoc();
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Silakan buat password baru yang tidak Anda gunakan di situs lain.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    }else{
        $errors['otp-error'] = "Kode yang Anda masukkan salah!";
    }
}

// Jika pengguna mengklik tombol ubah password
if(isset($_POST['change-password'])){
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Konfirmasi password tidak cocok!";
    }else{
        $code = 0;
        $email = $_SESSION['email']; //mengambil email ini menggunakan session
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $update_pass = "UPDATE user_form SET code = ?, password = ? WHERE email = ?";
        $stmt = $conn->prepare($update_pass);
        $stmt->bind_param('iss', $code, $encpass, $email);
        $run_query = $stmt->execute();
        
        if($run_query){
            $info = "Password Anda telah diubah. Sekarang Anda bisa masuk dengan password baru.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
        }else{
            $errors['db-error'] = "Gagal mengubah password Anda!";
        }
    }
}
?>
