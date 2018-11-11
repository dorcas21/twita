<?php
function respond($response_code,$status,$message){
    http_response_code($response_code);
    $response = array(
        "status" => $status,
        "message" => $message
    );
    echo json_encode($response);
}