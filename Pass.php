<?php
    session_start();
    include('connect.php');

    if($_SESSION['accountID'] == ""){
        echo "<script>alert('Please Login!');</script>";
        echo "<script>window.location='login.php';</script>";
    }

    if($_SESSION['accountAdmin'] < 1)
    {
        echo "<script>alert('คุณไม่ใช่ผู้ดูแล!');</script>";
        echo "<script>window.location='index.php';</script>";
    }

    if(!isset($_GET['username'])){
        echo "<script>alert('ไม่มีข้อมูล!');</script>";
        echo "<script>window.location='admin.php';</script>";
    }

    if(!isset($_GET['ID'])){
        echo "<script>alert('ไม่มีข้อมูล!');</script>";
        echo "<script>window.location='admin.php';</script>";
    }

    $sql = "SELECT * FROM work WHERE Username = '".mysqli_real_escape_string($conn,$_GET['username'])."'";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if($result){

        require("phpmailer/PHPMailerAutoload.php");

        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->isHTML();
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        
        
        $gmail_username = "photograph1151@gmail.com"; // gmail ที่ใช้ส่ง
        $gmail_password = "dogcat1532"; // รหัสผ่าน gmail
        // ตั้งค่าอนุญาตการใช้งานได้ที่นี่ https://myaccount.google.com/lesssecureapps?pli=1
        
        
        
        $sender = "PhotographShop"; // ชื่อผู้ส่ง
        $email_sender = "photograph1151@gmail.com"; // เมล์ผู้ส่ง 
        
        $email_receiver = $result['Email']; // เมล์ผู้รับ ***
        
        $subject = "Accept Work from PhotographShop"; // หัวข้อเมล์
        
        
        $mail->Username = $gmail_username;
        $mail->Password = $gmail_password;
        $mail->setFrom($email_sender, $sender);
        $mail->addAddress($email_receiver);
        $mail->Subject = $subject;
        
        $email_content = "
            <!DOCTYPE html>
            <html>
                <head>
                    <meta charset=utf-8'/>
                    <title>กู้คืนรหัสผ่าน</title>
                </head>
                <body>
                            <h2>PhotographShop</h2>
                            <span style='color:black;'>
                                * ขอบคุณสำหรับการจ้างงานกับเรา, เราได้ทำการยืนยันการจ้างงานของคุณเรียบร้อยแล้ว และจะติดต่อกลับไป! *<br>
                                - ข้อมูล -<br>
                                ชื่อผู้ใช้: ".$_GET['username']."<br>
                                ชื่อ-นามสกุล: ".$result['Name']."<br>
                                Email: ".$result['Email']."<br>
                                เบอร์โทรศัพท์: ".$result['Telephone']."<br>
                                - รายละเอียดงาน -<br>
                                ประเภทงาน: ".$result['TypeWork']."<br>
                                เวลา: ".$result['TimeType']."<br>
                                รายละเอียดเพิ่มเติม: ".$result['Info']."<br>
                                * ".$result['DateTime']." *<br>
                            </span>
                        </div>
                        <div style='margin-top:30px;'>
                            <hr>
                        </div>
                    </div>
                </body>
            </html>
        ";
        
        //  ถ้ามี email ผู้รับ
        if($email_receiver){
            $mail->msgHTML($email_content);
        
        
            if (!$mail->send()) {  // สั่งให้ส่ง email
        
                // กรณีส่ง email ไม่สำเร็จ
                echo "<center>ระบบมีปัญหา กรุณาลองใหม่อีกครั้ง</center>";
                echo $mail->ErrorInfo; // ข้อความ รายละเอียดการ error
            }else{
                // กรณีส่ง email สำเร็จ
                echo "<script>alert('คุณได้ยืนยันการจ้างงานของ ".$_GET['username']." และ ข้อความจะถูกส่งไปยังเมล ".$result['Email']."');</script>";
                echo "<script>window.location='admin.php';</script>";
                //echo "ระบบได้ส่งข้อความไปเรียบร้อย";
            }	
        }

        $query = "DELETE FROM work WHERE Username = '".trim($_GET['username'])."' ";
        $result = mysqli_query($conn, $query);

        /*echo "<script>alert('คุณได้ยืนยันการจ้างงานของ ".$_GET['username']." แล้ว');</script>";
        echo "<script>window.location='admin.php';</script>";*/
    }

?>