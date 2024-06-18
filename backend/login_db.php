<?php
session_start();
include ('conn.php');
 
$email = $_POST['email'];
$password = md5($_POST['password']);
$query = $conn->query("Select * from users where email = '$email' and password ='$password' ");
$count = $query->rowcount();
$row = $query->fetch();
 
if ($count > 0)
	{
	$_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];
        $_SESSION['password'] = $row['password'];
        $_SESSION['logged_in'] = true;
        header('location: ../index');   
	}
  else
	 {
     $_SESSION['err_pw'] = "รหัสผ่านไม่ถูกต้อง";
    header('location:../login');
     }
     // ความทรงจำดีๆที่แก้มา 2 วัน
//     $u = $_GET['email'];
//     $p = $_GET['password'];

//     include_once('conn.php');

//     $sql = "SELECT email,password FROM users WHERE email = :email";

//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(':email', $u);
//     $stmt->execute();
//     $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
//     // if (isset($_GET['password']) && !empty($_GET['password']))
// {
//     $new_password=$_GET['password'];
     
//     if(md5($new_password)==md5($p))
//     {
//         echo "<br> Correct password ";
//     }
//     else{
//         echo "<br> Incorrect password ";
//     }
// }
    // if($row = $result){
    //     $_SESSION['email'] = $row['email'];
    //     $_SESSION['password'] = $row['password'];
    //     $_SESSION['logged_in'] == true;
    //     header('location: ../index');   
    //     $stmt->close();
    //     $conn->close();
    //     exit(0);
    // }else {
    //     $_SESSION['err_pw'] = "รหัสผ่านไม่ถูกต้อง";
    //     echo $p;
    //     //header('location:../login');
    // }
   

// if(isset($_POST['submit'])) {
//     include('conn.php');
//     $email = $_POST['email'];
//     $password = $_POST['password'];


//     if(empty($email) || empty($password)) {
//         $_SESSION['err_fill'] = "กรอกข้อมูลให้ครบถ้วน";
//         echo '<script>alert("กรอกข้อมูลให้ครบถ้วน")</script>';
//         header('location: ../login');
//         exit;
//     } else {
//         $sql = "SELECT COUNT(email) AS count_email, password, name FROM users WHERE email = '$email'";
//         $stmt = $conn->prepare($sql);
//         $stmt->execute();
//         $result = $stmt->fetch(PDO::FETCH_ASSOC);
//         if($result['count_email'] == 0) {
//             $_SESSION['err_email'] = "ไม่มีอีเมลผู้ใช้นี้ในระบบ";
//             header('location: ../login');
//             exit;
//         } else {
//             $row = $stmt->fetch(PDO::FETCH_ASSOC);
//             if  (password_verify($password, $row['password'])) {
//                 $_SESSION['email'] = $email;
//                 $_SESSION['logged_in'] == true;
//                 $_SESSION['name'] = $row['name'];
//                 header('location: ../index');
//             }
//         }
// }

// } else {
//     header('location: ../login');
//     exit;
// }
//     if(empty($email) || empty($password)) {
//         $_SESSION['err_fill'] = "กรอกข้อมูลให้ครบถ้วน";
//         echo '<script>alert("กรอกข้อมูลให้ครบถ้วน")</script>';
//         header('location: ../login');
//     } 
//     else {
//         $stmt = $conn->prepare("SELECT COUNT(email) AS count_email, password FROM users WHERE email = :email");
//         $stmt->bindParam(':email', $email);
//         $stmt->execute();
//         $row = $stmt->fetch(PDO::FETCH_ASSOC);

//         if($row['count_email'] == 0) {
//             $_SESSION['err_email'] = "ไม่มีอีเมลผู้ใช้นี้ในระบบ";
//             header('location: ../login');
//             exit;
//         } else {
//             if (password_verify($password, $row['password'])) {
//                 $_SESSION['email'] = $email;
//                 $_SESSION['logged_in'] = true;
//                 header('location: ../index');
//                 exit;
//             } else {
//                 $_SESSION['err_pw'] = "รหัสผ่านไม่ถูกต้อง";
//                 header('location: ../login');
//                 exit;
//             }

//         }
//     }
    
// }

?>