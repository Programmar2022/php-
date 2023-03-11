<!DOCTYPE html>
<html>
	<head>
		<title>Result</title>
	</head>
		<body>
		
		<?php
		
			// Get the selected processor and RAM from the form submission
				$processor = $_GET['processor'];
				$ram = $_GET['ram'];

			// Get the selected accessories from the form submission
				$accessories = isset($_GET['accessories']) ? $_GET['accessories'] : array();

			// Set the prices for each component
				$processor_prices = array(
				  'Intel i7-15000' => 15000,
				  'Intel Quad Core-8000' => 8000,
				  'Intel i5-13000' => 13000,
				  'Intel Dual Core - 6000' => 6000,
				  'Intel 13-10000' => 10000
				);
				
				$ram_prices = array(
				  '16GB-10000' => 10000,
				  '4GB-4000' => 4000,
				  '8GB-8000' => 8000,
				  '2GB-2000' => 2000
				);
				
				$accessory_prices = array(
				  'Gaming Keyboard-3000' => 3000,
				  'Gaming Mouse-2000' => 2000,
				  'Gaming Headset-3500' => 3500
				);

			// Calculate the total cost of the components
				$total_cost = $processor_prices[$processor] + $ram_prices[$ram];
				for ($accessories as $accessory) {
				  $total_cost += $accessory_prices[$accessory];
			}

			// Display the total cost
				echo 'Total : ' . $total_cost;
		?>
		
		</body>
</html>
