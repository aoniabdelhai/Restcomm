<?php
require_once __DIR__ . '/../lib/autoloader.php';

$response = new Restcomm\Response;
/*
 * ADD SAY
 *
 */
$response->Say('hi how are you',array('loop'=>1));
$dial=$response->Dial();
/*
 * Add Number
 *
 */
if($dial){
    $dial->Number('972546784577');

    $dial->Client('972546784577');
}



/*
 * Add Play
 *
 */
$response->Play('http://google.com',array('loop'=>1));

$response->Hangup();
header("Content-Type: text/xml");
echo($response->toXML());
