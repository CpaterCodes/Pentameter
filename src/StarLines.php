<?php

class StarLines {
  private const Two_PI =  2 * M_PI;

  static function calculate($sides, $circ){
    if(!StarLines::validCirc($circ)){ return "Invalid circumference";}
    $ans = sin((StarLines::Two_PI / $sides)) * $circ;
    return StarLines::to_3_decs($ans);
  }

  private static function to_3_decs($ans){
    return round($ans, 3);
  }

  private static function ValidCirc($circ){
    return ($circ > 0) && is_numeric($circ);
  }
}
?>
