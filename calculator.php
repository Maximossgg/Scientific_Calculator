<!DOCTYPE html>
<html>

<head>
	<title>Maximoss | Calculator</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
	<div class='container'>
		<div class="d-flex justify-content-center">
			<div class="row shadow p-3 mb-5 bg-white rounded mydiv">
				<h1>
					<center>Scientific Calculator By Maxi</center>
				</h1>
				<form method="get" class="input-group mb-3">
					<center>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1">1st Number</span>
							<input type="text" class='form-control' name="num1" placeholder="Enter 1st number">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1">2nd Number</span>
							<input type="text" class='form-control' name="num2" placeholder="Enter 2nd number"><br>
						</div>
						<button class='btn btn-dark' type="submit" name="+">+</button>
						<button class='btn btn-dark' type="submit" name="-">-</button>
						<button class='btn btn-dark' type="submit" name="*">*</button>
						<button class='btn btn-dark' type="submit" name="/">/</button>
						<button class='btn btn-dark' type="submit" name="%">%</button>
						<button class='btn btn-dark' type="submit" name="pow">Power</button>
						<button class='btn btn-dark' type="submit" name="squareroot">Squareroot</button>
						<button class='btn btn-dark' type="submit" name="sin">Sinus</button>
						<button class='btn btn-dark' type="submit" name="cos">Cosinus</button>
						<button class='btn btn-dark' type="submit" name="tan">Tangent</button>
						<button class='btn btn-dark' type="submit" name="log">Log2</button>
						<button class='btn btn-dark' type="submit" name="log10">Log10</button>
						<button class='btn btn-dark' type="submit" name="exp">Exponential</button>
						<button class='btn btn-dark' type="submit" name="decbin">10to2</button>
						<button class='btn btn-dark' type="submit" name="dechex">10to16</button>
						<button class='btn btn-dark' type="submit" name="decoct">10to8</button>
						<button class='btn btn-dark' type="submit" name="hexdec">16to10</button>
						<button class='btn btn-dark' type="submit" name="octdec">8to10</button>
					</center>
				</form>
				<div class='answer'>
					<center>
						<?php
						if (isset($_REQUEST['+'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$add = $num1 + $num2;
							echo "Result is : " . $add;
						} else if (isset($_REQUEST['-'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$sub = $num1 - $num2;
							echo "Result is : " . $sub;
						} else if (isset($_REQUEST['*'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$mul = $num1 * $num2;
							echo "Result is : " . $mul;
						} else if (isset($_REQUEST['/'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$div = $num1 / $num2;
							echo "Result is : " . $div;
						} else if (isset($_REQUEST['%'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$sub = $num1 % $num2;
							echo "Result is : " . $sub;
						} else if (isset($_REQUEST['squareroot'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$sqrt = sqrt($num1);
							echo "Result is : " . $sqrt;
						} else if (isset($_REQUEST['sin'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$sin = sin($num1);
							echo "Result is : " . $sin;
						} else if (isset($_REQUEST['cos'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$cos = cos($num1);
							echo "Result is : " . $cos;
						} else if (isset($_REQUEST['tan'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$tan = tan($num1);
							echo "Result is : " . $tan;
						} else if (isset($_REQUEST['log'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$log = log($num1);
							echo "Result is : " . $log;
						} else if (isset($_REQUEST['log10'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$log10 = log10($num1);
							echo "Result is : " . $log10;
						} else if (isset($_REQUEST['exp'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$exp = exp($num1);
							echo "Result is : " . $exp;
						} else if (isset($_REQUEST['pow'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$pow = pow($num1, $num2);
							echo "Result is : " . $pow;
						} else if (isset($_REQUEST['decbin'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$decbin = decbin($num1);
							echo "Result is : " . $decbin;
						} else if (isset($_REQUEST['dechex'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$dechex = dechex($num1);
							echo "Result is : " . $dechex;
						} else if (isset($_REQUEST['decoct'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$decoct = decoct($num1);
							echo "Result is : " . $decoct;
						} else if (isset($_REQUEST['hexdec'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$hexdec = hexdec($num1);
							echo "Result is : " . $hexdec;
						} else if (isset($_REQUEST['octdec'])) {
							$num1 = (float)$_REQUEST['num1'];
							$num2 = (float)$_REQUEST['num2'];
							$octdec = octdec($num1);
							echo "Result is : " . $octdec;
						}
						?>
					</center>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
<center>
	<b>Note !!</b> When you use any function from Squareroot until 8to10, you need to use only the first input !!! either that you will not get any result from the second input.<br> <br>
	Maximoss Copyright | 2021-2022
</center>

</html>