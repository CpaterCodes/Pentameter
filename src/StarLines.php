<?php

class StarLines {
  private const Two_PI =  2 * M_PI;

  static function calculate($sides, $diameter){
    if(!StarLines::validDiameter($diameter)){ return "Invalid diameter";}
    if(!StarLines::ValidSides($sides)){ return "See above";}
    $ans = sin((StarLines::Two_PI / $sides)) * $diameter;
    return StarLines::to_3_decs($ans);
  }

  private static function to_3_decs($ans){
    return round($ans, 3);
  }

  private static function ValidDiameter($diameter){
    return ($diameter > 0) && is_numeric($diameter);
  }

  private static function ValidSides($sides){
    return ($sides > 4) && is_numeric($sides) && ($sides == floor($sides));
  }
}
?>
