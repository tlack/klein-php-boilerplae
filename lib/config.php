<?
	$ENVIRONMENT = getenv('ENVIRONMENT') ? getenv('ENVIRONMENT') : 'production';
	define('ENVIRONMENT', $ENVIRONMENT);

	$CONFIG = array();

	// default config options
	// set to an admin password for /admin/ stuff
	$CONFIG['admin_pass'] = '';
	$CONFIG['admin_url'] = '/admin/'; // format /whatever/ must end in /
	$CONFIG['cookie_domain'] = $_SERVER['HTTP_HOST'];
	$CONFIG['templates'] = dirname(__FILE__).'/../templates/';

	// override this in the environment-specific config
	$CONFIG['db'] = array(
		'user' => '',
		'pass' => '',
		'db'   => ''
	);

	// load overrides from env-specific config files

	$config_file = dirname(__FILE__).'/config-'.ENVIRONMENT.'.php';
	if (file_exists($config_file))
		require($config_file);

