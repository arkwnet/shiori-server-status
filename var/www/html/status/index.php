<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>Shiori Server Status</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1">
		<link type="text/css" rel="stylesheet" href="css/bulma.min.css">
		<link type="text/css" rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<nav class="navbar is-dark" id="navbar" role="navigation" aria-label="main navigation">
			<div class="container navbar-brand">
				<a class="navbar-item">
					Shiori Server Status
				</a>
			</div>
		</nav>
		<section class="section" id="section">
			<div class="container">
				<article class="message is-info">
					<div class="message-header">
						<p>Last updated on :</p>
					</div>
					<div class="message-body">
						<?php
							echo file_get_contents("status_date.txt");
						?>
					</div>
				</article>
				<article class="message">
					<div class="message-header">
						<p>System condition</p>
					</div>
					<div class="message-body">
						<?php
							$vmstat = file_get_contents("status_vmstat.txt");
							$vmstat = explode("\n", $vmstat);
							$vmstat_count = count($vmstat);
							for ($i = 0; $i < $vmstat_count; $i++) {
								echo($vmstat[$i]);
								if ($i <= $vmstat_count - 2) {
									echo("<br>");
								}
							}
						?>
					</div>
				</article>
				<article class="message">
					<div class="message-header">
						<p>Disk capacity</p>
					</div>
					<div class="message-body">
						<?php
							$df = file_get_contents("status_df.txt");
							$df = explode("\n", $df);
							$df_count = count($df);
							for ($i = 0; $i < $df_count; $i++) {
								echo($df[$i]);
								if ($i <= $df_count - 2) {
									echo("<br>");
								}
							}
						?>
					</div>
				</article>
			</div>
		</section>
		<br>
		<footer class="footer">
			<div class="content container">
				<p>
					Version 2.0.0 (2022-06-17)<br>
					<a href="https://github.com/arkwnet/shiori-server-status" target="blank">
						https://github.com/arkwnet/shiori-server-status
					</a>
				</p>
			</div>
		</footer>
	</body>
</html>
