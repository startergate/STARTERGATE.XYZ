<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/private/font_style.css">
    <title>최호승 - 생활코딩</title>
  </head>
  <body>
    <h1>JavaScript</h1>
    <ul>
    <script>
      list = new Array("최진혁", "최유빈", "한이람","한이은", "summon");
      i = 0;
      while (i < list.length){
        document.write("<li>"+list[i]+"</li>");
        i = i + 1;
      }
    </script>
    </ul>

    <ul>
    <h1>PHP</h1>
    <?php
      $list = array("최진혁", "최유빈", "한이람","한이은");
      $i = 0;
      while($i <= count($list)) {
        echo "<li>".$list[$i]."</li>";
        $i = $i + 1;
      }
    ?>
    </ul>
  </body>
</html>
WHAT THE FUCK
