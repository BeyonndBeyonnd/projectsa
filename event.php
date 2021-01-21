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
    <link rel="stylesheet" href="css/prewedding.css?v=<?=time();?>">
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
            <h1>EVENT</h1>
            <br>
            <h3>รวมผลงาน ภาพถ่าย EVENT</h3>
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
            <br><br>
            <div class="photo1">
                <div class="Box1">
                    <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Event+/4.jpg"><br><br><br>
                            <h3>HAPPY BIRTHDAY</h3>
                            <h4>hbd</h4><br>    
                        </label>   
                    </div>  
                </div>
                <div class="Box2">
                <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Event+/5.jpg"><br><br><br>
                            <h3>HAPPY BIRTHDAY</h3>
                            <h4>hbd</h4><br>    
                        </label>   
                    </div>  
                </div>    
                <div class="Box3">
                <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Event+/9.jpg"><br><br><br>
                            <h3>ค่ายกิจกรรม</h3>
                            <h4>กิจกรรมวาดฝันปันโอกาส</h4><br>     
                        </label>   
                    </div>  
                </div>          
            </div>
            <br>
            <div class="photo2">
                <div class="Box1">
                    <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Event+/10.jpg"><br><br><br>
                            <h3>ค่ายกิจกรรม</h3>
                            <h4>กิจกรรมวาดฝันปันโอกาส</h4><br>   
                        </label>   
                    </div>  
                </div>
                <div class="Box2">
                <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Event+/8.jpg"><br><br><br>
                            <h3>ค่ายกิจกรรม</h3>
                            <h4>กิจกรรมวาดฝันปันโอกาส</h4><br> 
                        </label>   
                    </div>     
                </div>    
                <div class="Box3">
                <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Event+/8.jpg"><br><br><br>
                            <h3>ค่ายกิจกรรม</h3>
                            <h4>กิจกรรมวาดฝันปันโอกาส</h4><br> 
                        </label>   
                    </div>     
                </div>          
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