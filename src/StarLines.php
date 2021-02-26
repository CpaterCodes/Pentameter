<?php

class StarLines {
  private const Two_PI =  2 * M_PI;

  static function calculate($sides, $circ){
    if(!StarLines::validCirc($circ)){ return "Invalid circumference";}
    if(!StarLines::ValidSides($sides)){ return "See above";}
    $ans = sin((StarLines::Two_PI / $sides)) * $circ;
    return StarLines::to_3_decs($ans);
  }

  private static function to_3_decs($ans){
    return round($ans, 3);
  }

  private static function ValidCirc($circ){
    return ($circ > 0) && is_numeric($circ);
  }

  private static function ValidSides($sides){
    return ($sides > 4) && is_numeric($sides) && ($sides == floor($sides));
  }
}
?>
