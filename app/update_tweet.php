<?php
require_once('Tweet.php');
require_once('./common/utility.php');
header("Content-type: application/json;");
if (!empty($_POST['user_id']) || !empty($_POST['tweet_id']) || !empty($_POST['body'])) {

    $tweet = new Tweet();
    $tweet->user_id = $_POST['user_id'];
    $tweet->tweet_id = $_POST['tweet_id'];
    $tweet->body = $_POST['body'];

    if ($tweet->update()) {
        respond(200, 'success', 'request accepted');

    } else {
        respond(500, 'error', 'an error occurred');
    }

} else{
    respond(400, 'error', 'all fields are required');
}
