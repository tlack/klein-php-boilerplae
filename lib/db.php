<?
	// database stuff

	function x1($qs) {
		// xone_row()
		$res = mysql_query($qs);
		if (!$res) die(mysql_error());
		return mysql_fetch_assoc($res);
	}

	function xa($qs, $key_col = false) {
		// xall_rows()
		$res = mysql_query($qs);
		if (!$res) die(mysql_error());
		$rows = array();
		while ($a = mysql_fetch_assoc($res)) {
			if ($key_col) 
				$rows[$a[$key_col]] = $a;
			else
				$rows[] = $a;
		}
		return $rows;
	}

	function xinsert($table, $vals, $call_mes = false) {
		$qs = "
			insert into $table
			(
		";
		$qs .= join(',', array_keys($vals));
		$qs .= '
			)
			values
			(\'';

		if ($call_mes) 
			$qs .= join("','", array_map('mysql_escape_string', array_values($vals)));
		else
			$qs .= join("','", array_values($vals));
		$qs .= '\')';
		$res = mysql_query($qs);
		if (!$res) die('insert: ' . mysql_error());
		return mysql_insert_id();
	}

	function xinsert_id() {
		return mysql_insert_id();
	}

	function xinsert_now() {
		return date('Y-m-d H:i:s');
	}

	function xupdate($qs) {
		$res = mysql_query($qs);
		if (!$res) die('xupdate(): '. mysql_error());
		return mysql_affected_rows();
	}

