<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	/*
	'connectionString' => 'mysql:host=localhost;dbname=testdrive',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',
	*/
    'connectionString'  => 'mysql:host=localhost;dbname=simlpm6',
    'emulatePrepare'    => true,
    'username'          => 'root',
    'password'          => '',
    'charset'           => 'utf8',
    // to enable SQL logging and that would dump PDO parameter without SQL look statement in the log file
    'enableParamLogging' => true,
    'enableProfiling'    => true,
);