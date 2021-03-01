<html>
  <body>
    <h1 class="title"> Leap Year </h1>
    <button>CSV出力</button>
    <br/>
    <?php
      function createCsv ($data,$name) {
        $file = fopen($name,"w");
        foreach ($data as $datum) { 
            fputcsv($file, $datum);
          };
        fclose($file);
      };

      $leaps = [["year","leap?","times"]];                                         //100000までをif文で閏年かどうかの判定をした上で、連想配列leapsに追加。
      $t = 0;                                              //何回目の閏年かを計算するための変数
      for ($y=1; $y<=1000; $y++){                          //[year]に年数、[isLeap]に閏年どうか、[times]に何回目の閏年か
        if ($y % 400 == 0) {                               //400の倍数は閏年
          $leaps[] = [$y,1,++$t];
        } elseif ($y % 100 == 0) {                         //100の倍数は平年
          $leaps[] = [$y,0,0];
        } elseif ($y % 4 == 0 ) {                          //4の倍数は閏年
          $leaps[] = [$y,1,++$t];
        } else {                                           //それ以外
          $leaps[] = [$y,0,0];
        }
      }

      createCsv($leaps,"test.csv")

      // var_dump ( $leaps );
      // foreach($leaps as $l){
      //   if ($l["isLeap"]) {
      //     echo "${l["year"]}年は、${l["times"]}回目の閏年です <br/>";
      //   } else {
      //     echo "${l["times"]}.<br/>";
      //   }
      // }
    ?>
  </body>
</html>
