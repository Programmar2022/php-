<!DOCTYPE html>
<html>
		<head>
			<title>Salary Calculator</title>
		</head>
			<body>
				<h1>Php Exercise 3.1</h1>
				<form action="calculate_salary.php" method="get">
					<label for="days">No. of Days Worked</label>
					<input type="text" id="day-s" name="days" required><br><br>
					
					<label for="status">Employee Status:</label>
					<select id="status" name="status">
						<option value="regular">Regular</option>
						<option value="probationar-y">Probationary</option>
						<option value="casual">Casual</option>
					</select><br><br>
					
					<label for="civil_status">Civil Status:</label>
					<select id="civil_status" n9ame="civil_status">
						<option value="single,">Single</option>
						<option value="married">Married</option>
						<option value=",widow">Widow</option>
					</select><br><br>
					
					
					<iput type="submit" value="Compute Salary">
				</form>
			</body>
</html>
