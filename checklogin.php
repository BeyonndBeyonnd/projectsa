<?php
    session_start();
    include('connect.php');
    header("Content-Type: application/json");

    $sql = "SELECT * FROM accounts WHERE Username = '".mysqli_real_escape_string($conn,$_POST['txtuser'])."'
    and Password = '".mysqli_real_escape_string($conn, strtoupper(hash("whirlpool", $_POST['ppass'])))."' ";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query, MYSQLI_ASSOC);

    if(!$result){
        echo json_encode(array('status'=> 0,'message'=> 'Fail'));
    }
    else {
        $_SESSION['accountName'] = $result['Username'];
        $_SESSION['accountEmail'] = $result['Username'];
        $_SESSION['accountAdmin'] = $result['Admin'];
        $_SESSION['accountID'] = $result['ID'];

        session_write_close();

        echo json_encode(array('status'=> 1,'message'=> 'Success'));
    }
    mysqli_close($conn);
?>