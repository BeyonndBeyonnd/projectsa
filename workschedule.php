<?php
    session_start();
    include('connect.php');

    error_reporting(0);
    if($_SESSION['accountID'] == ""){
        echo "<script>alert('Please Login!');</script>";
        echo "<script>window.location='login.php';</script>";
    }
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
    <link rel="stylesheet" href="css/workschedule.css?v=<?=time();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
</head>
<body >
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
            <form action="checkwork.php" method="POST" id="checkwork1">
                <div class="photo1">
                    <div class="Box1"> 
                    <?php 
//var_dump($_POST);



//echo "There was $num days in DEC 2012";
echo "<br />";
//echo " " . date("l", mktime(0, 0, 0, 12, 1, 2012));
$month_set=date("m");
$day_set=1;
$year_set=date("Y");
$now=date("d");

if(isset($_POST['console']))
{
   if($_POST['console']=="<<"&&$_POST['month']=="1")
   {
        $month_set=12;
        $year_set=--$_POST['year'];
   }else if($_POST['console']=="<<")
            {
                $month_set=--$_POST['month'];
                $year_set=$_POST['year'];
            }else if($_POST['console']==">>"&&$_POST['month']=="12")
                    {
                      $month_set=1;
                      $year_set=++$_POST['year'];  
                    }else if($_POST['console']==">>")
                        {
                            $month_set=++$_POST['month'];
                            $year_set=$_POST['year'];
                        }
}else if(isset($_POST['today']))
    {
        $month_set=date("m");
        $day_set=1;
        $year_set=date("Y"); 
    }
$day_count = cal_days_in_month(CAL_GREGORIAN, $month_set, $year_set); //month//year �ӹǹ�����͹���չ���ա���ѹ
$format=date("l", mktime(0, 0, 0, $month_set, $day_set, $year_set));//hour//minute//second//month//day//year �ѹ������ѹ���ѹ����� �� monday 
if($format=='Saturday')
{
    $day_start=7;
}else if($format=='Sunday')
        {
            $day_start=1;
        }else if($format=='Monday')
            {
                $day_start=2;
            }else if($format=='Tuesday')
                {
                    $day_start=3;
                }else if($format=='Wednesday')
                    {
                        $day_start=4;
                    }else if($format=='Thursday')
                        {
                            $day_start=5;
                        }else
                            {
                               $day_start=6; 
                            }
?>

<form method="POST" action="calendar.php">
<div style="margin-left: 550px;"><?php echo date("F-Y", mktime(0, 0, 0, $month_set, $day_set, $year_set)); // ����ѹ�Ѩ�غѹ�ѹ��� ?></div>

<input type="hidden" name="month" value="<?php echo $month_set; ?>" />
<input type="hidden" name="year" value="<?php echo $year_set; ?>" />
<input type="submit" name="today" value="TODAY" /> 
<input type="submit" name="console" value="<<">
<input type="submit" name="console" value=">>">

</form>

 
<table class="table_theme" border="2px"  >
<?php 
   echo "<th> Sunday </th>";//��ǵ��ҧ
   echo "<th> Monday </th>";
   echo "<th> Tuesday </th>";
   echo "<th> Wednesday </th>";
   echo "<th> Thursday </th>";
   echo "<th> Friday </th>";
   echo "<th> Saturday </th>";
   $count=1;
   $day=1;
   //$day_count=31;
   if($day_start>=6&&$day_count>=31)
   {
    $row=0;
   }else if($day_start==1&&$day_count<=28)
    {
        $row=2;
    }else
        {
            $row=1;
        }
   
    for($row; $row<=5; $row++)
    {
       echo "<tr>";
       for($col=0; $col<=6; $col++)//������ժ�ͧ�������紪�ͧ
       {
        echo '<td class="Td_theme" >';
        if($day_start<=$count&&$day<=$day_count)
        {
            if($month_set==date("m")&&$year_set==date("Y")&&$day==$now)//������ત���� �����Ť�
            {
             echo "<div class='now'><h4>*NOW</h4></div>";   
            } 
            echo $day++;
        }
        $count++;
        echo "</td>";
       }
      /* if()
       {
        echo "<td></td>";
       }else if()
        {
          echo "<td></td>";  
        }else if()
            {
              echo "<td></td>";  
            }else if()
                {
                  echo "<td></td>";  
                }else if()
                    {
                      echo "<td></td>";  
                    }else if()
                        {
                          echo "<td></td>";  
                        }else if()
                            {
                              echo "<td></td>";  
                            }
                            */
       
       echo "</tr>";
        						
    }
?>
</table>
                    </div>
                </div> 
            </form>
        </div>
    </div>
</div>
<footer>
    <div class="foot">
        <span>Copyright Website Photographer © 2021 Design by หำใหญ่ทีม</span>
    </div>
</footer>
</body>
<script type="text/javascript">
$(document).ready(function()
{
    $("#checkwork2").click(function(e)
    {
        e.preventDefault();
        $.ajax(
        {
            type: "POST",
            url:  "checkwork.php",
            data: $("#checkwork1").serialize(),
            success:function(result)
            {
                if(result.status == 0)
                {
                    swal({
                        title: "ผิดพลาด!",
                        text: "คุณได้ทำการส่งแบบฟอร์มไปแล้วกรุณารอทางผู้ดูแลยืนยันและติดต่อกลับ!",
                        type: "error",
                        showButtonCancel: true,
                    }, function(isConfirm) {
                            if(isConfirm){
                                window.location = "index.php";
                            }
                            if(isCancel){
                                window.location = "index.php";
                            }
                    });
                }
                else if(result.status == 1)
                {
                    swal({
                        title: "สำเร็จ!",
                        text: "ระบบได้ทำการส่งแบบฟอร์มการจ้างงานไปยังผู้ดูแลแล้ว!",
                        type: "success",
                        showButtonCancel: true,
                    }, function(isConfirm) {
                            if(isConfirm){
                                window.location = "index.php";
                            }
                            if(isCancel){
                                window.location = "index.php";
                            }
                    });
                }
                else if(result.status == 2)
                {
                    swal({
                        title: "ผิดพลาด!",
                        text: "คุณจำเป็นต้องกรอกชื่อของคุณ!",
                        type: "error",
                        showButtonCancel: true,
                    }, function(isConfirm) {
                            if(isConfirm){
                                window.location = "forwork.php";
                            }
                            if(isCancel){
                                window.location = "forwork.php";
                            }
                    });
                }
                else if(result.status == 3)
                {
                    swal({
                        title: "ผิดพลาด!",
                        text: "คุณจำเป็นต้องกรอกเบอร์โทรศัพท์!",
                        type: "error",
                        showButtonCancel: true,
                    }, function(isConfirm) {
                            if(isConfirm){
                                window.location = "forwork.php";
                            }
                            if(isCancel){
                                window.location = "forwork.php";
                            }
                    });
                }
            }
        });

    });
});
</script>
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