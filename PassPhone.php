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

    if(!$result){
        echo "<script>alert('ไม่มีข้อมูล!');</script>";
        echo "<script>window.location='admin.php';</script>";
    }

    $sms = new thsms();
    
    $sms->username   = 'justinz'; //จากที่เราสมัครสมาชิก
    $sms->password   = '593972'; //เช็ค SMS บนมือถือของเรา
    
    $a = $sms->getCredit();
    var_dump( $a);
    

    $content_message = "[PhotographShop]
    การจ้างงานคุณได้รับการ (ยืนยัน)
    - ข้อมูล -
    ชื่อ-นามสกุล: ".$result['Name']."
    Email: ".$result['Email']."
    เบอร์โทรศัพท์: ".$result['Telephone']."
    - รายละเอียดงาน -
    ประเภทงาน: ".$result['TypeWork']."
    (เวลา: ".$result['TimeType']." ".$result['Day']."/".$result['Month']."/".$result['Year'].")
    รายละเอียดเพิ่มเติม: ".$result['Info']."
    * ".$result['DateTime']." *
    ";
    $b = $sms->send( '0000', $result['Telephone'], $content_message); 
    //0000 คือหมายเลขผู้ส่ง , 0948616709 คือ หมายเลขที่ส่งถึง, 'ทดสอบส่ง SMS by devbanban.com ' คือข้อความที่ส่งออกไป
    var_dump( $b);

    if($result['Telephone']){
        echo "<script>window.location='confirmlist.php?username=".$_GET['username']."&phone=".$result['Telephone']."';</script>";
    }

    $sql2 = "INSERT INTO calendar (Day,Month,Year,PhotoName,DayType)
    VALUES ('".trim($result['Day'])."','".trim($result['Month'])."','".trim($result['Year'])."','".trim($result['PhotoName'])."','".trim($result['TimeType'])."')";
    $query2 = mysqli_query($conn,$sql2);

    $query = "DELETE FROM work WHERE Username = '".trim($_GET['username'])."' ";
    $result = mysqli_query($conn, $query);
    
    class thsms
    {
        var $api_url   = 'http://www.thsms.com/api/rest';
        var $username  = null;
        var $password  = null;
    
        public function getCredit()
        {
            $params['method']   = 'credit';
            $params['username'] = $this->username;
            $params['password'] = $this->password;
    
            $result = $this->curl( $params);
    
            $xml = @simplexml_load_string( $result);
    
            if (!is_object($xml))
            {
                return array( FALSE, 'Respond error');
    
            } else {
    
                if ($xml->credit->status == 'success')
                {
                    return array( TRUE, $xml->credit->amount);
                } else {
                    return array( FALSE, $xml->credit->message);
                }
            }
        }
    
        public function send( $from='0000', $to=null, $message=null)
        {
            $params['method']   = 'send';
            $params['username'] = $this->username;
            $params['password'] = $this->password;
    
            $params['from']     = $from;
            $params['to']       = $to;
            $params['message']  = $message;
    
            if (is_null( $params['to']) || is_null( $params['message']))
            {
                return FALSE;
            }
    
            $result = $this->curl( $params);
            $xml = @simplexml_load_string( $result);
            if (!is_object($xml))
            {
                return array( FALSE, 'Respond error');
            } else {
                if ($xml->send->status == 'success')
                {
                    return array( TRUE, $xml->send->uuid);
                } else {
                    return array( FALSE, $xml->send->message);
                }
            }
        }
        
        private function curl( $params=array())
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->api_url);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $params));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    
            $response  = curl_exec($ch);
            $lastError = curl_error($ch);
            $lastReq = curl_getinfo($ch);
            curl_close($ch);
    
            return $response;
        }
    }
?>