<?php
require_once('./common/connection.php');

class Tweet
{

    public $tweet_id;
    public $user_id;
    public $body;
    public $timestamp;
    public $status;


    public function save()
    {
        global $con;
        if ($this->validate_body()) {
            $query = "INSERT INTO `tweets` (`body`, `user_id`) VALUES ('" . $this->body . "', '" . $this->user_id . "')";

            // $escapedQuery=$query;

            if ($con->query($query) === TRUE) {
                return true;
            } else {
                return false;
            }
        }
        return false;
    }

    public function update()
    {
        global $con;
        if($this->validate_body()){
            $query="UPDATE `tweets`  SET body='".$this->body."' WHERE `tweet_id`='".$this->tweet_id."'";

            if ($con->query($query) === TRUE) {
                return true;
            } else {
                return false;
            }
        }
        return false;

    }

    public function delete()
    {

    }

    private function validate_body()
    {
        if (sizeof($this->body) < 256) {
            global $con;
            $this->body=mysqli_real_escape_string($con,$this->body);
            return true;
        } else {
            return false;
        }
    }

}