<html>
	<body>
		<title>Slope of a line</title>
		
	<?php
	$Y1;
	$Y2;
	$X1;
	$X2;
		$Y1 = $_GET['y1'];
		$Y2 = $_GET['y2'];
		$X1 = $_GET['x1'];
		$X2 = $_GET['x2'];
	echo"<p> Slope : ". ($Y1 - $Y2) / ( $X1 - $X2)."</p>";
	?>
	</body>
</html>