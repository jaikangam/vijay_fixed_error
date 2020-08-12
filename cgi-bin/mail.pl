#!/usr/bin/perl
use MIME::Lite;

$msg =  MIME::Lite->new (
From => 'iam@home.com',
To => 'temp098@rediff.com',
Subject => 'Test',
Type => 'text/html',
Data => qq{
<html>
<head>
<title>News Letter</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="252F3B">

<table width="512" border="0" cellpadding="0" cellspacing="0">
  <!--DWLayoutTable-->
  <tr>
    <td width="112" height="82" valign="top"><img src="http://www.wereachindia.com/new/newsletter/images/feedlogo.jpg" width="112" height="82"></td>
    <td width="208">&nbsp;</td>
    <td width="192">&nbsp;</td>
  </tr>
  <tr>
    <td height="188">&nbsp;</td>
    <td colspan="2" valign="top"><font size="2" face="Arial, Helvetica, sans-serif">Confirm
      Registration<br>
      Thanks for taking the time to register for a Zookoda account. </font><font face="Arial, Helvetica, sans-serif">
      <p><font size="2">You have been sent this email as part of our registration
        process.<br>
        By clicking the link below, we will verify your email address.</font></p>
      <p><font size="2">Click here to verify your email address.</font></p>
      <p><font size="2">This verification process allows us to confirm your email
        address<br>
        and to ensure your address was not used by another party.</font></p>
      <p><font size="2">Once verified, you will be provided with access to Zookoda.</font></p>
      </font> <p><font size="2" face="Arial, Helvetica, sans-serif">The Zookoda
        Customer Service Team</font><br>
      </p></td>
  </tr>
  <tr>
    <td height="26">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="28">&nbsp;</td>
    <td>&nbsp;</td>
    <td valign="top"><p><font size="2" face="Arial, Helvetica, sans-serif">Visit</font></p>
      <p><font size="2" face="Arial, Helvetica, sans-serif"><a href="http://www.wereachindia.com">WeReach
        Infotech</a></font></p></td>
  </tr>
  <tr>
    <td height="145">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>

}
);


$msg->attach(Type => 'TEXT',
Path => 'tr.pl',
Filename => 'tr.pl',
);

$msg->("smtp","mail.wereachindia.com");
