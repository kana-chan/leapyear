<html>
  <body>
    <h1 class="title"> Leap Year </h1>
    <button>CSV出力</button>
    <?php
      $leaps = array();
      for ($y=1; $y<=100000; $y++){
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

      foreach($leaps as $l){
        if ($l[1]) {
          echo "${l[0]}年は、閏年です <br/>";
        }
      }
    ?>
  </body>
</html>
