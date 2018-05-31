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
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style.css?v=3">
		<link rel="stylesheet" type="text/css" href="/Normalize.css">
		<meta name="google-site-verification" content="uGWQMNLerxKjfoLD6udpSOmk6BzMEtqBY5XdTHsxe4c" />
	</head>
	<body id="target">
		<div class="container">
			<header class="margin-erase jumbotron text-center">
    		<img src="/static/img/common/logonotfav.png" alt="STARTERGATE" class="img-rounded" id=logo \>
    		<h1><a class='black' href="./index.php">STARTERGATE</a></h1>
  		</header>
			<div class="row">
				<hr />
				<nav class="col-md-3">
					<ol class=nav nav-pills nav-stacked>
      			<?php
							while ($row = mysqli_fetch_assoc($result)) {
								echo '<li><a href="./index.php?id='.$row['id'].'">'.$row["title"],'</li></a>'."\n";
							}
      			?>
    			</ol>
				</nav>
				<div class="col-md-9">
					<article>
						<?php
							if (empty($_GET['id']) == false) {
								$sql = 'SELECT id,title,link FROM route WHERE id = '.$_GET['id'];
								$result = mysqli_query($conn, $sql);
								$row = mysqli_fetch_assoc($result);
							}
							if (empty(htmlspecialchars($row['title'])) == false) {
								echo '<header class="jumbotron text-left">';
								echo '<h2>'.htmlspecialchars($row['title']).'</h2>';
								echo '<a href=';
								echo strip_tags($row['link'], '<a><h1><h2><h3><h4><h5><ul><ol><li>');
								echo '>모듈로 가기</a></header>';
								$btnSetup = '1';
							} else {
								echo '<header class="jumbotron text-center">
					    	 	<img src="/static/img/common/arm-up.png" alt="STARTERGATE" class="img-rounded" id=logo \>
					    		<h1>안녕하세요!</h1>
									<br />
									startergate.xyz는 STARTERGATE의 HTML 연습 및 테스트용 페이지입니다.
									<br />
									서버는 노트북에서 필요할 때에만 구동되며,
									구동 주기는 정해져있지 않습니다.
									<br />
									이 페이지를 운영하는 사람에 대해서는
									<a href=http://namu.wiki/w/사용자:satellite target="_blank">#</a>을 참조하세요.
					  		</header>
								<h4><strong>Copyright Info</strong></h4>
								<div>Icons made by <a href="http://www.freepik.com" target="_blank" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" target="_blank" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>';
							}
    				?>
					</article>
					<hr>
					<div id="control">
						<a href="/write.php" class="btn btn-success btn-lg">모듈 추가하기</a> <?php if (!empty($btnSetup)) {echo '<a href="/write.php?id='.$_GET['id'].'" class="btn btn-danger btn-lg">모듈 삭제하기</a>';}?>
					</div>
				</div>
			</div>
		</div>
		<script src="/jquery/jquery-3.3.1.min.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
