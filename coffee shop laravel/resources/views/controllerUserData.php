<?php 
session_start();
require "connection.php";
require '../vendor/autoload.php'; // Memuat autoload Composer untuk PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$email = "";
$name = "";
$errors = array();

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// If user signup button
if (isset($_POST['signup'])) {
    $name = isset($_POST['username']) ? mysqli_real_escape_string($db, $_POST['username']) : '';
    $fullname = isset($_POST['fullname']) ? mysqli_real_escape_string($db, $_POST['fullname']) : '';
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : '';
    $phone = isset($_POST['phone']) ? mysqli_real_escape_string($db, $_POST['phone']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : '';
    $cpassword = isset($_POST['cpassword']) ? mysqli_real_escape_string($db, $_POST['cpassword']) : '';

    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    }

    // Check if email exists
    $email_check = "SELECT * FROM usertable WHERE email = '$email'";
    $res = mysqli_query($db, $email_check);
    
    if (mysqli_num_rows($res) > 0) {
        $errors['email'] = "Email that you have entered already exists!";
    }

    if (count($errors) === 0) {
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(100000, 999999); // Fixed code range
        $status = "notverified"; // Make sure the table has a status column

        // Use prepared statement for security
        $stmt = $db->prepare("INSERT INTO usertable (username, fullname, phone, email, password, code) VALUES (?, ?, ?, ?, ?, ?)");
        
        // Check if the statement was prepared successfully
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($db->error));
        }

        $stmt->bind_param("ssssss", $name, $fullname, $phone, $email, $encpass, $code); // Corrected line
        $data_check = $stmt->execute();

        if ($data_check) {
            // Menggunakan PHPMailer untuk mengirim email
            $mail = new PHPMailer(true);
            try {
                // Konfigurasi SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'dptrii123@gmail.com'; 
                $mail->Password = 'dzjm eqgs vuct dvrc'; 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Pengaturan email
                $mail->setFrom('dptrii123@gmail.com', 'Our Workspace'); 
                $mail->addAddress($email); // Penerima

                $mail->isHTML(true);
                $mail->Subject = 'Email Verification Code';
                $mail->Body    = "Your verification code is $code";

                // Kirim email
                $mail->send();
                $info = "We've sent a verification code to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                header('location: user-otp.php');
                exit();
            } catch (Exception $e) {
                $errors['otp-error'] = "Failed to send code! Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $errors['db-error'] = "Failed while inserting data into database!";
        }
    }
}

// Forgot password - email verification for password reset
if (isset($_POST['check-email'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $check_email = "SELECT * FROM usertable WHERE email='$email'";
    $run_sql = mysqli_query($db, $check_email);
    
    if (mysqli_num_rows($run_sql) > 0) {
        $code = rand(100000, 999999); // Fixed code range
        $insert_code = "UPDATE usertable SET code = $code WHERE email = '$email'";
        $run_query = mysqli_query($db, $insert_code);
        
        if ($run_query) {
            // Menggunakan PHPMailer untuk mengirim email reset password
            $mail = new PHPMailer(true);
            try {
                // Konfigurasi SMTP
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'dptrii123@gmail.com'; 
                $mail->Password = 'dzjm eqgs vuct dvrc'; 
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                // Pengaturan email
                $mail->setFrom('dptrii123@gmail.com', 'Our Workspace'); 
                $mail->addAddress($email); 

                $mail->isHTML(true);
                $mail->Subject = 'Password Reset Code';
                $mail->Body    = "Your password reset code is $code";

                // Kirim email
                $mail->send();
                $info = "We've sent a password reset OTP to your email - $email";
                $_SESSION['info'] = $info;
                $_SESSION['email'] = $email;
                header('location: reset-code.php');
                exit();
            } catch (Exception $e) {
                $errors['otp-error'] = "Failed to send code! Mailer Error: {$mail->ErrorInfo}";
            }
        } else {
            $errors['db-error'] = "Something went wrong!";
        }
    } else {
        $errors['email'] = "This email address does not exist!";
    }
}

// Forgot password - OTP check
if (isset($_POST['check-reset-otp'])) {
    $_SESSION['info'] = "";
    $otp_code = mysqli_real_escape_string($db, $_POST['otp']);
    $check_code = "SELECT * FROM usertable WHERE code = $otp_code";
    $code_res = mysqli_query($db, $check_code);
    
    if (mysqli_num_rows($code_res) > 0) {
        $fetch_data = mysqli_fetch_assoc($code_res);
        $email = $fetch_data['email'];
        $_SESSION['email'] = $email;
        $info = "Please create a new password that you don't use on any other site.";
        $_SESSION['info'] = $info;
        header('location: new-password.php');
        exit();
    } else {
        $errors['otp-error'] = "You've entered incorrect code!";
    }
}

// Forgot password - update new password
if (isset($_POST['change-password'])) {
    $_SESSION['info'] = "";
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $cpassword = mysqli_real_escape_string($db, $_POST['cpassword']);
    
    if ($password !== $cpassword) {
        $errors['password'] = "Confirm password not matched!";
    } else {
        $code = 0;
        $email = $_SESSION['email'];
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        
        // Use prepared statement for security
        $update_pass = "UPDATE usertable SET code = ?, password = ? WHERE email = ?";
        $stmt = $db->prepare($update_pass);
        
        // Check if the statement was prepared successfully
        if ($stmt === false) {
            die('Prepare failed: ' . htmlspecialchars($db->error));
        }

        $stmt->bind_param("iss", $code, $encpass, $email);
        $run_query = $stmt->execute();
        
        if ($run_query) {
            $info = "Your password has been changed. Now you can log in with your new password.";
            $_SESSION['info'] = $info;
            header('Location: password-changed.php');
            exit();
        } else {
            $errors['db-error'] = "Failed to change your password!";
        }
    }
}
?>
