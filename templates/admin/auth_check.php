<?
	require(find_template('global/header'));
?>
	<p>Login</p>
	<form action="<?= $CONFIG['admin_url']; ?>" method="post">
	<input type="text" name="pass" placeholder="Admin password"/>
	<input type="submit" value="Login" />
	</form>
<?
	require(find_template('global/footer'));
	
