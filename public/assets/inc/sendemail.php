<?php
require_once __DIR__ . '/app/settings.php';
try {

	//Content
	$name = isset($_POST['name']) ? preg_replace("/[^\.\-\' a-zA-Z0-9]/", "", $_POST['name']) : "";
	// $senderEmail = isset($_POST['email']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email']) : "";
	$senderEmail = '432washim@gmail.com';
	$phone = isset($_POST['phone']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone']) : "";
	$services = isset($_POST['services']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['services']) : "";
	$subject = isset($_POST['subject']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject']) : "";
	$address = isset($_POST['address']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['address']) : "";
	$website = isset($_POST['website']) ? preg_replace("/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['website']) : "";
	$message = isset($_POST['message']) ? preg_replace("/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message']) : "";

	if (!empty($senderEmail)) {
		if (empty($name) || empty($message)) {
			// Load the HTML template and replace placeholders
			$template = file_get_contents('template/newsletter.html');
			// $template = str_replace('{{name}}', 'John Doe', $template);
			// To mail
			$mail->addAddress($senderEmail);
			// Content
			$mail->Subject = 'Newsletter Subscription';
			$mail->Body = $template;
			$mail->AltBody = 'Thanks for subscribing to our newsletter.';
			$mail->send();


			// Send to admin
			$mail->clearAddresses(); // Clear previous addresses
			$template = file_get_contents('template/admin-newsletter.html');
			$template = str_replace('{{email}}', $senderEmail, $template);


			$mail->addAddress(Env::get('ADMIN_EMAIL')); // Add admin email
			// Add CC or BCC if needed
			// $mail->addCC('name@example.com', 'name');
			// $mail->addBCC('name@example.com', 'name');
			// Content
			$mail->Subject = 'New Subscriber Added';
			$mail->Body = $template;
			$mail->AltBody = 'New Newsletter Subscription';
			$mail->send();


			echo "<div class='alert alert-success' role='alert'>
        Thanks for contacting us.
      </div>";

		} else {

			// sent user email
			$template = file_get_contents('template/user-template.html');
			$template = str_replace('{{name}}', $name, $template);
			$template = str_replace('{{message}}', $message, $template);

			$mail->addAddress($senderEmail, $name);
			// Add CC or BCC if needed
			// $mail->addCC('name@example.com', 'name');
			// $mail->addBCC('name@example.com', 'name');
			// Content
			$mail->Subject = 'Thanks for contacting us.';
			$mail->Body = $template;
			$mail->AltBody = 'We have received your message and will get back to you as soon as possible';
			$mail->send();







			// Send to admin
			$mail->clearAddresses(); // Clear previous addresses
			$template = file_get_contents('template/admin-template.html');
			$template = str_replace('{{name}}', $name, $template);
			$template = str_replace('{{message}}', $message, $template);
			$template = str_replace('{{email}}', $senderEmail, $template);

			if (!empty($phone)) {
				$template = str_replace('{{phone}}', $phone, $template);
				$template = str_replace('class="phone-hide"', 'class="phone-show"', $template);
			}
			//  else {
			// 	$template = str_replace('{{phone}}', 'N/A', $template);
			// }
			if (!empty($subject)) {
				$template = str_replace('{{subject}}', $subject, $template);
				$template = str_replace('class="subject-hide"', 'class="subject-show"', $template);
			}
			//  else {
			// 	$template = str_replace('{{subject}}', 'N/A', $template);
			// }



			$mail->addAddress(Env::get('ADMIN_EMAIL')); // Add admin email
			// Add CC or BCC if needed
			// $mail->addCC('name@example.com', 'name');
			// $mail->addBCC('name@example.com', 'name');
			// Content
			$mail->Subject = 'New Contact Form Submission';
			$mail->Body = $template;
			$mail->AltBody = 'A new contact form submission has been received.';
			$mail->send();





			echo "<div class='alert alert-success' role='alert'>
        Thanks for contacting us.
      </div>";

		}

	} else {
		echo "<div class='alert alert-danger' role='alert'>
        Please fill in all required fields.
      </div>";

	}

	// if ($phone) {
	// 	$mail->Body .= 'Phone: ' . $phone . "<br>";
	// }
	// if ($services) {
	// 	$mail->Body .= 'services: ' . $services . "<br>";
	// }
	// if ($subject) {
	// 	$mail->Body .= 'Subject: ' . $subject . "<br>";
	// }
	// if ($address) {
	// 	$mail->Body .= 'Address: ' . $address . "<br>";
	// }
	// if ($website) {
	// 	$mail->Body .= 'Website: ' . $website . "<br>";
	// }

	// $mail->Body .= 'message: ' . "<br>" . $message;

} catch (Exception $e) {
	echo "<div class='alert alert-danger' role='alert'>
        Message could not be sent. Mailer Error: {$mail->ErrorInfo}
      </div>";

}
