<?php
/**
 * Created by aoni abdelhai.
 * User: aoni
 * Date: 1-3-15
 * Time: 14:55
 */
require_once __DIR__ . '/../lib/autoloader.php';
;
$response = new Restcomm\Response();
$response->addSay('hi how are you');

header("Content-Type: text/xml");
echo($response->toXML());