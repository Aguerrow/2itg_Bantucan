<!DOCTYPE html>
<html>
<head>
</head>
<body>
        <div class="container">
	<form method="post">
    <label for="salary">Enter your salary:</label> &nbsp; &nbsp;
		<input type="number" name="salary" id="salary" required style="font-size: 15pt"><br><br>
		<label>Enter the salary type:</label> &nbsp; &nbsp;
		<input type="radio" name="type" value="monthly" checked>Monthly &nbsp; &nbsp;
		<input type="radio" name="type" value="bi-monthly">Bi-Monthly<br><br>
		<button class="btn1" type="submit" value="Compute">COMPUTE</button>
	</form>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$salary = $_POST['salary'];
			$type = $_POST['type'];
			$taxableIncome = 0;
			$annualTax = 0;
			$monthlyTax = 0;

			if ($type == "bi-monthly") {
				$salary = $salary * 2;
			}

			// Compute taxable income
            //first
			$taxableIncome = $salary * 12;
			if ($taxableIncome <= 0 && $taxableIncome <=250000) {
				$annualTax = 0;
                //second
			} elseif ($taxableIncome > 250000 && $taxableIncome <= 400000) {
				$annualTax = 0.20 * ($taxableIncome - 250000);
                //third
			} elseif ($taxableIncome > 400000 && $taxableIncome <= 800000) {
				$annualTax = 30000 + 0.25 * ($taxableIncome - 400000);
                //fourth
			} elseif ($taxableIncome > 800000 && $taxableIncome <= 2000000) {
				$annualTax = 130000 + 0.30 * ($taxableIncome - 800000);
                //fifth
			} elseif ($taxableIncome > 2000000 && $taxableIncome <= 8000000) {
				$annualTax = 490000 + 0.32 * ($taxableIncome - 2000000);
                //sixth
			} else {
				$annualTax = 2410000 + 0.35 * ($taxableIncome - 8000000);
			}

			// Compute monthly tax and display results
			$monthlyTax = $annualTax / 12;
			$annualSalary = $salary * 12;
			$monthlySalary = $salary;

			echo "<h2>Results:</h2><br>";
			echo "<p style='color: #d4af37;'>Monthly Salary: " . number_format($monthlySalary, 2) . "</p>";
			echo "<p style='color: #d4af37;'>Annual Salary: " . number_format($annualSalary, 2) . "</p><br>";
			echo "<p style='color: #d4af37;'>Estimated Monthly Tax: " . number_format($monthlyTax, 2) . "</p>";
			echo "<p style='color: #d4af37;'>Estimated Annual Tax: " . number_format($annualTax, 2) . "</p>";
		}
	?>
</body>
</html>
