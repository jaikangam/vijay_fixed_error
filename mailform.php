<?php

$subject = "Request_details";

$message='<body style="margin:0 0 0 0;">

<br clear="all">
<div style="border-top:1px solid #666666;">&nbsp;</div>
<br>
<center> <h2>We Reach India Web Form Enquiry</h2></center>
<table>
 
 <tr><td>Name</td><td>:'.$_GET['name'].'</td><tr>
  
 <tr><td>Company Name</td><td>:'.$_GET['company'].'</td><tr>

 <tr><td>Phone</td><td>:'.$_GET['phone'].'</td><tr>

 <tr><td>Email</td><td>:'.$_GET['email'].'</td><tr>
 
 <tr><td>City</td><td>:'.$_GET['city'] .'</td><tr>
 
 <tr><td>Enquiry</td><td>:'.$_GET['message'] .'</td><tr>

</table>
<p>
<div style="border-top:1px solid #CCCCCC;text-align:center">
<br>
<a href="#" style="color:#535353; text-decoration:none">Copyright &copy; www.wereachindia.com</a></div>
</p></body>
';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: We Reach India <info@wereachindia.com>' . "\r\n".
			'Reply-To:'.$_GET['email']. "\r\n";
//$headers .= 'bcc: '. "\r\n";

$headers .= 'cc:lizamary.g@gmail.com'. "\r\n";


mail("info@wereachindia.com, vbreddy@wereachindia.com", "We Reach India Web Form Enquiry", $message, $headers);


echo ' <b>Processing your request<b>';

?>
