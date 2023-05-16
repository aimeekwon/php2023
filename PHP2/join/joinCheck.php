<?php
    include "../connect/connect.php";
    $type = $_POST['type'];
    $jsonResult = "bad";
    if( $type == "isEmailCheck"){
        $youEmail = $connect -> real_escape_string(trim($_POST['youEmail']));
$sql = "SELECT youEmail FROM plantyMembers WHERE youEmail = '{$youEmail}'";
    }
    if( $type == "isNickCheck"){
        $youNick = $connect -> real_escape_string(trim($_POST['youNick']));
$sql = "SELECT youNick FROM plantyMembers WHERE youNick = '{$youNick}'";
    }
    $result = $connect -> query($sql);
    if( $result -> num_rows == 0 ){
        $jsonResult = "good";
    }
    echo json_encode(array("result" => $jsonResult));
?>









