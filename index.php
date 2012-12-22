<?
	require('lib/lib.php');

	require('controllers/admin_auth_check.php');
	require('controllers/admin.php');
	require('controllers/index.php');
	require('controllers/signup.php');

	require('routes_admin.php');
	require('routes.php');

	dispatch(); //kick off klein
