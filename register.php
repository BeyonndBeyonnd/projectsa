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
    <link rel="stylesheet" href="css/register.css?v=<?=time();?>">
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
            <form action="checkregister.php" method="POST" id="register1">
                <input class="inputtext" type="text" placeholder="ชื่อผู้ใช้" name="txtuser" autocomplete="off" required>
                <br><br>
                <input class="inputtext" type="text" placeholder="Email" name="txtemail" autocomplete="off" required>
                <br><br>
                <input class="inputtext" type="password" placeholder="รหัสผ่าน" name="ppass" autocomplete="off" required>
                <br>
                <br>
                <input class="inputtext" type="password" placeholder="ยืนยันรหัสผ่าน" name="cppass" autocomplete="off" required>
                <br>
                <br>
                <button id="register2" class="btn effect01" type="submit">สมัครสมาชิก</button>
            </form>
            <br>
            <a href="index.php">กลับสู่หน้าหลัก</a>
            <br>
            <br>
            <p>Copyright Website Photographer © 2021 Design by หำใหญ่ทีม</p>
        </div>
    </div>
</body>
<script type="text/javascript">
    $(document).ready(function()
    {
        $("#register2").click(function(e)
        {
            e.preventDefault();
            $.ajax(
            {
                type: "POST",
                url:  "checkregister.php",
                data: $("#register1").serialize(),
                success:function(result)
                {
                    if(result.status == 1)
                    {
                        swal({
                            title: "สำเร็จ!",
                            text: "คุณสมัครสมาชิกสำเร็จแล้ว!",
                            type: "success",
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
                    else if(result.status == 0)
                    {
                        swal({
                            title: "ผิดพลาด!",
                            text: "ชื่อผู้ใช้นี้ถูกใช้งานแล้ว!",
                            type: "warning",
                            showButtonCancel: true,
                        }, function(isConfirm) {
                                if(isConfirm){
                                    window.location = "register.php";
                                }
                                if(isCancel){
                                    window.location = "register.php";
                                }
                        });
                    }
                    else if(result.status == 4)
                    {
                        swal({
                            title: "ผิดพลาด!",
                            text: "คุณจำเป็นต้องกรอก Username!",
                            type: "warning",
                            showButtonCancel: true,
                        }, function(isConfirm) {
                                if(isConfirm){
                                    window.location = "register.php";
                                }
                                if(isCancel){
                                    window.location = "register.php";
                                }
                        });
                    }
                    else if(result.status == 5)
                    {
                        swal({
                            title: "ผิดพลาด!",
                            text: "คุณจำเป็นต้องกรอก Email!",
                            type: "warning",
                            showButtonCancel: true,
                        }, function(isConfirm) {
                                if(isConfirm){
                                    window.location = "register.php";
                                }
                                if(isCancel){
                                    window.location = "register.php";
                                }
                        });
                    }
                    else if(result.status == 6)
                    {
                        swal({
                            title: "ผิดพลาด!",
                            text: "คุณจำเป็นต้องกรอก รหัสผ่าน!",
                            type: "warning",
                            showButtonCancel: true,
                        }, function(isConfirm) {
                                if(isConfirm){
                                    window.location = "register.php";
                                }
                                if(isCancel){
                                    window.location = "register.php";
                                }
                        });
                    }
                    else if(result.status == 7)
                    {
                        swal({
                            title: "ผิดพลาด!",
                            text: "คุณจำเป็นต้องกรอก ยืนยันรหัสผ่าน!",
                            type: "warning",
                            showButtonCancel: true,
                        }, function(isConfirm) {
                                if(isConfirm){
                                    window.location = "register.php";
                                }
                                if(isCancel){
                                    window.location = "register.php";
                                }
                        });
                    }
                    else if(result.status == 8)
                    {
                        swal({
                            title: "ผิดพลาด!",
                            text: "Email นี้ถูกใช้งานแล้ว!",
                            type: "warning",
                            showButtonCancel: true,
                        }, function(isConfirm) {
                                if(isConfirm){
                                    window.location = "register.php";
                                }
                                if(isCancel){
                                    window.location = "register.php";
                                }
                        });
                    }
                    else if(result.status == 2)
                    {
                        swal({
                            title: "ผิดพลาด!",
                            text: "รหัสทั้งสองช่องไม่ตรงกัน!",
                            type: "error",
                            showButtonCancel: true,
                        }, function(isConfirm) {
                                if(isConfirm){
                                    window.location = "register.php";
                                }
                                if(isCancel){
                                    window.location = "register.php";
                                }
                        });
                    }
                }
            });

        });
    });
</script>
</html>