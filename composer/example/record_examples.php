<?php
/**
 * Created by aoni abdelhai.
 * User: aoni
 * Date: 1-3-15
 * Time: 14:55
 */
require_once __DIR__ . '/../lib/autoloader.php';
$r = new Restcomm\Response();
$r->Record('',array('method'=>'GET','timeouts'=>10));

echo $r;