<!DOCTYPE html>
<html>
		<head>
			<title>Result</title>
		</head>
			<body>
			
		<?php
		
				$days = $_POST['days'];
				$status = $_POST['status'];
				$civil_status = $_POST['civil_status'];
				

			if ($status == 'regular') {
				$salary_rate = 500;
			} elseif ($status == 'probationary') {
				$salary_rate = 400;
			} else {
				$salary_rate = 300;
			}

			if ($civil_status == 'single') {
				$tax_rate = 0.12;
			} elseif ($civil_status == 'married') {
				$tax_rate = 0.10;
			} else {
				$tax_rate = 0.07;
			}

				$gross_pay = $days * $salary_rate;
				$tax_amount = $gross_pay * $tax_rate;
				$net_pay = $gross_pay - $tax_amount  ;

				echo  "Result<br><br> ";
				echo "Gross Salary: $gross_pay.00<br>";
				echo "Tax : " . ($tax_rate * 100) . "% <br>";
				echo "Deduction: $tax_amount.00<br> .";
				echo "Net Salary: $net_pay.00<br>";
		?>
			</body>
</html>