<?php
require_once 'StarCalculator.php';

class StarAngles implements StarCalculator {
  static function calculate($sides){
    $ans = 180.0 - (720.0 / $sides);
    return round($ans, 3);
  }
}
?>
