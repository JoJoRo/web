<!DOCTYPE html>
<html class="client-nojs" lang="en" dir="ltr">
<head>
<meta charset="UTF-8"/>
<title>Email with PHP</title>

  </head>
  <body>
	  <p>Sending email with PHP</p>
	  <?php
		$to = 'destination@server.whatever';
		$subject = 'Sent from 000webhost';
		$body = 'Email sent from 000webhost with PHP';
		$headers = 'From: user@000webhost.com';
		mail($to, $subject, $body, $headers);
	  ?>
  </body>
</html>
