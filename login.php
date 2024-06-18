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
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <link rel=”icon” href="img/kinraid.jpg" />
        <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Q0HLQ6J2YZ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Q0HLQ6J2YZ');
</script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet" />
        <title>KinraiD - กินไรดี</title>
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
          <a class="nav-link active" aria-current="page" href="index">หน้าหลัก</a>
          <a class="nav-link" href="about">เกี่ยวกับเรา</a>
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
    <!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">เข้าสู่ระบบ</h2>
          <?php if(isset($_SESSION['err_fill'])) : ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['err_fill']?>
          </div>
        <?php endif ?>
        <?php if(isset($_SESSION['err_email'])) : ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['err_email']?>
          </div>
        <?php endif ?>
        <?php if(isset($_SESSION['err_pw'])) : ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['err_pw']?>
          </div>
        <?php endif ?>
        <!-- Form -->
          <form action="backend/login_db.php" method="POST">
            <!-- Email input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">อีเมล</label>
              <input type="email" id="form3Example3" name="email" class="form-control" required/>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="form3Example4">รหัสผ่าน</label>
            <input type="password" id="form3Example4" name="password" class="form-control" required/>
            </div>
            <p class="mb-5 pb-lg-2" style="color: black;">ไม่มีบัญชีผู้ใช้?
                  <a href="register"
                      style="color: #393f81;">สมัครที่นี่!</a></p>
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">
              เข้าสู่ระบบ
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Design Block -->
    <script src="js/protect.js"></script>
    </body>
</html>
<?php
    if(isset($_SESSION['err_fill']) || isset($_SESSION['err_email']) || isset($_SESSION['err_pw'])) {
        unset($_SESSION['err_fill']);
        unset($_SESSION['err_email']);
        unset($_SESSION['err_pw']);
    }
?>