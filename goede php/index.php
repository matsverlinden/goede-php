<?php
	date_default_timezone_set('Europe/Amsterdam');

	$time = date('H:i');
	$morgen = date('06:00');
	$middag = date('12:00');
	$avond = date('18:00');
	$nacht = date('00:00');

	if (strtotime($time)< strtotime($middag) && strtotime($time) >= strtotime($morgen)) { $goede = 'morgen';
		}
	if (strtotime($time)< strtotime($avond) && strtotime($time) >= strtotime($middag)) { $goede = 'middag';
	}
	if (strtotime($time)> strtotime($middag) && strtotime($time) >= strtotime($avond)) { $goede = 'avond';
	}
	if (strtotime($time)< strtotime($morgen) && strtotime($time) >= strtotime($nacht)) { $goede = 'nacht';
	}

?>


<head>
	<title>Goede <?=$goede ?>!</title>
	<link rel="stylesheet" type="text/css" href="new.css">
	<link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
	<meta charset="utf-8">
</head>
<body class="<?= $goede ?>">
	<header>
		<img class="plane" src="plane.png">

	</header>
	<main class="text">
		<h1>Goede <?= $goede ?>!</h1>
		<h1>Het is nu <?= $time ?></h1>
	</main>
</body>