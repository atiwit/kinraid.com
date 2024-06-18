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

    <h2 class="text-center my-5" id="foodTitleName">ชื่ออาหาร</h2>
    <div class="container">
        <div class="container d-flex justify-content-center my-5" style="width:300px;height:200px">
            <img src="https://picsum.photos/300/200" " alt="" class="round" id="foodImg">
        </div>
    </div>

    <div id="map"></div>

    <div class="container d-flex justify-content-start">
        <div class="bg-primary w-25 text-center text-white p-2 round">
            <h4>ร้านอาหารใกล้คุณ</h3>
        </div>
    </div>

    <div class="container my-5">
        <div class="row my-3">
            <div class="col">
                <div class="container d-flex justify-content-center" style="">
                    <img src="" alt="" class="img-responsive round" id="img1" style="width:300px;height:200px;">
                </div>
            </div>
            <div class="col" style="">
                <div class="card text-white bg-secondary">
                    <div class="card-header">
                        <h3 id = "name1">ชื่อร้าน</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-text" id="info1">
                            ที่อยู่: 38 ซอย จรัญสนิทวงศ์ 3 แขวงวัดท่าพระ เขตบางกอกใหญ่ กรุงเทพมหานคร 10600 <br>
                            เวลาทำการ: เปิด - ปิด 19:00 <br>
                            โทรศัพท์: 087 548 1716

                            <p id="ratingLabel1"></p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="" id="link1">อ่านรายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col">
                <div class="container d-flex justify-content-center" style="">
                    <img src="" alt="" class="img-responsive round" id="img2" style="width:300px;height:200px;">
                </div>
            </div>
            <div class="col" style="">
                <div class="card text-white bg-secondary">
                    <div class="card-header">
                        <h3 id="name2">ชื่อร้าน</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-text" id="info2">
                            ที่อยู่: 38 ซอย จรัญสนิทวงศ์ 3 แขวงวัดท่าพระ เขตบางกอกใหญ่ กรุงเทพมหานคร 10600 <br>
                            เวลาทำการ: เปิด - ปิด 19:00 <br>
                            โทรศัพท์: 087 548 1716

                            <p id="ratingLabel2"></p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="" id="link2">อ่านรายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-4">
            <div class="col">
                <div class="container d-flex justify-content-center" style="">
                    <img src="" alt="" class="img-responsive round" id="img3" style="width:300px;height:200px;">
                </div>
            </div>
            <div class="col" style="">
                <div class="card text-white bg-secondary">
                    <div class="card-header">
                        <h3 id="name3">ชื่อร้าน</h3>
                    </div>
                    <div class="card-body">
                        <div class="card-text" id="info3">
                            ที่อยู่: 38 ซอย จรัญสนิทวงศ์ 3 แขวงวัดท่าพระ เขตบางกอกใหญ่ กรุงเทพมหานคร 10600 <br>
                            เวลาทำการ: เปิด - ปิด 19:00 <br>
                            โทรศัพท์: 087 548 1716

                            <p id="ratingLabel3"></p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="" id="link3">อ่านรายละเอียดเพิ่มเติม</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type = "module" src="js/store_link.js"></script>
    </body>
</html>
