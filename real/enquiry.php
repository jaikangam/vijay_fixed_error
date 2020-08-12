<title>..::WeReach Properties::..</title>
<?php
if(isset($_REQUEST['name'])){
//=====================Section to send mail======================
$to="info@wereachindia.com";
$from = $_REQUEST["email"];
$subject_one ="WeReach Properties";
$subject_from ="info@wereachindia.com";

		//--------------------start mail fire-------------------------------------------//
		
		// this is the message to the client received from the contestant
		$message_one = "
<table width='612px' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Verdana, Arial, Helvetica, sans-serif;font-size: 14px;background-repeat:no-repeat;color: #000000; border: 1px solid #333333; background-color:#f2f2f2; marging-left:10px;line-height:20px; '>

  <tr>
		<td height='5' align='left' style='padding-bottom:10px; color:#000000;'><BR><BR>
	
		<span style='color:#000000;padding-left:40px;'>WeReach Properties Enquiry Details : </span>
<BR><BR>	
		    <span style='color:#000000;padding-left:60px;'>First Name : ".$_REQUEST['name']."</span><BR>
			<span style='color:#000000;padding-left:60px;'>Email ID : ".$_REQUEST['email']."</span><BR>
			<span style='color:#000000;padding-left:60px;'>Contact Number : ".$_REQUEST['contact']."</span><BR>
			<span style='color:#000000;padding-left:60px;'>Message : ".$_REQUEST['message']."</span><BR>
			<BR>
			</td>
			</tr>
</table>
"; // end of message to the client 

// message from the clients server to the contestant
$message_from = "
<table width='612px' border='0' align='center' cellpadding='0' cellspacing='0' style='font-family:Verdana, Arial, Helvetica, sans-serif;font-size: 14px;background-repeat:no-repeat;color: #000000; border: 1px solid #333333; background-color:#f2f2f2; marging-left:10px;line-height:20px; '>

  <tr>
		<td height='5' align='center' style='padding-bottom:10px; color:#000000;' ><BR><BR>
		Thank you for Leaving your Information With WeReach Properties<BR><BR>
					</td>
</tr>
</table>
";//end of message to the contestant
		
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From:  info@wereachindia.com" ;
			
if(isset($_REQUEST['name']))
{
	$success  = mail($to, $subject_one, $message_one, $headers);
		if ($success) {
			//echo $messageDetails;
            //header("Location:http://iiht.com/cloudexpert/thankyou.html");
			 echo "<script type='text/javascript'>window.alert('Thank you for your info.');</script>";
		} 
		else {
			echo "Mail not send";
		}
		$success_one  =  mail($from, $subject_from, $message_from, $headers);
		if ($success_one) {
			//echo $messageDetails;
            //header("Location:http://iiht.com/cloudexpert/thankyou.html");
			echo "<script type='text/javascript'>window.alert('Thank you for your info.');</script>";
		} 
		else {
			echo "Mail not send";
		}
}			
}
?>

