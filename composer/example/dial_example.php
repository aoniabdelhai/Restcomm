<?php



require_once __DIR__ . '/../lib/autoloader.php';


/**
 *
 * The <Dial> verb connects the current caller to another phone. If the called party picks up, the two parties are connected and can communicate until one hangs up.
 * If the called party does not pick up, if a busy signal is received, or if the number doesn’t exist, the dial verb will finish.
 */
$response = new Restcomm\Response;

$dial=$response->Dial();
/*
 * Add Number
 *
 */
if($dial){
    $dial->Number('972546784577');

    $dial->Client('aoni');
    $dial->Sip('sip:123456789@54.152.232.25');
}

header("Content-Type: text/xml");
echo($response->toXML());
