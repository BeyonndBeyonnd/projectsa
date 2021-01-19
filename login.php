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
    <link rel="stylesheet" href="css/login.css?v=<?=time();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
</head>
<body>
    <div class="main-container" >
        <div class="logo">
            <h1>Photographer</h1>
            <h3>การเข้าสู่ระบบและสมาชิก</h3>
            <br>
            <form action="checklogin.php" method="POST" id="login1">
                <input class="inputtext" type="text" placeholder="ชื่อผู้ใช้" name="txtuser" autocomplete="off" required>
                <br><br>
                <input class="inputtext" type="password" placeholder="รหัสผ่าน" name="ppass" autocomplete="off" required>
                <br>
                <br>
                <button id="login2" class="btn effect01" type="submit">เข้าสู่ระบบ</button>
            </form>
            <div class="buttons">
                <div class="container">
                    <a href="register.php" class="btn effect01"><span>สมัครสมาชิก</span></a>
                </div>
            </div>
            <a href="index.php">กลับสู่หน้าหลัก</a>
            <br>
            <br>
            <p>Copyright Website Photographer © 2021 Design by ท็อปโครตกีม</p>
        </div>
    </div>
</body>
<script type="text/javascript">
$(document).ready(function()
{
    $("#login2").click(function(e)
    {
        e.preventDefault();
        $.ajax(
        {
            type: "POST",
            url:  "checklogin.php",
            data: $("#login1").serialize(),
            success:function(result)
            {
                if(result.status == 1)
                {
                    swal({
                        title: "สำเร็จ!",
                        text: "คุณเข้าสู่ระบบสำเร็จ!",
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
                else if(result.status == 0)
                {
                    swal({
                        title: "ผิดพลาด!",
                        text: "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง!",
                        type: "error",
                        showButtonCancel: true,
                    }, function(isConfirm) {
                            if(isConfirm){
                                window.location = "login.php";
                            }
                            if(isCancel){
                                window.location = "login.php";
                            }
                    });
                }
            }
        });

    });
});
</script>
</html>