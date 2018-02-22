<?php include('Program.class.php')?>
<?php include('SvgRenderer.class.php')?>
<?php include ('Shape.class.php')?>
<?php include('Rectangle.class.php')?>
<?php include('Circle.class.php')?>


<?php

$program = new Program();
$renderer = new SvgRenderer();

$program ->run($renderer);





?>

//<!DOCTYPE html>
//<html>
//<body>

//<svg height="140" width="500">
//  <ellipse cx="200" cy="80" rx="100" ry="50" style="fill:yellow;stroke:purple;stroke-width:2" />
//  Sorry, your browser does not support inline SVG.
//</svg>

//</body>
//</html>
