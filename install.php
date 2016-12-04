<?php
$craft = require realpath("../craft/app/bootstrap.php");
$inputs = 
[
	'locale' => 'en',
	'username' => $_REQUEST['username'],
	'email' => $_REQUEST['email'],
	'password' => $_REQUEST['password'],
	'siteName' => $_REQUEST['site_name'],
	'siteUrl' => $_REQUEST['project_name'].".nmc",
];
$craft->init();
$craft->install->run($inputs);