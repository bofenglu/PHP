<?php
  $x =1;
  function hello ($x) {
     $sum = $x * 2;
     echo "函數執行結束 <br />";
     return $sum;
  }
?>
<p> -------------我是分隔線------------</P>
<?php
  $sum = Hello($x);
  echo "x=$x<br />";
  echo "sum=$sum<br />";
  ?>
  