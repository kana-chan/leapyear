<html>
  <body>
    <h1 class="title"> Leap Year </h1>
    <button>CSV出力</button>
    <?php
      $leaps = [];
      for ($y=1; $y<=10; $y++){

        if ($y % 400 == 0) {
          $leaps[] = [$y,1];
        } elseif ($y % 100 == 0) {
          $leaps[] = [$y,0];
        } elseif ($y % 4 == 0 ) {
          $leaps[] = [$y,1];
        } else {
          $leaps[] = [$y,0];
        }
      }

      var_dump ( $leaps );
      foreach($leaps as $l){
        if ($l[1] == 1) {
          echo "${l[0]}年は、閏年です <br/>";
        } else {
          echo "${l[0]}.<br/>";
        }
      }
    ?>
  </body>
</html>
