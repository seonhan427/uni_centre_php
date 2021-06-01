<?php
  $str = "everdevel";

  $cutStr = substr($str, 0,5);

  echo $cutStr;

  echo '<br>';

  $cutStrEnd = substr($str, -5,5);

  echo $cutStrEnd;

  $sname = "김선한";
  echo '<br>';

  $cutfirstname = substr($sname,0,3);

  $cutlastname = substr($sname,3,10);

  echo $cutfirstname;
  echo '<br>';
  echo $cutlastname;
 ?>
