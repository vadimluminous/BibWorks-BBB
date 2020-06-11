<?php

class Bigbluebutton_Api {
    function create_meeting( $room_id ) {
		$rid = intval( $room_id );
		$name           = 'BibWorks Conference';
        $recordable = 'false';
        $meeting_id     = $rid;
        
		$arr_params     = array(
            'allowStartStopRecording'   => 'false',
			'autoStartRecording' => 'false',
            'meetingID'   => rawurlencode( $meeting_id ),
            'attendeePW' => '123',
            'moderatorPW' => '321',
			// 'name'        => $name,
			'record'      => $recordable,
			'welcome' 	  => 'Welcome to your Bibworks room.',
		);

        $url = self::build_url( 'create', $arr_params );

		$full_response = self::get_response( $url );


		$response = self::response_to_xml( $full_response );
		if ( property_exists( $response, 'returncode' ) && 'SUCCESS' == $response->returncode ) {
			return 200;
		} elseif ( property_exists( $response, 'returncode' ) && 'FAILURE' == $response->returncode ) {
			return 403;
		}

		return 500;

    }

    function get_join_meeting_url( $room_id, $username, $password) {

		$rid   = intval( $room_id );
		$uname = $username ;
		$pword = $password ;


		if ( ! self::is_meeting_running( $rid ) ) {
			$code = self::create_meeting( $rid );
		}

		$meeting_id = $rid;;
		$arr_params = array(
			'meetingID' => rawurlencode( $meeting_id ),
			'fullName'  => $uname,
			'password'  => rawurlencode( $pword ),
		);

		$url = self::build_url( 'join', $arr_params );

		return $url;
	}

    function join_meeting( $room_id, $username, $entry_code) {
		$join_url = Bigbluebutton_Api::get_join_meeting_url( $room_id, $username, $entry_code );
        header("Location: $join_url");
        die();
    }
    
    function is_meeting_running( $room_id ) {

		$rid = intval( $room_id );


		$meeting_id = $rid;
		$arr_params = array(
			'meetingID' => rawurlencode( $meeting_id ),
		);

		$url           = self::build_url( 'isMeetingRunning', $arr_params );
		$full_response = self::get_response( $url );

		$response = self::response_to_xml( $full_response );

		if ( property_exists( $response, 'running' ) && 'true' == $response->running ) {
			return true;
		}
		return false;
	}

    function response_to_xml( $full_response ) {
		try {
			$xml = new SimpleXMLElement( $full_response );
		} catch ( Exception $exception ) {
			return new stdClass();
		}
		return $xml;
	}

    function get_response( $url ) {
		$result = file_get_contents( filter_var($url, FILTER_SANITIZE_URL ) );
		return $result;
    }
    
    function build_url( $request_type, $args ) {
		$type = htmlentities( $request_type );

		$url_val  = strval('https://start.instantonlinemeetings.com/bigbluebutton/' );
		$salt_val = strval( 'UA0FF7A575zm7OnygB6HsEZ8GBcTyPAAPDL1Iuwak' );

		$url = $url_val . 'api/' . $type . '?';

		$params = http_build_query( $args );

		$url .= $params . '&checksum=' . sha1( $type . $params . $salt_val );

		return $url;
	} 
}

?>