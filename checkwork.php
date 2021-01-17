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
    else{
        date_default_timezone_set('Asia/Bangkok');
        $today = date("d/m/Y h:i:s");

        $sql = "INSERT INTO work (Username,Name,Email,Telephone,Info,TypeWork,TimeType,DateTime)
        VALUES ('".trim($_SESSION['accountName'])."','".trim($_POST['name'])."','".trim($_SESSION['accountEmail'])."','".trim($_POST['phone'])."','".trim($_POST['story'])."','".trim($_POST['work'])."','".trim($_POST['time'])."','".trim($today)."')";
        $query = mysqli_query($conn,$sql);


        echo json_encode(array('status'=> 1,'message'=> 'Success'));

    }

    mysqli_close($conn);
?>