<?php
  $dr = array();
  $dr['continent'] = array();


  $dr['continent']['america'] = array();
  $dr['continent']['america'][0] = '애너하임';
  $dr['continent']['america'][1] = '올랜도';

  $dr['continent']['asia'] = array();
  $dr['continent']['asia'][0] = '우리야스';
  $dr['continent']['asia'][1] = '홍콩';
  $dr['continent']['asia'][2] = '상하이';

  echo "아메리카: <br>";
  echo $dr['continent']['america'][0]."<br>";
  echo $dr['continent']['america'][1]."<br>";
  echo "<br>";

  echo "아시아: <br>";
  echo $dr['continent']['asia'][0]."<br>";
  echo $dr['continent']['asia'][1]."<br>";
  echo $dr['continent']['asia'][2]."<br>";
  echo "<br>";

 ?>
