<html>
  <body>
    <h1 class="title"> Leap Year </h1>
    <button>CSV出力</button>
    <?php
      $leaps = [];                                         //100000までをif文で閏年かどうかの判定をした上で、leaps配列に追加。
      for ($y=1; $y<=1000; $y++){                            //0に年数、1に閏年かどうか、2に1年から数えて何回目か
        if ($y % 400 == 0) {                               //400の倍数は閏年
          $leaps[] = [$y,true];
        } elseif ($y % 100 == 0) {                         //100の倍数は平年
          $leaps[] = [$y,false];
        } elseif ($y % 4 == 0 ) {                          //4の倍数は閏年
          $leaps[] = [$y,true];
        } else {                                           //それ以外
          $leaps[] = [$y,false];
        }
      }

      // var_dump ( $leaps );
      foreach($leaps as $l){
        if ($l[1] == true) {
          echo "${l[0]}年は、${l[1]}回目の閏年です <br/>";
        } else {
          echo "${l[0]}.<br/>";
        }
      }
    ?>
  </body>
</html>
