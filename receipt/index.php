<?php 

require_once("../includes/config.php");

$pageTitle = "Thank you for your order!";
$section = "none";

include(ROOT_PATH . "includes/header.php"); ?>

<div class="section page">
	<div class="wrapper">
		<h1>Thank you!</h1>
		<p>Thank you for your payment. The transaction has been completed.
			The receipt has been sent to your e-mail address. You can log into
			your account at 
			<a href="http://www.paypal.com/ru"></a> to view
			details of this transaction.</p>
		<p>Need another shirt already? Visit the 
			<a href="<?php echo BASE_URL; ?>shirts.php">Shirts Listing</a> page
			again.</p>
	</div>
</div>

<?php include(ROOT_PATH . "includes/footer.php"); ?>