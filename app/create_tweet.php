<?php
require_once('Tweet.php');
header("Content-type: application/json;");
if (!empty($_POST['user_id']) || !empty($_POST['body'])) {
    $user_id = $_POST['user_id'];
    $body = $_POST['body'];
    $tweet = new Tweet();
    $tweet->user_id = $user_id;
    $tweet->body = $body;


    if ($tweet->save()) {
        http_response_code(200);
        $response = array(
            "status" => "success",
            "message" => "request accepted"
        );
        echo json_encode($response);
    } else {
        http_response_code(500);
        $response = array(
            "status" => "error",
            "message" => "an error occured"
        );
        echo json_encode($response);
    }


} else {
    http_response_code(400);
    $response = array(
        "status" => "error",
        "message" => "all fields are required"
    );
    echo json_encode($response);
}