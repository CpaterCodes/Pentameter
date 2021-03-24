<?php
require 'src/StarAngles.php';
require 'src/StarLines.php';

function handleAngleInput(){
  if($_POST['vertex-count']){
    return StarAngles::calculate($_POST['vertex-count']);
  }
  return 'Please provide a number of vertices';
}

function handleLineInput(){
  if($_POST['diameter'] && $_POST['vertex-count']){
    return StarLines::calculate($_POST['vertex-count'], $_POST['diameter']);
  }
  return 'Diameter Pending';
}

?>
