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
                    <a href="#" class="btn effect01" target="_blank"><span>สมัครสมาชิก</span></a>
                </div>
            </div>

            <br>
            <br>
            <p>Copyright Website Photographer © 2021 Design by หำใหญ่ทีม</p>
        </div>
    </div>
</body>
</html>