<head>
  <?php
    require 'src/PageHelpers.php';
    if(!isset($_POST['vertex-count']) && !isset($_POST['circumference'])){
      $_POST['vertex-count'] = false;
      $_POST['circumference'] = false;
    }
  ?>
  <title>Pentameter: A Pentacle helper!</title>
  <link rel="stylesheet" href="assets/style.css">
  <meta charset="utf-8">
</head>

<body>
  <h1>Pentameter</h1>
  <h3>Fill in the boxes as instructed to get useful metrics</h3>

  <div id='input-values'>
   <form action="submit" method="post">
     <input name="vertex-count" placeholder="Enter Vertices count here" type="text"><br>
     <input name="circumference" placeholder="Optionally, enter circumference here" type="text"><br>
     <input type="submit" value="Calculate">
   </form>
 </div>

 <div id='output-values'>
   Vertex Angle:
   <?php echo handleAngleInput(); ?><br><br>
   Line Length:
   <?php echo handleLineInput(); ?>
 </div>

</body>
