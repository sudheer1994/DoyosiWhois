<?php

// Kickstart the framework
$f3=require('app/lib/base.php');
$db = new \DB\Jig ('data/',\DB\Jig::FORMAT_JSON);
$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

$f3->route('GET /',	'Home->Display');
$f3->route('GET|POST /whois [ajax]', 'Home->Whois');
$f3->run();