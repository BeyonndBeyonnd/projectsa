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
    <link rel="stylesheet" href="css/wedding.css?v=<?=time();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
</head>
<body>
    <div class="main-container" >
        <div id="navbaron"></div>
        <div class="mainbody">
            <h1>WEDDING</h1>
            <br>
            <h3>สำหรับคู่รักที่มีรักอันสดใสในหัวใจ ให้เราเก็บภาพความประทับใจให้ครับ ...ติดต่อสอบถามได้ครับ</h3>
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
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="Photo1">
                <div class="Box1">
                    <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Wedding/wed1.jpg">
                        </label>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h3>งานเเต่ง</h3>
                    <h4>งานเเต่ง คุณ กขค จังหวัด ชัยภูมิ 2562</h4>
                    <br>
                </div>
                <div class="Box2">
                    <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Wedding/wed2.jpg">
                        </label>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h3>งานเเต่ง</h3>
                    <h4>งานเเต่ง คุณ กขค จังหวัด ชัยภูมิ 2562</h4>
                    <br>
                </div>
                <div class="Box3">
                    <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Wedding/wed3.jpg">
                        </label>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h3>งานเเต่ง</h3>
                    <h4>งานเเต่ง คุณ กขค จังหวัด ชัยภูมิ 2562</h4>
                    <br>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <div class="Photo2">
                <div class="Box1">
                    <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Wedding/wed4.jpg">
                        </label>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h3>งานเเต่ง</h3>
                    <h4>งานเเต่ง คุณ กขค จังหวัด ชัยภูมิ 2562</h4>
                    <br>
                </div>
                <div class="Box2">
                    <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Wedding/wed5.jpg">
                        </label>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h3>งานเเต่ง</h3>
                    <h4>งานเเต่ง คุณ กขค จังหวัด ชัยภูมิ 2562</h4>
                    <br>
                </div>
                <div class="Box3">
                    <div class="click-zoom">
                        <label>
                            <input type="checkbox">
                            <img src="img/Wedding/wed6.jpg">
                        </label>
                    </div>
                    <br>
                    <br>
                    <br>
                    <h3>งานเเต่ง</h3>
                    <h4>งานเเต่ง คุณ กขค จังหวัด ชัยภูมิ 2562</h4>
                    <br>
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

    $.get("navbar.php", function(data){
        $("#navbaron").replaceWith(data);
    });

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