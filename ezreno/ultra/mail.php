<?php

function sanitize($val) {
	return htmlspecialchars($val);
}

$name = sanitize($_POST['name']);
$email = sanitize($_POST['email']);
$address = sanitize($_POST['address']);
$details = sanitize($_POST['details']);
$date = sanitize($_POST['date']);
$phone = sanitize($_POST['phone']);
$service = sanitize($_POST['service']);
$message = sanitize($_POST['message']);
$type = sanitize($_POST['type']);

// recipients
$to  = 'info@ez-reno.com';

// subject
if ($type == 'book_service') $subject = 'Book Service';
else if ($type == 'contact_us') $subject = 'Contact Us';
else $subject = 'Unknown Request';

// message
$html = '<html><head><title>Automated Email From EZ-Reno.com</title></head><h1>'.$subject.'</h1>';
if ($name) $html .= '<p>Name: '.$name.'</p>';
if ($email) $html .= '<p>Email: '.$email.'</p>';
if ($address) $html .= '<p>Address: '.$address.'</p>';
if ($phone) $html .= '<p>Phone: '.$phone.'</p>';
if ($service) $html .= '<p>Service: '.$service.'</p>';
if ($message) $html .= '<p>Message: '.$message.'</p>';
if ($details) $html .= '<p>Details: '.$details.'</p>';
if ($date) $html .= '<p>Date: '.$date.'</p>';
$html .= '</body></html>';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: EZ-Reno.com <info@ez-reno.com>' . "\r\n";
$headers .= 'From: Do Not Reply <do_not_reply@ez-reno.com>' . "\r\n";

// Mail it
$retval = mail($to, $subject, $html, $headers);


if ($retval) die('success');
else die('error');

?>