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
    <link rel="stylesheet" href="css/main.css?v=<?=time();?>">
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
            <a onclick="clickme()" class="animate__animated animate__heartBeat"><button class="logoutb"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <?=$_SESSION["accountName"];?></button></a>
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
                <a style="margin-left: 20px;" href="#HOME" class="animate__animated animate__wobble">Photographer</a>
            </div>
        </div>
        <div class="headinfo">
            <div class="banner-head-top" id="home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center" data-sr='enter top'>
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                    <li data-target="#myCarousel" data-slide-to="4"></li>
                                    <li data-target="#myCarousel" data-slide-to="5"></li>
                                    <li data-target="#myCarousel" data-slide-to="6"></li>
                                    <li data-target="#myCarousel" data-slide-to="7"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                    <img src="img/home/home1.jpg" alt="">
                                    </div>

                                    <div class="item">
                                        <img src="img/home/home2.jpg" alt="">
                                    </div>

                                    <div class="item">
                                    <img src="img/home/home3.jpg" alt="">
                                    </div>

                                    <div class="item">
                                    <img src="img/home/home4.jpg" alt="">
                                    </div>

                                    <div class="item">
                                    <img src="img/home/home5.jpg" alt="">
                                    </div>

                                    <div class="item">
                                    <img src="img/home/home6.jpg" alt="">
                                    </div>

                                    <div class="item">
                                    <img src="img/home/home7.jpg" alt="">
                                    </div>

                                    <div class="item">
                                    <img src="img/home/home8.jpg" alt="">
                                    </div>
                                </div>
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bodyinfo">
            <main class="animate__animated animate__bounceInDown">
                <div class="body1">
                    <h3 class="h3header">Photographer</h3>
                    <h3 class="h3body">ประสบการณ์มากมาย จากงานและสถานการณ์ถ่ายภาพหลายรูปแบบ จึงวางใจได้ว่าทุกช่วงเวลาที่สำคัญของคุณลูกค้า จะไม่เกิดข้อผิดพลาดอย่างแน่นอนครับ by Photographer ช่างภาพอารมณ์ดี</h3>
                    <hr style="width:100%; border:1px solid #DADADA;">
                    <h3 class="h3footer">ติดต่อทีมงาน</h3>
                    <div class="bodybutton">
                        <button class="facebookbutton">
                            <a href="#">
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
                    <h3 class="h3footer2">
                        <i class="fa fa-comment" ></i> Line ID: @bboyphoto
                        <br>
                        <br>
                        <i class="fa fa-phone-square"></i> 092-314-3010
                    </h3>
                    <hr style="width:100%; border:1px solid #DADADA;">
                </div>
            </main>
        </div>
    </div>
</div>
<footer>
    <div class="foot">
        <span>Copyright Website Photographer © 2021 Design by หำใหญ่ทีม</span>
    </div>
</footer>
</body>
<script>
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