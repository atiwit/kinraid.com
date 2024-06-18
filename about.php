<?php 

session_start();

error_reporting(E_ERROR | E_PARSE);

?>

<!doctype html>

<html>

    <head>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel=”icon” href="img/kinraid.jpg" />
        <link rel="stylesheet" href="js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, user-scalable=no">
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

          <a class="nav-link active" href="about">เกี่ยวกับเรา</a>

          <a class="nav-link" href="help_center">ศูนย์ช่วยเหลือ</a>

      </ul>
      <?php if( $_SESSION['logged_in']): ?>
        <p class="h5 text-light" style="font-size: 24px; color: #FFFFFF;"><?php echo $_SESSION['name'];?>&nbsp;&nbsp;&nbsp;</p>
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

            <img src="img/about.png" class="w-100 d-block" alt="First slide" style="max-width: 100%; height: 200px;">

            <div class="carousel-caption d-none d-md-block">

              <div style="text-align: left;">

              <h1 style="color: #0E06FF;">เกี่ยวกับเรา &nbsp;<svg width="90" height="90"><image xlink:href="https://svgsilh.com/svg/1085695.svg" width="90" height="90"/> </svg></h1>

              <p style="color: red;">ทางทีมงามเราทำโปรเจ็คนี้เพื่อสุ่มอาหารของท่านในการคิดเมนูอาหารของท่าน<p>

            </div>

            </div>

        </div>

        

    </div>

</div>



<br>

    <div class="container d-flex justify-content-center">

          <div>

          <h1 style="color: #0E06FF; text-align: center;">ทำไมต้อง KinRai-D</h1>

          <p>KinRai-D มีความคิดในการแก้ปัญหา แนวชึวิตประจำวัน ทำให้เกิดแนวคิดการทำ

            เว็ปไซต์ KinRai-D เพื่อตอบโจทย์ user ที่ต้องการคิดเมนูอาหารในชีวิตประจำวัน

          </p>

        </div>

    </div>

    <div class="container bg-light border w-75">

    <div class="container my-4">

      <h4 style="font-weight:bold;color: #0E06FF;">

        จุดเริ่มต้น

      </h4>

    </div>

    <p>

    กลางวันนี้จะกินอะไรดี? เย็นนี้จะกินอะไรดี? พรุ่งนี้กินอะไรดี? ถือว่าเป็นปัญหาใหญ่ที่รบกวนใจใครหลายๆ คน ที่อยู่คนเดียว เบื่อที่จะคิดอาหารในเเต่ละวัน

 หรือ คนที่มีเพื่อน มีครอบครัว อาจจะต้องคิดหนักเพื่อตกลงเลือกอาหาร อาจถึงขั้นทะเลาะกันได้ ซึ่งได้ถือว่าเป็นปัญหามาอย่างยาวนาน พวกเราจึงอยากนำเสนอเว็บที่พวกเราสร้างขึ้นมาเพื่อขจัดปัญหาเหล่านี้ให้หมดไป โดยทางเราจะคัดสรรอาหาร

ตามขอบเขตที่ผู้ใช้กำหนดมาแล้ว แนะนำให้ผู้ใช้ได้</p>

  </div>

  <br><br>



<img src="img/ggg.jpg" class="w-100 d-block img-fluid " alt="First slide" style="object-fit: cover;">

<div class="container">

<div class="container my-5">

    <i class="bi bi-universal-access"></i>

        <h1 style="text-align: center; color: #0E06FF;">ด้วยทีมงานของเราเป็นคนรุ่นใหม่</h1>

        <p style="text-align: center; color: red  ;">เราจะมุ่งมั่นตั้งใจให้เว็บนี้ให้มีคุณภาพ ทันสมัยเเละให้บริการท่านด้านเว็บไซต์ให้ดีที่สุด</p>

  </div>

  <div class="row">

    <div class="col-12 col-md-4">

        <div class="card border-0">

            <img class="img-fluid rounded-circle" src="https://media.discordapp.net/attachments/1134507092493996196/1156958275024191528/IMG_6984.jpg?ex=6516dcdc&is=65158b5c&hm=5eb5b01af024c568d2684a6e8628b9c725d82eb39b710556b347d9693d2d6405&=" style="height: 400px;object-fit: cover;">

            <div class="card-body" style="text-align: center;">

                <h4 class="card-title">นายอติวิชญ์ ถุงเงิน</h4>

                <p class="card-text">CEO/Coding</p>

                <p class="card-text">โรงเรียนพิบูลวิทยาลัย</p>

            </div>

        </div>

    </div>



    <div class="col-12 col-md-4">

        <div class="card border-0">

            <img class="img-fluid responsive rounded-circle" src="https://cdn.discordapp.com/attachments/888403267497918464/1198295673611767818/50306199_2251795041760769_3459923622414516224_n.jpg?ex=65be62cf&is=65abedcf&hm=df9c3ff0b788f6c58bc8dbc3a9fe66a51b6c38aef53f58b074229f00d5e16ebc&" style="height: 400px;object-fit: cover;">

            <div class="card-body" style="text-align: center;">

                <h4 class="card-title">นายศิวกร ศรีวีระกุล</h4>

                <p class="card-text">Coding</p>

                <p class="card-text">โรงเรียนเบญจมราชูทิศ ราชบุรี</p>

            </div>

        </div>

    </div>



    <div class="col-12 col-md-4">

        <div class="card border-0">

            <img class="img-fluid rounded-circle" src="img/team/p.png" style="height: 400px;">

            <div class="card-body" style="text-align: center;">

                <h4 class="card-title">นายติณณภพ นวจิตไพบูลย์</h4>

                <p class="card-text">Web Designer</p>

                <p class="card-text">โรงเรียนเทพศิรินทร์</p>

            </div>

        </div>

    </div>

    <div class="col-12 col-md-4">

        <div class="card border-0">

            <img class="img-fluid rounded-circle" src="https://media.discordapp.net/attachments/1134507092493996196/1156960091313020988/IMG_0071.jpg?ex=6516de8d&is=65158d0d&hm=c32deb79a25e91483968da166a76d914cc3a2d38c7be1bcaea88ea8713166b81&=" style="height: 400px; object-fit:cover;">

            <div class="card-body" style="text-align: center;">

                <h4 class="card-title">นายธนภูมิ วงษ์ธานี</h4>

                <p class="card-text">Web Designer/Data Researcher</p>

                <p class="card-text">โรงเรียนบางปะกอกวิทยาคม</p>

            </div>

        </div>

    </div>

    <div class="col-12 col-md-4">

        <div class="card border-0" style="text-align: center;">

            <img class="img-fluid rounded-circle" src="https://media.discordapp.net/attachments/1134507092493996196/1156957412599795734/1692348177188.jpg?ex=6516dc0e&is=65158a8e&hm=c81b03fb841eed2af17046d716cee2e51344f5094780410b1f679b3345ada818&=&width=372&height=559" style="height: 400px;object-fit: cover;">

            <div class="card-body">

                <h4 class="card-title">นายอิทธิพันธ์ สนามคุณ</h4>

                <p class="card-text">Web Designer</p>

                <p class="card-text">โรงเรียนเทพศิรินทร์</p>

            </div>

        </div>

    </div>

    <div class="col-12 col-md-4">

        <div class="card border-0" style="text-align: center;">

            <img class="img-fluid rounded-circle" src="img/team/tar.png" style=" height: 400px;">

            <div class="card-body">

                <h4 class="card-title">นายสิทธันต์ อารมณ์ประเสริฐ</h4>

                <p class="card-text">Data Researcher</p>

                <p class="card-text">โรงเรียนบดินทรเดชา (สิงห์สิงหเสนี)</p>

            </div>

        </div>

    </div>

  </div>



</div>

<br><br>

<div class="container">

      <div style="text-align: center;">

      <h1 style="color: #0E06FF;">Our Missions<svg width="60" height="60"><image xlink:href="img/fi.svg" width="60" height="60"/> </svg></h1>

      <p>คือการทำให้ท่านคัดสรรเมนูที่ตอบโจทย์ มาช่วยเลือกเมนูในชีวิตประจำวันของท่านได้ เราจะไม่หยุดพัฒนาเพื่อให้ได้เว็บไซด์สุ่มอาหารที่ดีที่สุด </p>

  </div>

  <div class="card-group">

  <div class="card rounded" style="margin: 0 1.5rem; width: 10em; border-radius: 115px;

background: #FCF5F5; border: none;">

  <div class="card-body">

    <h2 class="card-title" style="color: #0E06FF;">Web Platfrom</h2>

    <p class="card-text">ให้คุณได้ใช้ระบบเว็ปไซต์ที่มีฟีเจอร์ครบถ้วนใช้งานได้ง่าย คนที่ไม่มีประสบการณ์ก็สามารถใช้เว็ปของเราได้</p>

  </div>

</div>

    

<div class="card rounded" style="margin: 0 1.5rem; width: 10em; border-radius: 115px;

background: #FCF5F5; border: none;">

  <div class="card-body">

    <h2 class="card-title" style="color: #0E06FF;">Design</h2>

    <p class="card-text">มี UX/UI ที่สวยงาม เข้าใจได้ง่าย ใช้งานง่าย และพร้อมบริการคัดสรรอาหารให้ท่านได้ใช้เว็ปไซต์ที่มีความสวยงาม สะดวก ดูเป็นมืออาชีพ</p>

  </div>

</div>

    </div>

</div>
<br><br>
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

    </body>

</html>

