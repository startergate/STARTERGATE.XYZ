<?php
	require("config/config.php");
	require("lib/db.php");
	$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
	$result = mysqli_query($conn, "SELECT * FROM route");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" sizes="57x57" href="/static/img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/static/img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/static/img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/static/img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/static/img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/static/img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/static/img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/static/img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/static/img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192" href="/static/img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/static/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/static/img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/static/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/static/img/favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">
		<link href="/static/img/favicon/favicon-32x32.png" rel="icon" type="image/X-icon" />
		<title>Welcome - STARTERGATE</title>
		<link href="/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body id="target">
		<div class="container">
			<header class="jumbotron text-center">
				<img src="/static/img/common/logonotfav.png" alt="STARTERGATE" class="img-rounded" id=logo \>
				<h1><a class='black' href="/index.php">STARTERGATE</a></h1>
			</header>
			<hr />
			<div class="row">
				<nav class="col-md-3">
					<ol class=nav nav-pills nav-stacked>
    				<?php
							while ($row = mysqli_fetch_assoc($result)) {
								echo '<li><a href="/index.php?id='.$row['id'].'">'.$row["title"],'</li></a>'."\n";
							}
    				?>
  				</ol>
				</nav>
				<div class="col-md-9">
  				<article>
  					<form action="process.php" method="post">
							<div class="form-group">
								<label for="form-title">모듈 명칭</label>
 								<input type="text" class="form-control" name="title" id="form-title" placeholder="명칭을 적어주세요.">
 							</div>
							<div class="form-group">
								<label for="form-title">링크</label>
								<textarea class="form-control" name="link" id="form-title" placeholder="링크를 적어주세요." rows=10></textarea>
 							</div>
							<input type="submit" name="name" class="btn btn-default btn-lg">
  					</form>
  				</article>
					<hr>
				</div>
			</div>
		</div>
	</body>
</html>
