<?
	function x404($message) {
		header('HTTP/1.01 404 Not Found Bro');
		require(find_template('404'));
		error_log($message, E_USER_ERROR);
		exit;
	}

	function x500($message) {
		header('HTTP/1.01 500 Server Error');
		require(find_template('500'));
		error_log($message, E_USER_ERROR);
		exit;
	}

	function xgoto($url) {
		header('Location: '. $url);
		?>
		<meta http-equiv="refresh" content="1; url=<?=htmlspecialchars($url);?>"/>
		<?
		exit;
	}

	function xsetcookie($name, $value) {
		global $CONFIG;

		if (empty($CONFIG['cookie_domain']))
			x500('cookie_domain not set in config');

		$_COOKIE[$name] = $value;
		$domain = $CONFIG['cookie_domain'];
		$t = time() + (60 * 60 * 24 * 365 * 2);
		setcookie($name, $value, $t, '/', $domain, 0);
	}

