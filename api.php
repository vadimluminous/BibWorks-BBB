<?php
require 'vendor/autoload.php';
require 'functions/authentication.php';
require 'functions/getid.php';
require 'functions/bbb-class.php';


$joinMeeting = new Bigbluebutton_Api();

$id = get_id($_GET['meetingID']);
$uname = $_GET['firstname'];

$pword = '123';


if(isset($id)){
    $joinMeeting->join_meeting($id, $uname, $pword);
}