<html>
<head>
	<title><?php echo "$pageTitle"; ?></title>
	<link rel="stylesheet" href="/shirts4mike/css/new_style.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700" type="text/css">
	<link rel="shortcut icon" href="/shirts4mike/favicon.ico">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="/shirts4mike/">Shirts 4 Mike</a></h1>

			<ul class="nav">
				<li class="shirts <?php if ($section == "shirts") {
					echo "on";} ?>"><a href="/shirts4mike/shirts.php">Shirts</a></li>
				<li class="company <?php if ($section == "company") {
					echo "on";} ?>"><a href="/shirts4mike/company.php">Company</a></li>
				<li class="contact <?php if ($section == "contact") {
					echo "on";} ?>"><a href="/shirts4mike/contact.php">Contact</a></li>
				<li class="cart"><a target="paypal" href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&amp;business=EB5R92P7W7WUS&amp;display=1">Shopping Cart</a></li>
			</ul>

		</div>

	</div>
	
	<div id="content">