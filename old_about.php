<?php 
session_start();
error_reporting(E_ERROR | E_PARSE);
?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet" />
        <title>KinraiD</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FF6A3C; font-size:24px;">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-size:24px;" href="index">KinraiD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="justify-content: center;">
          <a class="nav-link" aria-current="page" href="index">หน้าหลัก</a>
          <a class="nav-link active" href="about">เกี่ยวกับเรา</a>
          <a class="nav-link" href="help_center">ศูนย์ช่วยเหลือ</a>
      </ul>
      <?php if( $_SESSION['logged_in']): ?>
        <p class="h5 text-light" style="font-size: 24px"><?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp</p>
        <button type="button" onclick="location.href='logout'" class="btn btn-outline-danger" style="font-size:24px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"></path>
            </svg>
                ออกจากระบบ
              </button>
    <?php else: ?>
        <button type="button" onclick="location.href='login'" class="btn btn-outline-light" style="font-size:24px">
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

<!-- about me -->
<div class="container my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">เกี่ยวกับเรา</h1>
        </div>
    </div>


  <div class="container bg-light">
    <div class="container my-4">
      <h4 style="font-weight:bold">
        จุดเริ่มต้น
      </h4>
    </div>
    <h4>
      กลางวันนี้จะกินอะไรดี ? เย็นนี้จะกินอะไรดี ? พรุ่งนี้กินอะไรดี ? ฯลฯ เป็นปัญหาใหญ่ที่รบกวนใจใครหลายๆ คน ที่อยู่คนเดียว เบื่อที่จะคิดอาหารในเเต่ละวัน
      หรือ คนที่มีเพื่อน มีครอบครัว อาจจะต้องคิดหนักเพื่อตกลงเลือกอาหาร ถือว่าเป็นปัญหามาอย่างยาวนาน พวกเราจึงอยากนำเสนอเว็บที่พวกเราสร้างขึ้นมาเพื่อขจัดปัญหาเหล่านี้ให้หมดไป
    </h4>
  </div>

  <div class="container d-flex justify-content-center my-5">
    <img src="img/Meme.jpg" alt="" style="max-width:50%;height:auto">
  </div>

  <div class="container my-5">
    <i class="bi bi-universal-access"></i>
    <h2>ทีมงาน</h2>
  </div>
  <div class="row">
    <div class="col-12 col-md-4">
        <div class="card">
            <img class="card-img-top" src="https://media.tenor.com/EGJ71F2kAdQAAAAC/akai-haato-hololive.gif" alt="">
            <div class="card-body">
                <h4 class="card-title">นายอติวิชญ์ ถุงเงิน</h4>
                <p class="card-text">CEO/Coding</p>
                <p class="card-text">โรงเรียนพิบูลวิทยาลัย</p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card">
            <img class="card-img-top" src="https://media.tenor.com/EGJ71F2kAdQAAAAC/akai-haato-hololive.gif" alt="">
            <div class="card-body">
                <h4 class="card-title">นายศิวกร ศรีวีระกุล</h4>
                <p class="card-text">Coding</p>
                <p class="card-text">โรงเรียนเบญจมราชูทิศ ราชบุรี</p>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-4">
        <div class="card">
            <img class="card-img-top" src="https://media.tenor.com/EGJ71F2kAdQAAAAC/akai-haato-hololive.gif" alt="">
            <div class="card-body">
                <h4 class="card-title">นายติณณภพ นวจิตไพบูลย์</h4>
                <p class="card-text">Web Designer</p>
                <p class="card-text">โรงเรียนเทพศิรินทร์</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card">
            <img class="card-img-top" src="https://media.tenor.com/EGJ71F2kAdQAAAAC/akai-haato-hololive.gif" alt="">
            <div class="card-body">
                <h4 class="card-title">นายธนภูมิ วงษ์ธานี</h4>
                <p class="card-text">Web Designer/Data Researcher</p>
                <p class="card-text">โรงเรียนบางปะกอกวิทยาคม</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card">
            <img class="card-img-top" src="https://media.tenor.com/EGJ71F2kAdQAAAAC/akai-haato-hololive.gif" alt="">
            <div class="card-body">
                <h4 class="card-title">นายอิทธิพันธ์ สนามคุณ</h4>
                <p class="card-text">Web Designer</p>
                <p class="card-text">โรงเรียนเทพศิรินทร์</p>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-4">
        <div class="card">
            <img class="card-img-top" src="https://media.tenor.com/EGJ71F2kAdQAAAAC/akai-haato-hololive.gif" alt="">
            <div class="card-body">
                <h4 class="card-title">นายสิทธันต์ อารมณ์ประเสริฐ</h4>
                <p class="card-text">Data Researcher</p>
                <p class="card-text">โรงเรียนบดินทรเดชา (สิงห์สิงหเสนี)</p>
            </div>
        </div>
    </div>
  </div>

    <script src="js/protect.js"></script>
</body>
</html>