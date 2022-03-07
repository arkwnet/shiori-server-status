<!DOCTYPE html>
<html lang="ja">
	<head>
		<title>Shiori Server Status</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,user-scalable=no,maximum-scale=1">
		<link type="text/css" rel="stylesheet" href="css/main.css">
	</head>
	<body>
		<main>
			<?php
				$data = file_get_contents("status.txt");
				$data = explode("\n", $data);
				$count = count($data);
				for ($i = 0; $i < $count; $i++) {
					echo($data[$i] . "<br>");
				}
			?>
		</main>
	</body>
</html>
