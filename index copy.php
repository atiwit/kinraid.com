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
        <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 justify-content-center;">
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
<!-- slide -->
<div class="bg-image"style="background-image: url('img/bg.png'); height: 100vh; background-size: cover;">
<div class="container" style="text-align: center;">
    <img src="img/logo.png" class="img-fluid">
</div>
<!-- สุ่มอาหาร -->
    <div class="container-fluid w-50 d-block" 
    style="background-color: #EEEFF0; padding: 1rem; margin-bottom: 1rem; border-radius: 16px; ">
        <div class="container d-flex justify-content-center" >
        <div class="row">
            <div class="col">
                <h2>แพ้</h2>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="spicyCheckBox">
                    <label class="form-check-label" for="spicyCheckBox">เผ็ด</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="seafoodCheckBox">
                    <label class="form-check-label" for="seafoodCheckBox">ซีฟู้ด</label>
                </div>
            </div>
            <div class="col">
                <h2>ประเภท</h2>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="foodCheckBox" checked>
                    <label class="form-check-label" for="foodCheckBox">
                        อาหารหลัก
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="dessertCheckBox">
                    <label class="form-check-label" for="dessertCheckBox">
                        ของหวาน
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="snackCheckBox">
                    <label class="form-check-label" for="snackCheckBox">
                        ของกินเล่น
                    </label>
                </div>
            </div>
            <div class="col">
                <h2>แคลอรี่</h2>
                <input type="text" class="form-control my-2" placeholder="ต่ำสุด" id="minCalInput" value="1">
                <input type="text" class="form-control" placeholder="สูงสุด" id="maxCalInput" value="9999">
            </div>
            
        </div>
        </div>
    </div>
        <center>
        <button type="button" class="btn btn-success rounded" id="randomButton" style="" >
            สุ่มอาหาร
        </button>
        </center>

    <!-- Modal pop up randomized -->
    <div class="modal fade" id="randomModal" tabindex="-1" role="dialog" aria-labelledby="randomModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="randomModalLabel">อาหารที่สุ่มได้</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h2 class="text-center" id="foodResultName">อาหาร</h2>
                    <div class="container d-flex justify-content-center">
                        <img src="" " alt="" class="round" id="foodImgPanel" style="width:300px;height:200px">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                    <button type="button" class="btn btn-primary">
                        <a href="store_link" class="btn btn-primary">เลือกร้านเลย !</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- 
        <script src="js/protect.js"></script>
     -->
    <script type="module" src="js/index.js"></script>

    <!-- DEBUG  -->
    <script>

        document.getElementById('randomButton').addEventListener("click" , () => {
            console.log(document.cookie);
        })
        let touchEvent = 'ontouchstart' in window ? 'touchstart' : 'click';
        document.getElementById('randomButton').addEventListener(touchEvent, handleButtonClick); 
        
    </script>

    </body>
</html>