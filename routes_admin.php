<?
	with(substr($CONFIG['admin_url'], 0, -1), function() {
		global $CONFIG;

		// admin auth helpers
		respond('GET', '/', 'admin_auth_check_controller');
		respond('GET', '/[*]', 'admin_auth_check_controller');
		respond('POST', '/', 'admin_auth_login_controller');
		respond('GET', '/logout', 'admin_auth_logout_controller');

		// put your own custom admin routes here
		respond('/', 'admin_welcome_controller');
	});


