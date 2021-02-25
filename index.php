<head>
  <?php
    require 'src/PageHelpers.php';
  ?>
  <title>Pentameter: A Pentacle helper!</title>
  <meta charset="utf-8">
</head>

<body>
  <div id='input-values'>
   <form action="submit" method="post">
     Vertices: <input name="vertex-count" placeholder="Enter a value" type="text"><br>
     Circumference: <input name="circumference" placeholder="(Optional)" type="text"><br>
     <input type="submit" value="Calculate">
   </form>
 </div>

 <div id='output-values'>
   Vertex Angle:
   <?php echo handleAngleInput(); ?><br>
   Line Length:
   <?php echo handleLineInput(); ?>
 </div>

</body>
