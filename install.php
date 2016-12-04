<?php

// Craft includes a bootstrap file that returns a Craft WebApp
$craft = require realpath("../craft/app/bootstrap.php");
$inputs = 
[
	'locale' => 'en',
	'username' => $_REQUEST['username'],
	'email' => $_REQUEST['email'],
	'password' => $_REQUEST['password'],
	'siteName' => $_REQUEST['site_name'],
	'siteUrl' => $_REQUEST['project_name'].".dev", // or .whatever
];

// Initialize the WebApp
$craft->init();

// Run the installer using Craft's InstallService
$craft->install->run($inputs);