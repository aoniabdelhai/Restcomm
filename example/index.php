<?php
require_once "../autoloader.php";


$response = new Response;
/*
 * ADD SAY
 *
 */
$response->addSay('hi how are you');
$dial=$response->addDial();
/*
 * Add Number
 *
 */
$dial->addNumber('972546784577');


/*
 * Add Play
 *
 */
$response->addPlay('http://google.com',array('loop'=>1));
header("Content-Type: text/xml");
echo($response->toXML());
