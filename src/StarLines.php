<?php

class StarLines {
  private const Two_PI =  2 * M_PI;

  static function calculate($sides, $circ){
    $ans = sin((StarLines::Two_PI / $sides)) * $circ;
    $ans_to_3_decimals = round($ans, 3);
    return $ans_to_3_decimals;
  }
}
?>
