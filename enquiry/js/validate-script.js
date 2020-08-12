// JavaScript Document
function validate()
{
	var msg ='';
		
	if(document.getElementById('comments').value == '')
	{
		msg = 'comments';
	}
	
	emailTmp=document.getElementById('email').value.split("@");
	if(emailTmp[1])
	{
	emailTmp=emailTmp[1].split(".");
	if(!emailTmp[1]){emailTmp[1]='';}
	}
	if(document.getElementById('email').value=='' || document.getElementById('email').value.indexOf("@") < 0 || document.getElementById('email').value.indexOf(".") < 0  || emailTmp[1].replace(/ /g,"")=='' || emailTmp[1].replace(/ /g,"").length <=1)
	{
	msg="Email";
	}		

	if(document.getElementById('phone').value == '')
	{
		msg = 'phone';
	}
	
	if(document.getElementById('name').value == '')
	{
		msg = 'name';	
	}
	
	if(msg == '')
	{
		document.getElementById('error').innerHTML=" <div style='color:#5FC116;'><b>Processing your request.....<b></div> ";
	fetchData('mailer.php?name='+document.getElementById('name').value+
			  '&phone='+document.getElementById('phone').value+										  
			  '&email='+document.getElementById('email').value+
			  '&comments='+document.getElementById('comments').value,'error');
	
	setTimeout("location.href='thank_you.html'",3000);
	}else
	{
		document.getElementById('error').innerHTML=" <div style='color:#f32626;'> &nbsp; Please check the <b>"+msg+"</b></div>";
	}
}



function fetchData(url,objectID)
{
    var pageRequest = false;
    if (window.XMLHttpRequest)pageRequest = new XMLHttpRequest();
    else if (window.ActiveXObject) pageRequest = new ActiveXObject('MSXML2.XMLHTTP.3.0');
    else return false;
     pageRequest.onreadystatechange = function() {
    try
        {
		    
            if (pageRequest.readyState > 3)
            {
                var object = document.getElementById(objectID);
                object.innerHTML = pageRequest.responseText;
            }
         }
    catch(err)
    {}
 
    }
    
    pageRequest.open('get',url,true);
    pageRequest.send(null);
}

function isAlphaKey(evt)
{
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 7 && (charCode < 48 || charCode > 57))
            return true;

         return false;
      }
	  
function isNumberKey(evt)
 {
         var charCode = (evt.which) ? evt.which : event.keyCode;
		 if (charCode == 32)
		 {
			return true; 
		 }
		 else if(charCode > 31 && (charCode < 48 || charCode > 57))
		 {
            return false;
		 }
		 else
		 {
         return true;
		 }
}