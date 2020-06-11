<?php
    require 'functions/bbb-class.php';

    $joinMeeting = new Bigbluebutton_Api();

    $id = htmlspecialchars($_GET['meetingID'], ENT_QUOTES);
    $uname = htmlspecialchars($_GET['firstname'], ENT_QUOTES);
    $token = htmlspecialchars($_GET['token'], ENT_QUOTES);
    $pword = '123';

    if(isset($id) && isset($uname) && $token == "BQeUGUMB5QnhKXUe"){
        $joinMeeting->join_meeting($id, $uname, $pword);
    } else {
        echo "Your Token is Incorrect or the ID and Username are missing";
    }

// localhost:8080/bbb-api-hook/api.php?meetingID=CGXsYSa59GXOzWXdZqri1WI3SBoq11&firstname=Smith&token=BQeUGUMB5QnhKXUe
?>