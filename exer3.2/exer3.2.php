<!DOCTYPE html>
<html>
	<head>
		<title>PC Shop</title>
	</head>
		<body>
			<h1>PHP Exercise 3.2</h1>
			<h1>PHP PC Shop</h1>

			<form method="POST" action="calculate_total.php">
				<h2>Processor</h2>
			<ul>
			<input type="radio" name="processor" value="Intel i7-15000"> Intel i7 
			<input type="radio" name="processor" value="Intel Quad Core-8000"> Intel Quad Core<br>
			<input type="radio" name="processor" value="Intel i5-13000"> Intel i5
			<input type="radio" name="processor" value="Intel Dual Core - 6000"> Intel Dual Core <br>
			<input type="radio" name="processor" value="Intel 13-10000"> Intel i3<br>
			</ul>
				<h2>RAM</h2>
			<ul>
			<input type="radio" name="ram" value="16GB-10000"> 16GB
			<input type="radio" name="ram" value="4GB-4000"> 4GB<br>
			<input type="radio" name="ram" value="8GB-8000"> 8GB
			<input type="radio" name="ram" value="2GB-2000"> 2GB<br>
			</ul>
				<h2>Accessories</h2>
			<ul>
			<input type="checkbox" name="accessories[]" value="Gaming Keyboard-3000"> Gaming Keyboard<br>
			<input type="checkbox" name="accessories[]" value="Gaming Mouse-2000"> Gaming Mouse<br>
			<input type="checkbox" name="accessories[]"value="Gaming Headset-3500"> Gaming Headset<br>
			</ul>

			<input type="submit" name="submit" value="Compute">
			
			</form>
		</body>
</html>