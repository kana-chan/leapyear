<html>
  <body>
    <h1 class="title"> Leap Year </h1>
    <button>CSV出力</button>
    <br/>
    <?php
      $leaps = ["year","leap?","times"];                   //100000まで、[0]に年数、[1]に閏年かどうか、[2]に1年から数えて何回目かを配列leapsに追加。
      $t = 0;                                              //何回目の閏年かを計算するための変数
      for ($y=1; $y<=1000; $y++){
        if ($y % 400 == 0) {                               //400の倍数は閏年
          $leaps[] = [$y,true,++$t];
        } elseif ($y % 100 == 0) {                         //100の倍数は平年
          $leaps[] = [$y,false,0];
        } elseif ($y % 4 == 0 ) {                          //4の倍数は閏年
          $leaps[] = [$y,true,++$t];
        } else {                                           //それ以外
          $leaps[] = [$y,false,0];
        }
      }

      // var_dump ( $leaps );
      foreach($leaps as $l){
        if ($l[0] >=1 ){
          if ($l[1] == true) {
            echo "${l[0]}年は、${l[2]}回目の閏年です <br/>";
          } else {
            echo "${l[2]}.<br/>";
          }
        }
      }
    ?>
  </body>
</html>
