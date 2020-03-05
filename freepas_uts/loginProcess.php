<?php
require('header.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $response = array(
        "success" => false,
        "message" => "login failed"
    );

    if ($username == "admin" && $password == "pw123") {
        $_SESSION['username'] = $username;
        $response["success"] = !$response["success"];
        $response["message"] = "success";
        echo json_encode($response);
    } else {
        echo json_encode($response);
    }
}
?>