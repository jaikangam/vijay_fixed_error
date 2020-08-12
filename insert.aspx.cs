using System;
using System.Data;
using System.Configuration;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Web.UI.HtmlControls;
using System.Net.Mail;
using System.Web.Services;
public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {

    }
  
     [WebMethod]

    public static string Insertcontact(string Name, string Email, string Tele, string comments, string address)
    {


        string body = "Name:" + Name + "<br/>" + "Phone:" + Tele + "<br/>" + "E-Mail Address:" + Email  + "<br/>" + "Address:" + address  + "<br/>" + "Comments:" + comments ;

        MailMessage mailMessage = new MailMessage(new MailAddress("gmail@gmail.com")
                                       , new MailAddress("maruthi@websmartindia.com "));
        mailMessage.Subject = "Enquiry From Website";
        mailMessage.IsBodyHtml = true;
        mailMessage.Body = body;

        System.Net.NetworkCredential networkCredentials = new
        System.Net.NetworkCredential("websiteenquires@gmail.com", "enqALL$#@!");

        SmtpClient smtpClient = new SmtpClient();
        smtpClient.EnableSsl = true;
        smtpClient.UseDefaultCredentials = false;
        smtpClient.Credentials = networkCredentials;
        smtpClient.Host = "smtp.gmail.com";
        smtpClient.Port = 587;

        try
        {
            smtpClient.Send(mailMessage);
            return "true";
        }
        catch (Exception ex)
        {
            return "false";
        }
    }

     
}