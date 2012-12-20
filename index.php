<?
	require('lib/config.php');
	require('lib/db.php');
	require('lib/klein.php');
	require('lib/templates.php');

	require('controllers/index.php');

	require('routes.php');

	dispatch(); //kick off klein
