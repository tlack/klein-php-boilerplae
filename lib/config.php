<?
	$ENVIRONMENT = getenv('ENVIRONMENT') ? getenv('ENVIRONMENT') : 'production';
	define('ENVIRONMENT', $ENVIRONMENT);

	$CONFIG = array();

	// default config options
	$CONFIG['templates'] = dirname(__FILE__).'/../templates/';
	$CONFIG['db'] = array(
		'user' => '',
		'pass' => '',
		'db'   => ''
	);

	// load overrides from env-specific config files

	$config_file = dirname(__FILE__).'/config-'.ENVIRONMENT.'.php';
	if (file_exists($config_file))
		require($config_file);

