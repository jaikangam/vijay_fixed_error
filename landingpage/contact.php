<?php

    // multiple recipients
$to  = ' info@wereachindia.com,  lizamary.g@gmail.com'; // note the comma

$subject = 'Enquiry Form';
$name=$_POST['name'];
$email = $_POST['email'];
$phone = $_POST['mobile'];
$question = $_POST['message'];
 
$message = "
<html>
<head>
<title>We Reach India</title>

</head>
<body>
<div class='col-xs-12 col-sm-6 col-lg-3' id='box'>
	
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41114169-1', 'auto');
  ga('send', 'pageview');

</script>
	
<table>
<tr>
<th style='background: #9c0000; padding-top: 10px; padding-bottom: 10px; text-align: center; width: 40%;color: #fff;font-size:20px;' colspan=2>
        $subject
</th>
</tr>
<tr>
   <td  style='padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;background: #ffe7a0;
        font-size:14px;'>
        Name
    </td>
    <td style='padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;background: #ffe7a0;
       font-size:14px;'>: $name
    </td>
</tr>
<tr>
   <td  style='padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;background: #ffe7a0;
	font-size:14px;'>
    Email
    </td>
    <td style='padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;background: #ffe7a0;
	font-size:14px;'>: $email
    </td>
</tr>
<tr>
   <td  style='padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;background: #ffe7a0;
	font-size:14px;'>
Mobile No        
</td>
   <td style='padding-top: 10px;padding-bottom: 10px;padding-left: 10px;padding-right: 10px;background: #ffe7a0;
    font-size:14px;'>
        $phone
            </td>
   </tr>  
 <tr>
   <td style='padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
    background: #ffe7a0;

	font-size:14px;'>Message</td>
   <td style='padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 10px;
    background: #ffe7a0;

	font-size:14px;'>:$question</td>
   </tr>  
 
   </table>
	
	  </div>
    </div>
	
	</div>
</body>
</html>
";
 // Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";



// More headers
$headers .= "From:" . $email . "\r\n";

$headers1  = "From:" . $to."\r\n";
$headers1 .= "MIME-Version: 1.0" . "\r\n";
$headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$body             = "<html>
<body>
<div style='background: #fff7e0;
    width: 65%;
    box-shadow: 2px 2px 2px 2px #ccc;
    border-radius: 10px;
    margin-left: 66px;'>
<p>Welcome To We Reach India <br/>
Thanks You For Contact We Will Contact Soon...</p>

</div>
</body>
</html>";
$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
$sent = mail($to,$subject,$message,$headers); 
$sent = mail($email,$subject,$body,$headers1);

if ($sent)
{
echo"<script>window.open('http://wereachindia.com/landingpage/thank_you.php','_self')</script>";
} else {
echo "There has been an error sending your comments. Please try later.";
}

?>