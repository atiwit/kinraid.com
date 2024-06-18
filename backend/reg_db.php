<?php
session_start();
if(isset($_POST['submit'])) {
    include('conn.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email) || empty($password) ||empty($name)) {
        $_SESSION['err_fill'] = "กรอกข้อมูลให้ครบถ้วน";
        echo '<script>alert("กรอกข้อมูลให้ครบถ้วน")</script>';
        header('location: ../register');
        exit;
    } else {
        $stmt = $conn->prepare("SELECT COUNT(email) AS count_email FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row['count_email'] != 0) {
            $_SESSION['exist_email'] = "มีคนใช้อีเมลนี้ในระบบแล้ว";
            echo '<script>alert("มีคนใช้อีเมลนี้ในระบบแล้ว")</script>';
            header('location: ../register');
            exit;
        } else {
            $passwordHash = md5($password);
            $insert_stmt = $conn->prepare("INSERT into users (name, email, password, type)
            Values (:name, :email, :password, 'user')");
            $insert_stmt->bindParam(':name', $name);
            $insert_stmt->bindParam(':email', $email);
            $insert_stmt->bindParam(':password', $passwordHash);
            $insert_stmt->execute();
            
            if($insert_stmt){
                $_SESSION['email'] = $email;
                $_SESSION['logged_in'] = true;
                header('location: ../index');
            } else {
                $_SESSION['err_insert'] = "ไม่สามารถสมัครสมาชิกได้";
                echo '<script>alert("ไม่สามารถสมัครสมาชิกได้")</script>';
                header('location: ../register');
            }
        }
    }
}
?>