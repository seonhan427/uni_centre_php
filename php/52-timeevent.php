<?php
  $startTime = mktime(0,0,0,6,1,2021);
  $endTime = mktime(3,0,0,6,1,2021);

  $nowTime = time();

  if ($nowTime >= $startTime && $nowTime <= $endTime) {
    echo "현재 이벤트에 참여할 수 있는 시간입니다.";
  } else {
    echo "이벤트 시작 전이거나 종료되었습니다.";
  }
 ?>
