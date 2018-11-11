<?php
require_once ('./common/connection.php');
header("Content-type: application/json;");
 if(!empty($_POST['user_id']) || !empty($_POST['body'])){
     $user_id=$_POST['user_id'];
     $body=$_POST['body'];
      if(sizeof($body) < 256){
          $body=mysqli_real_escape_string($con,$body);
           $query="INSERT INTO `tweets` (`body`, `user_id`) VALUES ('".$body."', '".$user_id."')";

         // $escapedQuery=$query;

          if ($con->query($query) === TRUE) {
              http_response_code(200);
              $response=array(
                  "status" => "success",
                  "message" => "request accepted"
              );
              echo json_encode($response);
          } else {
              http_response_code(500);
              $response=array(
                  "status" => "error",
                  "message" => "an error occured"
              );
              echo json_encode($response);
          }


      }

 }else{
     http_response_code(400);
     $response = array(
         "status" => "error",
         "message"=> "all fields are required"
     );
     echo json_encode($response);
 }