<?
	require(find_template('global/header'));
?>	
	<p>
		Welcome to Subly! Enter your site's URL and
		your email to begin.
	</p>

	<form action="/signup/" method="post">
		<p>
			<input type="text" id="url" name="url"
				placeholder="Your site URL"/>
		</p>
		<p>
			<input type="text" id="email" name="email"
				placeholder="Your email address"/>
		</p>
		<p>
			<input type="submit" value="Turn on subscriptions" />
		</p>
	</form>
		
<?
	require(find_template('global/footer'));
