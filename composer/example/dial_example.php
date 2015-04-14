<?php
/**
 * Created by aoni abdelhai.
 * User: aoni
 * Date: 1-3-15
 * Time: 14:55
 */
require_once __DIR__ . '/../lib/autoloader.php';
$r = new Restcomm\Response();;
$d = $r->dial();
$d->sip("1231231234",array('Action'=>111));
$d->number("1231231234");
echo $r;