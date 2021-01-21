<?php
    session_start();
    include('connect.php');

    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/price.css?v=<?=time();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
</head>
<body>
    <div class="main-container" >
        <div id="navbar">
            <?php if ($_SESSION["accountID"] == "")
            {
            ?>
                <a href="login.php" class="animate__animated animate__heartBeat">เข้าสู่ระบบ</a>

            <?php
            }
            else{
            ?>
                <button onclick="myFunction()" class="dropbtn"><i class="fa fa-user"></i> ยินดีต้อนรับ <?=$_SESSION["accountName"];?></button>
                <div id="myDropdown" class="dropdown-content">
                    <a href="forwork.php">จ้างงาน</a><br>
                    <a href="workschedule.php">ตารางงาน</a><br>
                    <?php
                    if($_SESSION['accountAdmin'] >= 1){
                    ?>
                        <a href="admin.php">จัดการงาน</a><br>
                    <?php
                    }
                    ?>
                    <a onclick="clickme()" style="cursor:pointer;">ออกจากระบบ</a><br>
                </div>
            <?php
                }
            ?>
            <a href="contact.php" class="animate__animated animate__heartBeat">CONTACT</a>
            <a href="price.php" class="animate__animated animate__heartBeat">ราคาถ่ายภาพต่างๆ</a>
            <a href="event.php" class="animate__animated animate__heartBeat">EVENT</a>
            <a href="wedding.php" class="animate__animated animate__heartBeat">WEDDING</a>
            <a href="prewedding.php" class="animate__animated animate__heartBeat">PRE WEDDING</a>
            <a href="graduation.php" class="animate__animated animate__heartBeat">GRADUATION</a>
            <a href="index.php" class="animate__animated animate__heartBeat">HOME</a>
            <div class="navbar-left">
                <a style="margin-left: 20px;" href="#HOME" class="animate__animated animate__heartBeat">Photographer</a>
            </div>
        </div>
        <div class="mainbody">
            <h1>Price List</h1>
            <br>
            <h3>ค่าบริการถ่ายภาพพรีเวดดิ้ง, งานแต่งและงานหมั้น, งานรับปริญญา, งานอีเว้นท์และปาร์ตี้</h3>
            <br>
            <br>
            <div class="bodybutton">
                <button class="facebookbutton">
                    <a href="https://www.facebook.com/profile.php?id">
                        <i class="fa fa-facebook"></i>
                        Facebook
                    </a>        
                </button>
                <button class="linebutton">
                    <a href="#">
                        <img src="img/Icon-Line.png">Line
                    </a>   
                </button>
            </div>
            <br>
            <br>              
            <h3>Line ID: @ ######### ● 099-999-9998</h3>

            <div class="linear">
                <img src="img/2.png">
            </div>   

            <div class="congrad">
                <img src="img/Graduation/grad2.jpg">
                <h3>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i> รับปริญญา Graduation
                </h3>
                <h4>
                    รับปริญญา วันซ้อม/รับจริง (วันที่ต้องมีการเข้าหอประชุม)
                </h4>
                <h5 class="h51">
                    <i class="fa fa-hourglass-half" aria-hidden="true"></i> เต็มวัน 4,000 บาท (เช้าก่อนเข้าหอประชุม จนถึงเย็นหลังออกจากหอประชุม)
                </h5>
                <h5 class="h52">
                    <i class="fa fa-hourglass-half" aria-hidden="true"></i> ครึ่งวัน 3,000 บาท (เช้าหรือเย็น ก่อนเข้า-ออกจากห้องประชุม ประมาณ 4 ชั่วโมง)
                </h5>
                <h5 class="h53">
                    (***สำหรับวัน Photo day ที่ไม่มีการเข้าหอประชุม นับเต็มวัน 8 ชั่วโมงครับ ส่วนครึ่งวันประมาณ 4 ชั่วโมง)
                </h5>
                <h6 class ="h61">
                    <i class="fa fa-gift" aria-hidden="true"></i> สิ่งที่ได้รับหลังจากเสร็จงาน
                </h6>
                <h6 class ="h62">
                    1.อัดภาพขนาด 4x6 จำนวน 40 รูป
                </h6>
                <h6 class ="h63">
                    2.อัดภาพขนาด 8x12 จำนวน 1 รูป
                </h6>
                <h6 class ="h64">
                    3.อัดภาพโปสเตอร์ขนาด 10x15 จำนวน 1 รูป
                </h6>
                <h6 class ="h65">
                    4.ได้รับไฟล์ภาพที่ปรับแสงสีทุกใบที่ถ่ายในวันนั้น
                </h6>
                <h6 class ="h66">
                    5.ลงแผ่น DVD พร้อมสกีนปกสวยงาม
                </h6>
                <h6 class ="h71">
                    นอกรอบ หรือวันที่ไม่มีการรับปริญญา (ราคาเดียว)
                </h6>
                <h6 class ="h72">
                    <i class="fa fa-hourglass-half" aria-hidden="true"></i> ครึ่งวัน 3,500 บาท (4 ชั่วโมง)
                </h6>
                <h6 class ="h73">
                    <i class="fa fa-hourglass-half" aria-hidden="true"></i> เต็มวัน 4,500 บาท (8 ชั่วโมง)
                </h6>
                <h6 class ="h81">
                    นอกรอบ แบบมาเป็นกลุ่ม
                </h6>
                <h6 class ="h82">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> คิดคนแรก 4,000 บาท คนต่อไปเพิ่มหัวละ 800 บาท
                </h6>
                <h6 class ="h83">
                    อัดภาพขนาด 4x6 คนละ 20 รูป
                </h6>
                <h6 class ="h84">
                    อัดภาพโปสเตอร์ขนาด 10x15 คนละ 1 รูป
                </h6>
                <h6 class ="h85">
                    ลงแผ่น DVD พร้อมสกีนปกสวยงาม
                </h6>
                <h6 class ="h91">
                    ถ่ายไม่จำกัดจำนวน
                </h6>
                <h6 class ="h92">
                    แต่งภาพแสงสีปกติใสๆ ให้ทุกใบ และทำการรีทัชพิเศษ เช่น ลบสิ้ว ริ้วรอย
                </h6>
                <h6 class ="h93">
                    <i class="fa fa-spinner" aria-hidden="true"></i> ระยะเวลาส่งงาน 2-4 สัปดาห์ หลังถ่ายภาพ
                </h6>
                <h6 class ="h94">
                    มัดจำ 1,000 บาท เพื่อจองวันครับผม
                </h6>
                <h6 class ="h95">
                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i> ยังไม่รวมค่าเดินทางและที่พัก(กรณีต้องค้างคืน)
                </h6>
            </div> 
            <div class="prewedding">
                <img src="img/Pre wedding/pre6.jpg">
                <h6 class="p">
                    <i class="fa fa-camera" aria-hidden="true"></i> พรีเวดดิ้ง Pre Wedding
                </h6>
                <h6 class="p1">
                    <i class="fa fa-hourglass-half" aria-hidden="true"></i> Package 5,500 (4 ชั่วโมง)
                </h6>
                <h6 class="p2">
                    <i class="fa fa-hourglass-half" aria-hidden="true"></i> Package 6,500 (8 ชั่วโมง)
                </h6>
                <h6 class="p3">
                    บ่าว-สาว เตรียมชุดมาเอง ไม่จำกัดจำนวนชุด
                </h6>
                <h6 class="p4">
                    ได้รับไฟล์ ทั้งหมด โดยไม่ต้องซื้อเพิ่ม
                </h6>
                <h6 class="p5">
                    แต่งภาพแสงสีปกติใสๆ ให้ทุกใบ แต่งพิเศษให้อีกอย่างน้อย 30 รูป
                </h6>
                <h6 class="p6">
                    ส่งงาน DVD BOXSET พร้อมสกรีนหน้าปกสวยงาม
                </h6>
            </div>   
            <div class="wedding">
                <img src="img/Wedding/wed4.jpg">
                <h6 class="w">
                    <i class="fa fa-heartbeat" aria-hidden="true"></i> พิธีแต่งงาน Wedding Ceremony
                </h6>
                <h6 class="w1">
                    งานพิธีเช้า
                </h6>
                <h6 class="w2">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> ภาพนิ่ง 1 คน 5,000 บาท
                </h6>
                <h6 class="w3">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> ภาพนิ่ง 2 คน 10,000 บาท
                </h6>
                <h6 class="w4">
                    งานพิธีเย็น
                </h6>
                <h6 class="w5">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> ภาพนิ่ง 1 คน และผู้ช่วย 1 คน 6,000 บาท
                </h6>
                <h6 class="w6">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> ภาพนิ่ง 2 คน และผู้ช่วย 1 คน 11,000 บาท
                </h6>
                <h6 class="w7">
                    งานพิธีเช้า + เลี้ยงกลางวัน
                </h6>
                <h6 class="w8">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> ภาพนิ่ง 1 คน และผู้ช่วย 1 คน 8,000 บาท
                </h6>
                <h6 class="w9">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> ภาพนิ่ง 2 คน และผู้ช่วย 1 คน 12,000 บาท
                </h6>
                <h6 class="w10">
                    งานพิธีเช้า + งานพิธีเย็น
                </h6>
                <h6 class="w11">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> ภาพนิ่ง 1 คน และผู้ช่วย 1 คน 11,000 บาท
                </h6>
                <h6 class="w12">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i> ภาพนิ่ง 2 คน และผู้ช่วย 1 คน 16,500 บาท
                </h6>
                <h6 class="w13">
                    ราคาทั้งหมดมาพร้อมชุดไฟสตูดิโอหน้า Backdrop 2 ดวง ไฟส่องสว่างหน้างาน และไฟนำเข้างานเลี้ยงฉลอง
                </h6>
                <h6 class="w14">
                    ถ่ายไม่จำกัดจำนวน และให้ไฟล์ภาพทั้งหมด
                </h6>
                <h6 class="w15">
                    แต่งภาพแสงสีปกติใสๆ ให้ทุกใบ
                </h6>
                <h6 class="w16">
                    <i class="fa fa-spinner" aria-hidden="true"></i> ระยะเวลาส่งงาน 2-4 สัปดาห์ หลังถ่ายภาพ ส่งงานเป็น DVD ทาง EMS
                </h6>
                <h6 class="w17">
                    มัดจำเพื่อจองวันครับผม
                </h6>
                <h6 class="w18">
                    อัดภาพขนาด 4x6 จำนวน 100 ภาพ
                </h6>
                <h6 class="w19">
                    ใน กทม ไม่คิดค่าเดินทางและที่พัก
                </h6>
            </div>
            <div class="event">
                <img src="img/Event+/2.jpg">
                <h6 class="e">
                    <i class="fa fa-birthday-cake" aria-hidden="true"></i> งาน Event
                </h6>
                <h6 class="e1">
                    <i class="fa fa-hourglass-half" aria-hidden="true"></i> ครึ่งวัน 3,000 ( 4 ชม.)
                </h6>
                <h6 class="e2">
                    <i class="fa fa-hourglass-half" aria-hidden="true"></i> เต็มวัน 4,000 ( 8 ชม.)
                </h6>
                <h6 class="e3">
                    - ได้รับไฟล์ภาพที่ปรับแสงสีทุกใบที่ถ่ายในวันนั้น
                </h6>
                <h6 class="e4">
                    - ลงแผ่น DVD พร้อมสกีนปกสวยงาม
                </h6>
                <h6 class="e10">
                    <i class="fa fa-bullhorn" aria-hidden="true"></i> ราคาสำหรับงานต่างจังหวัด
                </h6>
                <h6 class="e11">
                    - ราคาเเต่ละงาน ขึ้นอยู่กับข้อตกลงระหว่างลูกกับช่างภาพ
                </h6>
                <h6 class="e12">
                    - ราคายังไม่รวมค่าเดินทางเเละที่พัก ในกรณีที่มีการค้างคืน
                </h6>
                <h6 class="e5">
                    <i class="fa fa-info" aria-hidden="true"></i> รายละเอียดการติดต่อ และชำระเงินจอง
                </h6>
                <h6 class="e6">
                    โทรตรวจสอบและคุยรายละเอียดงานก่อนได้ที่ 099-999-9999 (Haha)
                </h6>
                <h6 class="e7">
                    facebook:<a href="https://www.facebook.com/profile.php?id"> https://www.facebook.com/profile.php?id</a>
                </h6>
                <h6 class="e8">
                    Line ID: @bboyphoto
                </h6>
                <h6 class="e9">
                    เพื่อตกลงวันที่ต้องการถ่ายภาพ
                </h6>
            </div>         
        </div>
    </div>
</div>
<footer>
    <div class="foot">
        <span>Copyright Website Photographer © 2021 Design by ท็อปโครตกีม</span>
    </div>
</footer>
</body>
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
function clickme(){
      swal({
          title: "ออกจากระบบ",
          text: "คุณออกจากระบบสำเร็จ!",
          type: "success",
          showButtonCancel: true,
      }, function(isConfirm) {
              if(isConfirm){
                  window.location = "logout.php";
              }
              if(isCancel){
                  window.location = "logout.php";
              }
      });
  }
</script>
</html>