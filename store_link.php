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
        <script src="https://code.jquery.com/jquery-3.7.0.slim.min.js" integrity="sha256-tG5mcZUtJsZvyKAxYLVXrmjKBVLd6VpVccqz/r4ypFE=" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Mitr&display=swap" rel="stylesheet" />
        <title>KinraiD - กินไรดี</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #FF6A3C; font-size:24px;">
  <div class="container-fluid">
    <a class="navbar-brand" style="font-size:24px;" href="index">Kinrai-D</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0" style="justify-content: center;">
          <a class="nav-link" aria-current="page" href="index">หน้าหลัก</a>
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
            <img src="img/bg.png" class="w-100 d-block" alt="First slide" style="max-width: 100%; height: 300px; object-fit: cover; filter: blur(3.5px);
  -webkit-filter: blur(3.5px);" id="foodImg">
            <div class="carousel-caption d-none d-md-block">
                <center>
                <h1 id="foodTitleName" style="color: #FFFFFF;
filter:drop-shadow(0px 4px 4px rgba(0,0,0,0.5));
text-align:center;
font-size:2.5rem;
line-height:auto;
border-style:hidden;
-webkit-text-stroke-width: 1px;
  -webkit-text-stroke-color: black;
">ชื่ออาหาร</h1>
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

    <footer class="p-5" style="background-color: #FF6A3C; color:white;">
        <div class="row">
        <div class="col-6 col-md-2 mb-3">
            <h5>หน้าหลัก</h5>
            <ul class="nav flex-column">
            </ul>
        </div>

        <div class="col-6 col-md-2 mb-3">
            <h5>ศูนย์ช่วยเหลือ</h5>
            <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="https://youtu.be/XZeFrDPXIdk" class="nav-link p-0 link-light">วีดีโอสอนการใช้งาน</a></li>
            <li class="nav-item mb-2"><a href="help_center" class="nav-link p-0 link-light">คำถามที่พบบ่อย FAQs</a></li>
            <li class="nav-item mb-2"><a href="mailto: atiwit@kinraid.com" class="nav-link p-0 link-light">รายงานปัญหา</a></li>
            </ul>
        </div>

        <div class="col-md-5 offset-md-1 mb-3">
            <form>
            <img src="img/logo.png" class="img-fluid" alt="" style="width:100%;">
            <div class="d-flex flex-column justify-content-center flex-sm-row w-100 gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg>
            </div>
            </form>
        </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>2023 KinraiD</p>
        <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
        </ul>
        </div>
    </footer>

  <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="errorTitle">Kinrai-D</h5>
      </div>
      <div class="modal-body">
        ไม่พบอาหารประเภทนี้ในเขตพื้นที่ของท่าน หรือ ท่านกำลังใช้ระบบปฎิบัติการ ios ซึ่งกำลังมีปัญหาอยู่
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="exitButton">กลับไปหน้าหลัก</button>
      </div>
    </div>
  </div>
</div>
<script>
      document.getElementById("exitButton").onclick = function(){
        location.assign("https://kinraid.com/index");
      }
    
    let placesArr = [] ; 
    let foodList = [
        {
            "foodname":  "หมูทอดกระเทียม",
            "spicy": false,
            "seafood": false,
            "avg_calories": 200,
            "cuisine": "อาหาร",
            "img" : "/img/food/Fried-Pork-Garlic.jpg" 
            },
            {
            "foodname":  "ข้าวมันไก่",
            "spicy": false,
            "seafood": false,
            "avg_calories": 515,
            "cuisine": "อาหาร",
            "img" : "/img/food/kao-mun-kai.jpg" 
            },
            {
            "foodname":  "ข้าวหมูแดง",
            "spicy": false,
            "seafood": false,
            "avg_calories": 438,
            "cuisine": "อาหาร",
            "img" : "/img/food/kao-muu-red.jpg" 
            },
            {
            "foodname":  "ผัดผักบุ้ง",
            "spicy": true,
            "seafood": false,
            "avg_calories": 210,
            "cuisine": "อาหาร",
            "img" : "/img/food/pad-phak-bung.jpg" 
            },
            {
            "foodname":  "แกงจืดเต้าหู้หมูสับ",
            "spicy": false,
            "seafood": false,
            "avg_calories": 80,
            "cuisine": "อาหาร",
            "img" : "/img/food/tofu-musub.jpg" 
            },
            {
            "foodname" : "ผัดไทย",
            "spicy" : false,
            "seafood" : false,
            "avg_calories" : 500,
            "cuisine" : "อาหาร",
            "img" : "/img/food/pad-thai.jpg" 
            },
            {
            "foodname":  "เต้าหู้ทรงเครื่อง",
            "spicy": false,
            "seafood": false,
            "avg_calories": 164,
            "cuisine": "อาหาร",
            "img" : "/img/food/tofu-sonkrung.jpg" 
            },
            {
            "foodname":  "ต้มยำกุ้ง",
            "spicy": true,
            "seafood": true,
            "avg_calories": 65,
            "cuisine": "อาหาร",
            "img" : "/img/food/tom-yum-kung.jpg" 
            },
            {
            "foodname":  "ไข่พะโล้",
            "spicy": false,
            "seafood": false,
            "avg_calories": 460,
            "cuisine": "อาหาร",
            "img" : "/img/food/kai-pha-lo.jpg" 
            },
            {
            "foodname":  "ต้มยำปลากรอบ",
            "spicy": true,
            "seafood": true,
            "avg_calories": 152,
            "cuisine": "อาหาร",
            "img" : "/img/food/yum-pra-krob.jpg" 
            },
            {
            "foodname":  "แกงจืดรวมมิตรทะเล",
            "spicy": false,
            "seafood": true,
            "avg_calories": 150,
            "cuisine": "อาหาร",
            "img" : "/img/food/mixed-sea.jpg" 
            },
            {
            "foodname":  "ข้าวต้มปลา",
            "spicy": false,
            "seafood": true,
            "avg_calories": 220,
            "cuisine": "อาหาร",
            "img" : "/img/food/kaoi-tom-pla.jpg" 
            },
            {
            "foodname":  "ยำปลาดุกฟู",
            "spicy": true,
            "seafood": true,
            "avg_calories": 323,
            "cuisine": "อาหาร",
            "img" : "/img/food/yum-pladuk-fuu.jpg" 
            },
            {
            "foodname":  "ทอดมัน",
            "spicy": false,
            "seafood": true,
            "avg_calories": 219,
            "cuisine": "อาหาร",
            "img" : "/img/food/tod-mun-pla.jpg" 
            },
            {
            "foodname":  "น้ำพริกอ่อง",
            "spicy": true,
            "seafood": false,
            "avg_calories": 520,
            "cuisine": "อาหาร",
            "img" : "/img/food/num-plik-oung.jpg" 
            },
            {
            "foodname":  "หูฉลาม",
            "spicy": false,
            "seafood": true,
            "avg_calories": 361,
            "cuisine": "อาหาร",
            "img" : "/img/food/huu-chalam.jpg" 
            },
            {
            "foodname":  "ขนมจีนน้ำยา",
            "spicy": false,
            "seafood": false,
            "avg_calories": 65,
            "cuisine": "อาหาร",
            "img" : "/img/food/kanom-jean-num-yaa.jpg" 
            },
            {
            "foodname":  "ห่อหมกปู",
            "spicy": false,
            "seafood": true,
            "avg_calories": 340,
            "cuisine": "อาหาร",
            "img" : "/img/food/hoor-mok.jpg" 
            },
            {
            "foodname": "กะเพราหมูสับ",
            "spicy": true,
            "seafood": false,
            "avg_calories": 350,
            "cuisine": "อาหาร",
            "img" : "/img/food/kra-pao-musub.jpg" 
            },
            {
            "foodname":  "ข้าวขาหมู",
            "spicy": false,
            "seafood": false,
            "avg_calories": 531,
            "cuisine": "อาหาร",
            "img" : "/img/food/kao-kaa-muu.jpg" 
            },
            {
            "foodname" : "ข้าวผัด",
            "spicy" : false,
            "seafood" : false,
            "avg_calories" : 500,
            "cuisine" : "อาหาร",
            "img" : "/img/food/kao-pad-muu.jpg" 
            },
            {
            "foodname":  "ข้าวผัดทะเล",
            "spicy": false,
            "seafood": true,
            "avg_calories": 321,
            "cuisine": "อาหาร",
            "img" : "/img/food/kao-pad-sea.jpg" 
            },
            {
            "foodname":  "ยำปลากระป๋อง",
            "spicy": true,
            "seafood": true,
            "avg_calories": 194,
            "cuisine": "อาหาร",
            "img" : "/img/food/yum-plakapong.jpg" 
            },
            {
            "foodname" : "สเต็กหมู",
            "spicy" : false,
            "seafood" : false,
            "avg_calories" : 200,
            "cuisine" : "อาหาร",
            "img" : "/img/food/pork-steak.jpg" 
            },
            {
            "foodname" : "ทอดมันกุ้ง",
            "spicy" : false,
            "seafood" : true,
            "avg_calories" : 200,
            "cuisine" : "อาหาร",
            "img" : "/img/food/tod-mun-kung.jpg" 
            },
            {
            "foodname":  "ขนมปัง",
            "spicy": false,
            "seafood": false,
            "avg_calories": 265,
            "cuisine": "ของหวาน",
            "img" : "/img/food/bread.jpg" 
            },
            {
                "foodname":  "ช็อกโกแลต",
                "spicy": false,
                "seafood": false,
                "avg_calories": 590,
                "cuisine": "ของหวาน",
                "img" : "/img/food/chocolate.jpg" 
            },
            {
                "foodname":  "คุกกี้",
                "spicy": false,
                "seafood": false,
                "avg_calories": 105,
                "cuisine": "ของหวาน",
                "img" : "/img/food/cookies.jpg" 
            },
            {
                "foodname":  "เครป",
                "spicy": false,
                "seafood": false,
                "avg_calories": 500,
                "cuisine": "ของหวาน",
                "img" : "/img/food/crape.jpg" 
            },
            {
                "foodname":  "ไอศกรีม",
                "spicy": false,
                "seafood": false,
                "avg_calories": 285,
                "cuisine": "ของหวาน",
                "img" : "/img/food/icecream.jpg" 
            },
            {
                "foodname":  "เยลลี่",
                "spicy": false,
                "seafood": false,
                "avg_calories": 176,
                "cuisine": "ของหวาน",
                "img" : "/img/food/jelly.jpg" 
            },
            {
                "foodname":  "หมูปิ้ง",
                "spicy": false,
                "seafood": false,
                "avg_calories": 200,
                "cuisine": "อาหาร",
                "img" : "/img/food/kao-neaw-ping.jpg" 
            },
            {
                "foodname":  "ไข่เจียว",
                "spicy": false,
                "seafood": false,
                "avg_calories": 370,
                "cuisine": "อาหาร",
                "img" : "/img/food/kao-kai-jeaw.jpg" 
            },
            {
                "foodname":  "แกงกะหรี่",
                "spicy": false,
                "seafood": false,
                "avg_calories": 870,
                "cuisine": "อาหาร",
                "img" : "/img/food/kang-curry.jpg" 
            },
            {
                "foodname":  "ราเม็ง",
                "spicy": false,
                "seafood": false,
                "avg_calories": 450,
                "cuisine": "อาหาร",
                "img" : "/img/food/ramen.jpg" 
            },
            {
                "foodname":  "ข้าวซอย",
                "spicy": true,
                "seafood": false,
                "avg_calories": 395,
                "cuisine": "อาหาร",
                "img" : "/img/food/kao-soi.jpg" 
            },
            {
                "foodname":  "ต้มเลือด",
                "spicy": false,
                "seafood": false,
                "avg_calories": 240,
                "cuisine": "อาหาร",
                "img" : "/img/food/tom-blood.jpg" 
            },
            {
                "foodname":  "ผัดซีอิ๊ว",
                "spicy": false,
                "seafood": false,
                "avg_calories": 325,
                "cuisine": "อาหาร",
                "img" : "/img/food/pad-see-iew.jpg" 
            },
            {
                "foodname":  "ต้มข่าไก่",
                "spicy": true,
                "seafood": false,
                "avg_calories": 275,
                "cuisine": "อาหาร",
                "img" : "/img/food/tom-kaa-kai.jpg" 
            },
            {
                "foodname":  "สปาเก็ตตี้คาโบนาร่า",
                "spicy": false,
                "seafood": false,
                "avg_calories": 450,
                "cuisine": "อาหาร",
                "img" : "/img/food/kabonara.jpg" 
            },
            {
                "foodname":  "ยำกุนเชียง",
                "spicy": true,
                "seafood": false,
                "avg_calories": 250,
                "cuisine": "อาหาร",
                "img" : "/img/food/yum-kun-chieng.jpg" 
            },
            {
                "foodname":  "ผัดคะน้าหมูกรอบ",
                "spicy": true,
                "seafood": false,
                "avg_calories": 400,
                "cuisine": "อาหาร",
                "img" : "/img/food/pad-kana-muu-krob.jpg" 
            },
            {
                "foodname":  "หอยทอดกระเทียม",
                "spicy": false,
                "seafood": true,
                "avg_calories": 300,
                "cuisine": "อาหาร",
                "img" : "/img/food/hoi-tod-garic.jpg" 
            },
            {
                "foodname":  "หมูกระทะ",
                "spicy": false,
                "seafood": false,
                "avg_calories": 400,
                "cuisine": "อาหาร",
                "img" : "/img/food/muu-krata.jpg" 
            },
            {
                "foodname":  "สเต็กเนื้อ",
                "spicy": false,
                "seafood": false,
                "avg_calories": 350,
                "cuisine": "อาหาร",
                "img" : "/img/food/meat-steak.jpg" 
            },
            {
                "foodname":  "ปีกไก่ทอด",
                "spicy": false,
                "seafood": false,
                "avg_calories": 350,
                "cuisine": "อาหาร",
                "img" : "/img/food/chicken-wing-tod-num-pla.jpg" 
            },
            {
                "foodname":  "สลัดผักไก่ย่าง",
                "spicy": false,
                "seafood": false,
                "avg_calories": 250,
                "cuisine": "อาหาร",
                "img" : "/img/food/chicken-salad.jpg" 
            },
            {
                "foodname":  "แกงป่า",
                "spicy": true,
                "seafood": false,
                "avg_calories": 350,
                "cuisine": "อาหาร",
                "img" : "/img/food/kang-forest-chicken.jpg" 
            },
            {
                "foodname":  "หมูน้ำตก",
                "spicy": true,
                "seafood": false,
                "avg_calories": 350,
                "cuisine": "อาหาร",
                "img" : "/img/food/muu-numtok.jpg" 
            },
            {
                "foodname":  "น้ำตกหมู",
                "spicy": true,
                "seafood": false,
                "avg_calories": 350,
                "cuisine": "อาหาร",
                "img" : "/img/food/muu-numtok.jpg" 
            },
            {
                "foodname":  "ปูผัดผงกระหรี่",
                "spicy": false,
                "seafood": true,
                "avg_calories": 400,
                "cuisine": "อาหาร",
                "img" : "/img/food/puu-pad-curry.jpg" 
            },
            {
                "foodname":  "กุ้งผัดพริกเผา",
                "spicy": true,
                "seafood": true,
                "avg_calories": 250,
                "cuisine": "อาหาร",
                "img" : "/img/food/kung-pad-prik-pao.jpg" 
            },
            {
                "foodname":  "ข้าวผัดปู",
                "spicy": false,
                "seafood": true,
                "avg_calories": 350,
                "cuisine": "อาหาร",
                "img" : "/img/food/kao-pad-puu.jpg" 
            },
            {
                "foodname":  "ปลากระพงนึ่งมะนาว",
                "spicy": true,
                "seafood": true,
                "avg_calories": 250,
                "cuisine": "อาหาร",
                "img" : "/img/food/prakaphong-manow.jpg" 
            },
            {
                "foodname":  "ก๋วยเตี๋ยวเรือ",
                "spicy": false,
                "seafood": false,
                "avg_calories": 350,
                "cuisine": "อาหาร",
                "img" : "/img/food/noodles-boat.jpg" 
            }, {
                "foodname": "บิงซู",
                "spicy": false,
                "seafood": false,
                "avg_calories": 500,
                "cuisine": "ของหวาน",
                "img" : "/img/food/bingsu.jpg"
            },
            {
                "foodname": "ขนมโตเกียว",
                "spicy": false,
                "seafood": false,
                "avg_calories": 150,
                "cuisine": "ของหวาน",
                "img" : "/img/food/tokyo.jpg"
            },
            {
                "foodname": "ชูครีม",
                "spicy": false,
                "seafood": false,
                "avg_calories": 130,
                "cuisine": "ของหวาน",
                "img" : "/img/food/cream-puffs.jpg"
            },
            {
                "foodname": "ชานมไข่มุก",
                "spicy": false,
                "seafood": false,
                "avg_calories": 255,
                "cuisine": "ของหวาน",
                "img" : "/img/food/bubble-tea.jpg"
            },
            {
                "foodname": "โมจิ",
                "spicy": false,
                "seafood": false,
                "avg_calories": 96,
                "cuisine": "ของหวาน",
                "img" : "/img/food/moji.jpg"
            },
            {
                "foodname": "หมั่นโถว",
                "spicy": false,
                "seafood": false,
                "avg_calories": 295,
                "cuisine": "ของหวาน",
                "img" : "/img/food/mantou.jpg"
            },
            {
                "foodname": "ข้าวเหนียวมะม่วง",
                "spicy": false,
                "seafood": false,
                "avg_calories": 325,
                "cuisine": "ของหวาน",
                "img" : "/img/food/kao-neaw-mango.jpg"
            },
            {
                "foodname": "ข้าวเหนียวทุเรียน",
                "spicy": false,
                "seafood": false,
                "avg_calories": 340,
                "cuisine": "ของหวาน",
                "img" : "/img/food/kao-neaw-durian.jpg"
            },
            {
                "foodname": "กล้วยบวชชี",
                "spicy": false,
                "seafood": false,
                "avg_calories": 250,
                "cuisine": "ของหวาน",
                "img" : "/img/food/banana-bude-she.jpg"
            },
            {
                "foodname": "โดนัท",
                "spicy": false,
                "seafood": false,
                "avg_calories": 20,
                "cuisine": "ของหวาน",
                "img" : "/img/food/donut.jpg"
            },
            {
                "foodname": "มาการอง",
                "spicy": false,
                "seafood": false,
                "avg_calories": 100,
                "cuisine": "ของหวาน",
                "img" : "/img/food/macaron.jpg"
            },
            {
                "foodname": "เอแกลร์",
                "spicy": false,
                "seafood": false,
                "avg_calories": 260,
                "cuisine": "ของหวาน",
                "img" : "/img/food/eclairs.jpg"
            },
            {
                "foodname": "เฉาก๊วย",
                "spicy": false,
                "seafood": false,
                "avg_calories": 90,
                "cuisine": "ของหวาน",
                "img" : "/img/food/black-jelly.jpg"
            },
            {
                "foodname": "บราวนี่",
                "spicy": false,
                "seafood": false,
                "avg_calories": 350,
                "cuisine": "ของหวาน",
                "img": "/img/food/Chocolate-Brownie.jpg"
            },
            {
                "foodname": "พุดดิ้ง",
                "spicy": false,
                "seafood": false,
                "avg_calories": 180,
                "cuisine": "ของหวาน",
                "img": "/img/food/Pudding.jpg"
            },
            {
                "foodname": "ไก่ทอด",
                "spicy": false,
                "seafood": false,
                "avg_calories": 350,
                "cuisine": "อาหาร",
                "img": "/img/food/Crispy-fried-chicken.jpg.webp"
            },
            {
                "foodname": "แกงเขียวหวาน",
                "spicy": true,
                "seafood": false,
                "avg_calories": 280,
                "cuisine": "อาหาร",
                "img": "/img/food/Chicken-Green-Curry.jpg"
            },
            {
                "foodname": "พิซซ่า",
                "spicy": false,
                "seafood": false,
                "avg_calories": 400,
                "cuisine": "อาหาร",
                "img": "/img/food/Pizza.jpg"
            },
            {
                "foodname": "ทาร์ต",
                "spicy": false,
                "seafood": false,
                "avg_calories": 260,
                "cuisine": "ของหวาน",
                "img": "/img/food/Tart.jpg"
            },
            {
                "foodname": "หอยทอด",
                "spicy": false,
                "seafood": true,
                "avg_calories": 200,
                "cuisine": "อาหาร",
                "img": "/img/food/Fried-oysters.jpg"
            },
            {
                "foodname": "ซูชิ",
                "spicy": false,
                "seafood": true,
                "avg_calories": 40,
                "cuisine": "อาหาร",
                "img": "/img/food/Sushi.jpg"
            },
            {
                "foodname": "ซาชิมิ",
                "spicy": false,
                "seafood": true,
                "avg_calories": 60,
                "cuisine": "อาหาร",
                "img": "/img/food/Sashimi.jpg"
            },
            {
                "foodname": "อุนิกิริ",
                "spicy": false,
                "seafood": true,
                "avg_calories": 70,
                "cuisine": "อาหาร",
                "img": "/img/food/Unigiri.jpg"
            },
            {
                "foodname": "ยากิโซบะ",
                "spicy": false,
                "seafood": true,
                "avg_calories": 150,
                "cuisine": "อาหาร",
                "img": "/img/food/Yakisoba.jpg"
            },
            {
                "foodname": "โรลน้ำสลัด",
                "spicy": false,
                "seafood": true,
                "avg_calories": 90,
                "cuisine": "อาหาร",
                "img": "/img/food/Salad-Dressing-Rolls.jpg"
            },
            {
                "foodname": "เทมปุระ",
                "spicy": false,
                "seafood": true,
                "avg_calories": 180,
                "cuisine": "อาหาร",
                "img": "/img/food/Tempura.jpg"
            },
{
    "foodname": "บราวนี่ช็อคโกแลต",
    "spicy": false,
    "seafood": false,
    "avg_calories": 350,
    "cuisine": "ของหวาน",
    "img": "/img/food/chocolate-brownie.jpg"
},
{
    "foodname": "พุดดิ้ง",
    "spicy": false,
    "seafood": false,
    "avg_calories": 180,
    "cuisine": "ของหวาน",
    "img": "/img/food/pudding.jpg"
},

{
    "foodname": "ทาร์ตสตรอเบอรี่",
    "spicy": false,
    "seafood": false,
    "avg_calories": 260,
    "cuisine": "ของหวาน",
    "img": "/img/food/strawberry-tart.jpg"
},
{
    "foodname": "เฟรนช์ฟรายส์",
    "spicy": false,
    "seafood": false,
    "avg_calories": 330,
    "cuisine": "ของกินเล่น",
    "img": "/img/food/french-fries.jpg"
},
{
    "foodname": "โรตี",
    "spicy": false,
    "seafood": false,
    "avg_calories": 550,
    "cuisine": "ของหวาน",
    "img": "/img/food/roti.jpg"
},
{
    "foodname": "ขนมปังปิ้ง",
    "spicy": false,
    "seafood": false,
    "avg_calories": 390,
    "cuisine": "ของหวาน",
    "img": "/img/food/toast.jpg"
},
{
    "foodname": "บ้าบิ่น",
    "spicy": false,
    "seafood": false,
    "avg_calories": 140,
    "cuisine": "ของหวาน",
    "img": "/img/food/baa-bin.jpg"
},
{
    "foodname": "แพนเค้ก",
    "spicy": false,
    "seafood": false,
    "avg_calories": 227,
    "cuisine": "ของหวาน",
    "img": "/img/food/pancake.jpg"
},
{
    "foodname": "แฮชบราวน์",
    "spicy": false,
    "seafood": false,
    "avg_calories": 326,
    "cuisine": "ของกินเล่น",
    "img": "/img/food/hash-brows.jpg"
},
{
    "foodname": "ชีสเค้ก",
    "spicy": false,
    "seafood": false,
    "avg_calories": 325,
    "cuisine": "ของหวาน",
    "img": "/img/food/cheesecake.jpg"
},
{
    "foodname": "คัพเค้ก",
    "spicy": false,
    "seafood": false,
    "avg_calories": 305,
    "cuisine": "ของหวาน",
    "img": "/img/food/cupcake.jpg"
},
{
    "foodname": "เค้กกล้วยหอม",
    "spicy": false,
    "seafood": false,
    "avg_calories": 213,
    "cuisine": "ของหวาน",
    "img": "/img/food/bananacake.jpg"
},
            {
                "foodname": "ครีมซุป",
                "spicy": false,
                "seafood": false,
                "avg_calories": 220,
                "cuisine": "อาหาร",
                "img": "/img/food/Mushroomsoup.jpg"
            },
            {
                "foodname": "ทาโก้",
                "spicy": true,
                "seafood": false,
                "avg_calories": 300,
                "cuisine": "อาหาร",
                "img": "/img/food/Taco.jpg"
            },
            {
                "foodname": "หมูบดทอด",
                "spicy": false,
                "seafood": false,
                "avg_calories": 240,
                "cuisine": "อาหารฝรั่งเศษ",
                "img": "/img/food/fried-pork-bod.jpg"
            },
            {
                "foodname": "มันบด",
                "spicy": false,
                "seafood": false,
                "avg_calories": 250,
                "cuisine": "อาหาร",
                "img": "/img/food/Potato-bod.jpg"
            },
            {
                "foodname": "กิมจิ",
                "spicy": true,
                "seafood": false,
                "avg_calories": 15,
                "cuisine": "อาหาร",
                "img": "/img/food/kimji.jpg"
            },
            {
                "foodname": "มัสมั่น",
                "spicy": true,
                "seafood": false,
                "avg_calories": 300,
                "cuisine": "อาหาร",
                "img": "/img/food/masmankai.jpg"
            },
            {
                "foodname": "ส้มตำ",
                "spicy": true,
                "seafood": true,
                "avg_calories": 150,
                "cuisine": "อาหาร",
                "img": "/img/food/somtam.jpg"
            },
            {
                "foodname": "ลาซันย่า",
                "spicy": false,
                "seafood": false,
                "avg_calories": 350,
                "cuisine": "อาหาร",
                "img": "/img/food/lazanya.jpg"
            },
            {
                "foodname": "หมูสะเต๊ะ",
                "spicy": false,
                "seafood": false,
                "avg_calories": 200,
                "cuisine": "อาหาร",
                "img": "/img/food/stea-pork.jpg"
            },
            {
                "foodname": "หอยจ้อ",
                "spicy": false,
                "seafood": true,
                "avg_calories": 90,
                "cuisine": "อาหาร",
                "img": "/img/food/hoijor.jpg"
            },
            {
                "foodname": "เป็ดปัดกิ่ง",
                "spicy": false,
                "seafood": false,
                "avg_calories": 300,
                "cuisine": "อาหาร",
                "img": "/img/food/pedpadking.jpg"
            },
            {
                "foodname": "ติ่มซำ",
                "spicy": false,
                "seafood": true,
                "avg_calories": 100,
                "cuisine": "อาหาร",
                "img": "/img/food/timsome.jpg"
            }
        ];


    const display = () => {
      const img1 = document.getElementById("img1") ; 
      const img2 = document.getElementById("img2") ; 
      const img3 = document.getElementById("img3") ; 

      const name1 = document.getElementById("name1");
      const name2 = document.getElementById("name2");
      const name3 = document.getElementById("name3");

      const info1 = document.getElementById("info1");
      const info2 = document.getElementById("info2");
      const info3 = document.getElementById("info3");

      const link1 = document.getElementById("link1");
      const link2 = document.getElementById("link2");
      const link3 = document.getElementById("link3");

      const ratingLabel1 = document.getElementById("ratingLabel1");
      const ratingLabel2 = document.getElementById("ratingLabel2");
      const ratingLabel3 = document.getElementById("ratingLabel3");

      img1.src = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=300&maxheight=200&photoreference=" + placesArr[0].photos[0].photo_reference + "&key=AIzaSyBMZt-WtD0bzzDbDDACLQF0KoLFKsW5qQ4" ; 
      img2.src = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=300&maxheight=200&photoreference=" + placesArr[1].photos[0].photo_reference + "&key=AIzaSyBMZt-WtD0bzzDbDDACLQF0KoLFKsW5qQ4" ; 
      img3.src = "https://maps.googleapis.com/maps/api/place/photo?maxwidth=300&maxheight=200&photoreference=" + placesArr[2].photos[0].photo_reference + "&key=AIzaSyBMZt-WtD0bzzDbDDACLQF0KoLFKsW5qQ4" ; 

      name1.innerHTML = placesArr[0].name ; 
      name2.innerHTML = placesArr[1].name ; 
      name3.innerHTML = placesArr[2].name ; 

      info1.innerHTML = placesArr[0].vicinity ;
      info2.innerHTML = placesArr[1].vicinity ;
      info3.innerHTML = placesArr[2].vicinity ;

      link1.href = "https://www.google.com/search?q=" + placesArr[0].name ;
      link2.href = "https://www.google.com/search?q=" + placesArr[1].name ;
      link3.href = "https://www.google.com/search?q=" + placesArr[2].name ;

      ratingLabel1.innerHTML = placesArr[0].rating + "&#11088;"; 
      ratingLabel2.innerHTML = placesArr[1].rating + "&#11088;"; 
      ratingLabel3.innerHTML = placesArr[2].rating + "&#11088;"; 
    }

  document.addEventListener('DOMContentLoaded', async () => {
    // set food idx
    let strNum = document.cookie;
    let stidx = strNum.indexOf("num=") + 4, edidx = strNum.indexOf("; foodname=");
    let temp = strNum.substring(stidx, edidx);
    let num = Number(temp);

    console.log(document.cookie);
    console.log("temp : " + temp);

    if (!isNaN(num) && Number.isInteger(num) && num >= 0 && num < foodList.length) {
      const foodTitleName = document.getElementById("foodTitleName");
      const foodImg = document.getElementById("foodImg");

      foodTitleName.innerHTML = foodList[num].foodname;
      foodImg.src = foodList[num].img;

      if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(async (position) => {
          const latitude = position.coords.latitude;
          const longitude = position.coords.longitude;

          const apiUrl = `proxy.php?lat=${latitude}&lng=${longitude}`;

          try {
            const response = await fetch(apiUrl);
            const data = await response.json();

            if (data.status === 'OK') {
              placesArr = data.results;
              display();
            } else {
              console.error('Error:' + data.status);
              $('#errorModal').modal('show')

              //location.assign("https://kinraid.com/index");
              // Handle the error as needed
            }
          } catch (error) {
            console.error('Fetch error:' + error);
            $('#errorModal').modal('show')
            //location.assign("https://kinraid.com/index");
            // Handle the error as needed
          }
        }, (error) => {
          console.error('Geolocation error:' + error);
          $('#errorModal').modal('show')
          //location.assign("https://kinraid.com/index");
        });
      } else {
        alert('Geolocation is not supported by your browser.');
      }
    } else {
      console.error("Invalid food data or index");
      $('#errorModal').modal('show')
      //location.assign("https://kinraid.com/index");
    }
  });
  </script>
    </body>
</html>
