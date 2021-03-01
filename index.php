<html>
  <body>
    <h1 class="title"> Leap Year </h1>
    <button>CSV出力</button>
    <?php
    $leaps = array();
      for ($y=1; $y<=1000; $y++){
        if ($y % 400 == 0) {
          $leaps[] = array($y,true);
        } elseif ($y % 100 == 0) {
          $lesps[] = array($y,false);
        } elseif ($y % 4 == 0 ) {
          $leaps[] = array($y,true);
        } else {
          $lesps[] = array($y,false);
        }
      }
    ?>
  </body>
</html>
