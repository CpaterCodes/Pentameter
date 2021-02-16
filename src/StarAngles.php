<?php

class StarAngles {
  static function calculate($sides){
    $ans = 180.0 - (720.0 / $sides);
    $ans_to_3_decimals = round($ans, 3);
    return $ans_to_3_decimals;
  }
}
?>
