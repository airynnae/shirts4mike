<?php
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = trim($_POST["name"]);
		$email = trim($_POST["email"]);
		$message = trim($_POST["message"]);

		$error_message = array();

		if (! $name OR ! $email or ! $message) {
			array_push($error_message, "You shall introduce yourself, post your address and message.");
		}

		foreach( $_POST as $value ) {
			if( stripos($value,'Content-Type:') !== FALSE ){
				array_push($error_message, "There was a problem with the information you entered.");
			}
		}

		if ($_POST["address"]) {
			array_push($error_message, "Your form submission has an error.");
		}

		require_once("includes/phpmailer/class.phpmailer.php");
		$mail = new PHPMailer();

		if (!$mail->ValidateAddress($email)) {
			array_push($error_message, "You must specify a valid e-mail address.");
		}

		if (!$error_message) {
			$email_body = "";
			$email_body = $email_body . "<b>" . "Name: " . "</b>" . $name . "<br />";
			$email_body = $email_body . "<b>" . "Email: " . "</b>" . $email . "<br />";
			$email_body = $email_body . "<b>" . "Message: 
							" . "</b>" . "<p>" . $message . "</p>";
			
			// Send Email

			$mail->SetFrom($email, $name);

			$address = "weblearner@mail.ru";
			$mail->AddAddress($address, "Shirts 4 Mike");

			$mail->Subject    = "Shirt 4 Mike Contact form Submission | " . $name;

			$mail->MsgHTML($email_body);

			if ($mail->Send()) {
				header("Location: contact.php?status=thanks");
				exit;

			} else {
				$email_error = "There was an error sending the email: " . $mail->ErrorInfo;
				array_push($error_message, $email_error);
			}
		}
	}

?>
<?php 
$pageTitle = "Contact Mike the Frog!";
$section = "contact";
include("includes/header.php") ?>

<div class="section page">
	<div class="wrapper">
	<h1>Contact</h1>

	<?php 
	if (isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>
		<p>Thanks for the email! I&rsquo;ll 
			be in touch shortly.</p>
	
	<?php } else { 
			if (isset($error_message)) {
				foreach ($error_message as $one_error) { 
					echo '<p class="message">' . $one_error . '</p>';
				}
			} else { ?>
				<p>I would love to hear from you. Complete the 
			following form to send me an email.</p>
			<?php }
	 ?>

		<form method="post" action="contact.php">
			<table>
				<tr>
					<th><label for="name">Name</label></th>
					<td><input type="text" name="name" id="name"
						value="<?php if (isset($name)) { echo htmlspecialchars($name); } ?>"></td>
				</tr> <!-- End of row 1 -->

				<tr>
					<th><label for="email">E-mail</label></th>
					<td><input type="text" name="email" id="email"
						value="<?php if (isset($email)) { echo htmlspecialchars($email); } ?>"></td>
				</tr> <!-- End of row 2 -->

				<tr>
					<th><label for="message">Message</label></th>
					<td>
						<textarea name="message" id="message"><?php if (isset($message)) { echo htmlspecialchars($message); } ?></textarea>
					</td>
				</tr> <!-- End of row 3 -->

				<tr>
					<th><label for="reason">Reason for inquiry</label></th>
					<td><select name="reason" id="reason">
						<option value="blank">&mdash; choose one &mdash;</option>
						<option value="trouble">Order trouble</option>
						<option value="feedback">Feedback</option>
						<option value="attention">Wanting attention</option>
					</td>
				</tr> <!-- End of row 4 -->

				<tr style="display: none;">
					<th><label for="address">Address</label></th>
					<td>
						<input type="text" name="address" id="address">
						<p>Humand (and animals): please leave this field empty.</p>
					</td>
				</tr> <!-- End of GhostRow -->				
			</table>
			<input type="submit">
		</form>

		<?php } ?>
	</div>	
</div>


<?php include("includes/footer.php") ?>