<?
	function find_template($name) {
		global $CONFIG;
		// later: check for language variations and ENVIRONMENT variations

		// support for
		// find_template('folder/') -> find_template('folder/index')
		$filename = basename($name);
		if (empty($filename)) 
			$name.='index';

		// support for
		// find_template('folder') -> find_template('folder/index')
		if (is_dir($CONFIG['templates'].$name))
			$name.='/index';

		return $CONFIG['templates'].$name.'.php';
	}
