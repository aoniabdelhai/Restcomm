<?php

require_once __DIR__ . '/../lib/autoloader.php';


/*
 * Life call modification
 *
 */
$response_1 = new Restcomm\Response;
$conference_room_id=123456;

/*
 * muted: The ‘muted’ attribute lets you specify whether a participant can speak in the conference. If this attribute is set to ‘true’, the participant will only be able to listen to people in the conference.
 *
 */
$response_1->Conference($conference_room_id,array('muted'=>true));

header("Content-Type: text/xml");
echo($response_1->toXML());