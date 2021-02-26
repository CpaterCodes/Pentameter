<?php

class StarAngles {
  static function calculate($sides){
    if(!StarAngles::isValid($sides)){ return "Please use a valid integer"; }
    $ans = 180.0 - (720.0 / $sides);
    return StarAngles::to_3_decs($ans);
  }

  private static function to_3_decs($ans){
    return round($ans, 3);
  }

  private static function isValid($sides){
    return ($sides > 4) && is_numeric($sides) && ($sides == floor($sides));
  }
}
?>
