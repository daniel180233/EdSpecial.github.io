<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PAYMENT</title>
	<link rel="stylesheet" href="payment/payment.css">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,900&family=Poppins:wght@500&family=Work+Sans:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<header>

	<div class="container">
		
		<div class="left">
		<a href="userpayment.php"><img src="pic/back.png" alt=""></a>
			<h3>BILLING ADDRESS</h3>
			<form action="#" method="post">
				Full name
				<input type="text" name="" placeholder="Enter name" required />
				Email
				<input type="text" name="" placeholder="Enter email">

				Address
				<input type="text" name="" placeholder="Enter address">
				
				City
				<input type="text" name="" placeholder="Enter City">
				<div id="zip">
					<label>
						State
						<select>
							<option>Choose State..</option>
							<option>Rajasthan</option>
							<option>Hariyana</option>
							<option>Uttar Pradesh</option>
							<option>Madhya Pradesh</option>
						</select>
					</label>
						<label>
						Zip code
						<input type="number" name="" placeholder="Zip code">
					</label>
				</div>
			</form>
		</div>
		<div class="right">
			<h3>PAYMENT</h3>
			<form>
				Accepted Card <br>
				<img src="payment/image/card1.png" width="100">
				<img src="payment/image/card2.png" width="50">
				<br><br>

				Credit card number
			<input type="text" name="" placeholder="Enter card number">
				
				Exp month
				<input type="text" name="" placeholder="Enter Month">
				<div id="zip">
					<label>
						Exp year
						<select>
							<option>Choose Year..</option>
							<option>2022</option>
							<option>2023</option>
							<option>2024</option>
							<option>2025</option>
						</select>
					</label>
						<label>
						CVV
						<input type="number" name="" placeholder="CVV">
					</label>
				</div>
			</form>
			<input type="submit" name="" value="Proceed to Checkout">
		</div>
	</div>
</header>
</body>
</html>