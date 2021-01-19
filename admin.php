<?php
    session_start();
    include('connect.php');

    error_reporting(0);
    if($_SESSION['accountID'] == ""){
        echo "<script>alert('Please Login!');</script>";
        echo "<script>window.location='login.php';</script>";
    }

    if($_SESSION['accountAdmin'] < 1)
    {
        echo "<script>alert('คุณไม่ใช่ผู้ดูแล!');</script>";
        echo "<script>window.location='index.php';</script>";
    }

    $query = "SELECT * FROM work";
	$result = mysqli_query($conn, $query);
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
    <link href="css/bootstrap.css?v=<?=time();?>" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/admin.css?v=<?=time();?>">
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
            <h1 class="h1line">จัดการรายการ</h1>     
        </div>
        <div class="bodytable">
                <table border="1">
                    <tr>
                        <th width="50">No.</th>
                        <th width="150">ชื่อผู้ใช้</th>
                        <th width="150">ชื่อ-นามสกุล</th>
                        <th width="150">Email</th>
                        <th width="150">เบอร์ติดต่อ</th>
                        <th width="150">ประเภทงานจ้าง</th>
                        <th width="150">Time</th>
                        <th width="150">เพิ่มเติม</th>
                        <th width="150">หมายเหตุ</th>
                    </tr>
                    <?php
                    while($row = mysqli_fetch_array($result))
                    {
                    ?>
                    <tr>
                        <td>#<?php echo $row['ID']; ?></td>
                        <td><?php echo $row['Username']; ?></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Telephone']; ?></td>
                        <td><?php echo $row['TypeWork']; ?></td>
                        <td><?php echo $row['TimeType']; ?></td>
                        <td><?php echo $row['Info']; ?></td>
                        <td><a href="Pass.php?username=<?php echo $row['Username'];?>&ID=<?php echo $row['ID']?>"><button type="button" class="btn btn-success">ยืนยัน</button></a> 
                        <a href="NotPass.php?username=<?php echo $row['Username'];?>&ID=<?php echo $row['ID']?>"><button type="button" class="btn btn-danger">ยกเลิก</button></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                    
                </table>    
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