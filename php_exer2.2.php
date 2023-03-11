<!DOCTYPE html>
<head>
   <title>Simple Calculator Program in PHP </title>
	</head>
	<h2>PHP Program to Make a Simple Calculator</h2><hr>
	First Number:<input name="first_number" value=""><br>
	Second Number:<input name="second_number" value=""><br>
	<input type="submit" name="calculation" value="add">
	<input type="submit" name="calculation" value="minus">
	<input type="submit" name="calculation" value="times">
	<input type="submit" name="calculation" value="divide"><br>
	Result: <input type='text' value="<?php echo $ans; ?>">
</form>
<?php
$ans;
if(isset($_POST['calculation'])){
   $number1=$_POST['first_number'];
   $number2=$_POST['second_number'];
   $results=$_POST['calculation'];
   if($results=="+")
   $ans=$number1+$number2;
   else if($results=="-")
   $ans=$number1-$number2;
   else if($results=="x")
   $ans=$number1*$number2;
   else if($results=="/")
   $ans=$number1/$number2;
}
?>
</body>
</html>