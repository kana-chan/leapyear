<html>
  <body>
    <h1 class="title"> Leap Year </h1>
    <form action="index.php" method = "post">
      <button type="submit" name = "csv"> CSV出力</button>
    </form>

    <?php
      function createCsv ($data,$name) {
        $file = fopen($name,"w");
        foreach ($data as $datum) { 
          fputcsv($file, $datum);
        };
        fclose($file);
        echo "出力完了";
      };
      
      $leaps = [["year","leap?","times"]];                            //100000までをif文で閏年かどうかの判定をした上で、leapsに追加。[0]に年数、[1]に閏年どうか、[2]に何回目の閏年か
      $t = 0;                                                         //何回目の閏年かを計算するための変数
      for ($y=1; $y<=100000; $y++){                                  //10**5まですべてを出力ならこちらを使ってください
        if ($y % 400 == 0) {                                       //400の倍数は閏年
          $leaps[] = [$y,1,++$t];
        } elseif ($y % 100 == 0) {                                 //100の倍数は平年
          $leaps[] = [$y,0,0];
        } elseif ($y % 4 == 0 ) {                                  //4の倍数は閏年
          $leaps[] = [$y,1,++$t];
        } else {                                                   //それ以外
          $leaps[] = [$y,0,0];
        }
      }
      // for ($y=1; $y<=100000; $y++){                                     //10＊＊5のうち、閏年である年のみ出力するならこちら
      //   if (($y % 400 == 0) || (($y % 4 == 0 )&&($y % 100 != 0))) {   //400の倍数、または4の倍数かつ100の倍数でない場合は閏年
      //     $leaps[] = [$y,1,++$t];
      //   }
      // }
      if (isset($_POST["csv"])){                                      //csv出力ボタンを押したら、csv出力がされるように
        createCsv($leaps,"test.csv");
      }

      // var_dump ( $leaps );                                         //これ以下はテスト時に使用しました。
      // foreach($leaps as $l){
      //   if ($l[1]) {
      //     echo "${l[0]}年は、${l[2]}回目の閏年です <br/>";
      //   } else {
      //     echo "${l[2]}.<br/>";
      //   }
      // }
      ?>
  </body>
</html>
