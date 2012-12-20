#!/usr/bin/env php
<?
	require(dirname(__FILE__).'/../lib/config.php');
	$u = $CONFIG['db']['user'];
	$p = $CONFIG['db']['pass'];
	$d = $CONFIG['db']['db'];
	$cmd = "mysql --user=$u --password=$p $d";

	$descriptorspec = array(
		0 => STDIN,
		1 => STDOUT,
		2 => STDERR
	);
	$process = proc_open($cmd, $descriptorspec, $pipes);

