<?php

$field_first_name = $_POST['register_names'];

$field_email = $_POST['register_email'];

$field_ticket = $_POST['register_ticket'];

$field_pesan = $_POST['pesan'];

$mail_to = 'to@email.com';

$subject = 'Message from a site visitor '.$field_first_name;

$body_message = 'From: '.$field_first_name."\n";

$body_message .= 'E-mail: '.$field_email."\n";

$body_message .= 'Ticket: '.$field_ticket."\n";

$body_message .= 'Pesan: '.$field_pesan;


$headers = 'From: '.$field_email."\r\n";

$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		//alert('Thank you for the message. We will contact you shortly.');
		window.location = '<?php echo base_url(); ?>';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		//alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = '<?php echo base_url(); ?>';
	</script>
<?php
}
?>