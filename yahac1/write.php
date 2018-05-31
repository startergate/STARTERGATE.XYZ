<?php
	require("./config/config.php");
	require("./lib/db.php");
	$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
	$result = mysqli_query($conn, "SELECT * FROM topic");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="/style.css">
		<title>최호승 - 생활코딩</title>
		<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
		<body id="target">
			<div class="container">
				<header class="jumbotron text-center">
    			<img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png" alt="생활코딩" class="img-rounded" id=logo \>
  				<h1><a href=".//index.php">JavaScript</a></h1>
  			</header>
				<div class="row">
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
  					<form action="process.php" method="post">
							<div class="form-group">
								<label for="form-title">제목</label>
 								<input type="text" class="form-control" name="title" id="form-title" placeholder="제목을 적어주세요.">
 							</div>
							<div class="form-group">
								<label for="form-title">작성자</label>
	 							<input type="text" class="form-control" name="author" id="form-author" placeholder="작성자을 적어주세요.">
 							</div>
							<div class="form-group">
								<label for="form-title">본문</label>
								<textarea class="form-control" name="description" id="form-title" placeholder="본문을 적어주세요." rows=10></textarea>
 							</div>
							<input type="submit" name="name" class="btn btn-default btn-lg">
  					</form>
  				</article>
					<hr>
					<div id="control">
						<div class="btn-group" role="group" aria-label="...">
							<input type="button" value="white" onclick="document.getElementById('target').className='white'" class="btn btn-default btn-lg"/>
							<input type="button" value="black" onclick="document.getElementById('target').className='black'" class="btn btn-default btn-lg"/>
						</div>
						<a href="./write.php" class="btn btn-success btn-lg">쓰기</a>
					</div>
				</div>
			</div>
		</div>
  </body>
</html>
