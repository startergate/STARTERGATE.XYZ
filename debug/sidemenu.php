<!DOCTYPE html>
<html>
  <script type="text/javascript" src="/jquery/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="./jquery-ui.min.js"></script>
  <script type="text/javascript" src="./jquery.simple-sidebar.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#main-sidebar').simpleSidebar({
        opener: '#toggle-sidebar',
        wrapper: '#main',
        animation: {
          easing: "easeOutQuint"
        },
        sidebar: {
          align: 'left',
          closingLinks: '.close-sb',
        },
        sbWrapper: {
          display: true
        }
      });
    });
  </script>
  <head>
    <meta charset="utf-8">
    <title>WORKING TITLE</title>
    <link rel="stylesheet" href="./menu_debug.css">
  </head>
  <body>
    <div id="main-navbar">
    	<h1><a href="/">좌측슬라이드</a></h1>
    	<div id="toggle-sidebar"><img src="/static/img/common/btn_menu.png" width="28" alt="메뉴 전체보기" /></div>
    </div>
    <div id="main-sidebar">
    	<div class="close-sb">HOME</div>
    	<nav>
    		<ul>
    			<li class="depth1"><a href="">메뉴1</a>
    				<ul>
    					<li><a href="">테스트 테스트 테스트</a></li>
    					<li><a href="">테스트 테스트 테스트</a></li>
    					<li><a href="">테스트 테스트 테스트</a></li>
    					<li><a href="">테스트 테스트 테스트</a></li>
    				</ul>
    			</li>
    			<li class="depth1"><a href="">메뉴2</a></li>
    			<li class="depth1"><a href="">메뉴3</a></li>
    			<li class="depth1"><a href="">메뉴4</a></li>
    		</ul>
    	</nav>
    </div>

    <div id="container">본문내용</div>
  </body>
</html>
