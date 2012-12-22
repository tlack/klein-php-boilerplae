<?
	function admin_auth_check_controller($request, $response) {
		global $CONFIG;

		if (empty($CONFIG['admin_pass']) || empty($CONFIG['admin_url']))
			x500('admin_pass or admin_url not set in config');

		if (empty($_COOKIE['_admin_auth'])) {
			$response->flash('Please login now');
			require(find_template('admin/auth_check'));
			exit;
		}

		if ($_COOKIE['_admin_auth'] != md5($CONFIG['admin_pass'])) {
			$response->flash('Bad password');
			require(find_template('admin/auth_check'));
			exit;
		}
	}	
	function admin_auth_login_controller($request) {
		global $CONFIG;

		$back_to = !empty($_POST['back_to']) ? 
			$_POST['back_to'] : $CONFIG['admin_url'];

		$pass = $request->param('pass');
		if (empty($pass))
			xgoto($back_to);

		xsetcookie('_admin_auth', md5($pass));

		xgoto($back_to);
	}	
	function admin_auth_logout_controller($request) {
		global $CONFIG;
		xsetcookie('_admin_auth', '');
		xgoto($CONFIG['admin_url']);
	}
