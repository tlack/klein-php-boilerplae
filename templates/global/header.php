<html>
<title></title>
<body>
	<div id="page">
		<h1>Subly.co</h1>

		<div id="content">
		<?
		if (isset($response)) {
			$flashes = $response->flashes();
			foreach ($flashes as $type=>$entries) {
				?>
				<div class="<?= $type; ?>">
					<?= join('', $entries); ?>
				</div>
				<?
			}
		}
