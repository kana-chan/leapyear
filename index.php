<html>
  <body>
    <h1 class="title"> Leap Year </h1>
    <button>CSV出力</button>
    <?php
      for ($y=1; $y<=1000; $y++){
        if ($y % 400 == 0) {
          echo "{$y}は閏年";
        } elseif ($y % 100 == 0) {
          echo " ";
        } elseif ($y % 4 == 0 ) {
          echo "{$y}は閏年";
        } else {
          echo " ";
        }
      }
    ?>
  </body>
</html>
