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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
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
<div id="carouselId" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img src="img/bg.png" class="w-100 d-block" alt="First slide" style="max-width: 100%; height: 300px; object-fit: none;" id="foodImg">
            <div class="carousel-caption d-none d-md-block">
                <center>
                <h1 id="foodTitleName" style="color:#ffffff;
filter:drop-shadow(0px 4px 4px rgba(0,0,0,0.5));
text-align:center;
vertical-align:text-top;
font-size:2.5rem;
line-height:auto;
border-style:hidden;
outline:none;
width:230px;
position: absolute;
  top: -182px;
  left: 32px;">ชื่ออาหาร</h1>
                    <button type="button" onclick="location.href='index'" class="btn btn-success" style="font-size:18px; border-radius:51.5px;">สุ่มต่อไหม</button>
                </center>
            </div>
        </div>
        
    </div>
</div>

<br>
    <div class="container d-flex justify-content-start">
          <div>
          <h3 style="color: #0E06FF;">ร้านอาหารใกล้คุณ</h3>
        </div>
    </div>

    <div class="container">
    <div class="card-group">
            <div class="shadow-lg p-3 mb-5 card rounded" style="width: 18rem; margin: 1rem;">
            <img src="" alt="" class="img-responsive rounded" id="img1" style="width:100%;height:250px;">
        <div class="card-body">
            <h5 class="card-title" id="name1">Card title</h5>
            <p class="card-text" id="info1">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p id="ratingLabel1"></p>
          </div>
          <div class="card-footer">
                        <a href="" id="link1">อ่านรายละเอียดเพิ่มเติม</a>
                    </div>
          </div>

          <div class="shadow-lg p-3 mb-5 card rounded" style="width: 18rem; margin: 1rem;">
          <img src="" alt="" class="img-responsive rounded" id="img2" style="width:100%;height:250px;">
        <div class="card-body">
            <h5 class="card-title" id="name2">Card title</h5>
            <p class="card-text" id="info2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p id="ratingLabel2"></p>
          </div>
          <div class="card-footer">
                        <a href="" id="link2">อ่านรายละเอียดเพิ่มเติม</a>
                    </div>
          </div>

          <div class="shadow-lg p-3 mb-5 card rounded" style="width: 18rem; margin: 1rem;">
          <img src="" alt="" class="img-responsive rounded" id="img3" style="width:100%;height:250px;">
        <div class="card-body">
            <h5 class="card-title" id="name3">Card title</h5>
            <p class="card-text" id="info3">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p id="ratingLabel3"></p>
          </div>
          <div class="card-footer">
                        <a href="" id="link3">อ่านรายละเอียดเพิ่มเติม</a>
                    </div>
          </div>
    </div>
    </div>

    <script type = "module" src="js/store_link.js"></script>
    </body>
</html>
