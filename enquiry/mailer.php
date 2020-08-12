
<?php

$subject = "Request_details";

$message='<body style="margin:0 0 0 0;">
<div style="font-family:Arial,verdana, sans-serif;font-size:12px;color:#535353; letter-spacing:.2px; background-image:url(); background-repeat:repeat-x;padding:10px;">
<div style="float:left;">
  
</div>
<br clear="all">
<div style="border-top:1px solid #666666;">&nbsp;</div>
<br>
<center> <h2>Web Request</h2></center>
<table>
 <tr><td>Name</td><td>:'.$_GET['name'].'</td><tr>
 <tr><td>Phone</td><td>:'.$_GET['phone'].'</td><tr>
 <tr><td>Email</td><td>:'.$_GET['email'].'</td><tr>
 <tr><td>Message</td><td>:'.$_GET['comments'].'</td><tr>
</table>
<p>
<div style="border-top:1px solid #CCCCCC;text-align:center">
<br>
<a href="#" style="color:#535353; text-decoration:none">Copyright &copy; wereachindia.com</a></div>
</p></body>
';



$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 $headers .= 'From: '.$_GET['name'].' <'.$_GET['email'].'>' . "\r\n".
             'Reply-To:'.$_GET['email']. "\r\n";
$headers .= 'bcc: rajeswarip.boonze@gmail.com'. "\r\n";
$headers .= 'cc: webleads@o3mdm.com, dinesh.s@o3mdm.com, liza.mary@o3mdm.com'. "\r\n";

mail("vbreddy@wereachindia.com", "We Reach India [Leads by O3M]", $message, $headers);
echo ' <div style="color:#5FC116"> <b>Processing your request...<b></div>';

?>
