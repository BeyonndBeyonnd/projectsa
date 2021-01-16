<?php
    include('connect.php');

    header("Content-Type: application/json");

    if ($_POST['txtuser'] == ""){
        echo json_encode(array('status'=> 4,'message'=> 'Fail'));
        return 1;
    }

    if ($_POST['txtemail'] == ""){
        echo json_encode(array('status'=> 5,'message'=> 'Fail'));
        return 1;
    }

    if ($_POST['ppass'] == ""){
        echo json_encode(array('status'=> 6,'message'=> 'Fail'));
        return 1;
    }

    if ($_POST['cppass'] == ""){
        echo json_encode(array('status'=> 7,'message'=> 'Fail'));
        return 1;
    }

    $sql = "SELECT * FROM accounts WHERE Username = '".trim($_POST['txtuser'])."' ";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);

    if($result){
        echo json_encode(array('status'=> 0,'message'=> 'Fail'));
    }

    $sql = "SELECT * FROM accounts WHERE Email = '".trim($_POST['txtemail'])."' ";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);

    if($result){
        echo json_encode(array('status'=> 8,'message'=> 'Fail'));
    }

    else{
        if($_POST['ppass'] != $_POST['cppass'])
        {
            echo json_encode(array('status'=> 2,'message'=> 'Fail'));
        }
        else if($_POST['ppass'] == $_POST['cppass']){
            date_default_timezone_set('Asia/Bangkok');
            $today = date("d/m/Y h:i:s");

            $ipaddress = $_SERVER["REMOTE_ADDR"]; //Get user IP


            $sql = "INSERT INTO accounts (Username,Password,Email,RegisterDate)
            VALUES ('".trim($_POST['txtuser'])."',
            '".strtoupper(hash("whirlpool", $_POST['ppass']))."','".trim($_POST['txtemail'])."','".trim( $today)."')";

            $query = mysqli_query($conn,$sql);


            echo json_encode(array('status'=> 1,'message'=> 'Success'));
        }
    }

    mysqli_close($conn);
?>