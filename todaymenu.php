<?php 
session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
        <meta name="viewport" content="width=device-width, user-scalable=no">

        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet" />
        <title>KinraiD</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index">KinraiD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index">หน้าหลัก</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="todaymenu">เมนูประจำวัน</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">เกี่ยวกับเรา</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="help_center">ศูนย์ช่วยเหลือ</a>
        </li>
      </ul>
      <?php if( $_SESSION['logged_in']): ?>
        <p class="h5 text-light"><?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp</p>
        <button type="button" onclick="location.href='logout'" class="btn btn-outline-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
</svg>
                ออกจากระบบ
              </button>
    <?php else: ?>
        <button type="button" onclick="location.href='login'" class="btn btn-outline-light">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
</svg>
                เข้าสู่ระบบ
              </button>
    <?php endif; ?>
    </div>
  </div>
</nav>

    <div class="container">
    <div class="row my-5">
        <div class="col-12">
            <h1 class="text-center">เมนูประจำวัน</h1>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-6">
            <a href="#"><img src="img\cousel1.png" class="w-100" alt=""></a>
        </div>
        <div class="col-6">
            <a href="#"><img src="img\cousel2.jpg" class="w-100" alt=""></a>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-6">
            <a href="#"><img src="img\cousel1.png" class="w-100" alt=""></a>
        </div>
        <div class="col-6">
            <a href="#"><img src="img\cousel2.jpg" class="w-100" alt=""></a>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-6">
            <a href="#"><img src="img\cousel1.png" class="w-100" alt=""></a>
        </div>
        <div class="col-6">
            <a href="#"><img src="img\cousel2.jpg" class="w-100" alt=""></a>
        </div>
    </div>

    <center><h1>Coming Soon...</h1></center>