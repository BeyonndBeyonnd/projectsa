<?php
    session_start();
    include('connect.php');
    header("Content-Type: application/json");

    if($_POST['name'] == ""){
        echo json_encode(array('status'=> 2,'message'=> 'Fail'));
        exit();
    }

    if($_POST['phone'] == ""){
        echo json_encode(array('status'=> 3,'message'=> 'Fail'));
        exit();
    }

    $sql = "SELECT * FROM work WHERE Username = '".trim($_SESSION['accountName'])."' ";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);

    if($result){
        echo json_encode(array('status'=> 0,'message'=> 'Fail'));
        exit();
    }

    $daytype = "none";

    if($_POST['time'] == "allday"){
        $daytype = "เต็มวัน";
    }
    else if($_POST['time'] == "halfdaymo"){
        $daytype = "ครึ่งวันเช้า";
    }
    else if($_POST['time'] == "halfdayaf"){
        $daytype = "ครึ่งวันบ่าย";
    }
    $_POST['birthday'] = explode('-', $_POST['birthday']);
    $day = $_POST['birthday'][2];
    $month   = $_POST['birthday'][1];
    $year  = $_POST['birthday'][0];
    $sql2 = "SELECT * FROM calendar WHERE Day = '".trim($day)."' AND Month = '".trim($month)."' AND Year = '".trim($year)."' AND DayType = '".trim($daytype)."'";
    $query2 = mysqli_query($conn,$sql2);
    $result2 = mysqli_fetch_array($query2,MYSQLI_ASSOC);

    if($result2){
        echo json_encode(array('status'=> 4,'message'=> 'Fail'));
        exit();
    }

    date_default_timezone_set('Asia/Bangkok');
    $today = date("d/m/Y h:i:s");

    $sql = "INSERT INTO work (Username,Name,Email,Telephone,Info,TypeWork,TimeType,PhotoName,Day,Month,Year,DateTime)
    VALUES ('".trim($_SESSION['accountName'])."','".trim($_POST['name'])."','".trim($_SESSION['accountEmail'])."','".trim($_POST['phone'])."','".trim($_POST['story'])."','".trim($_POST['work'])."',
    '".trim($daytype)."','".trim($_POST['photo'])."','".trim($day)."','".trim($month)."','".trim($year)."','".trim($today)."')";
    $query = mysqli_query($conn,$sql);
    
    echo json_encode(array('status'=> 1,'message'=> 'Success'));

    mysqli_close($conn);
?>