//phone number velidation
function numere(e){
      var unicode=e.charCode? e.charCode : e.keyCode
      if (unicode!=8){ 
      if (unicode<48||unicode>57)
      return false 
      }
      }
     function limitarelungime(obj, length){
        var lungime=length
        if (obj.value.length>lungime)
        obj.value=obj.value.substring(0, lungime)
      }
//email verification
function echeck(str) {
            var at = "@"
            var dot = "."
            var lat = str.indexOf(at)
            var lstr = str.length
            var ldot = str.indexOf(dot)
            if (str.indexOf(at) == -1) {
                alert("Invalid E-mail ID")
                return false
            }

            if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {
                alert("Invalid E-mail ID")
                return false
            }

            if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {
                alert("Invalid E-mail ID")
                return false
            }

            if (str.indexOf(at, (lat + 1)) != -1) {
                alert("Invalid E-mail ID")
                return false
            }

            if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {
                alert("Invalid E-mail ID")
                return false
            }

            if (str.indexOf(dot, (lat + 2)) == -1) {
                alert("Invalid E-mail ID")
                return false
            }

            if (str.indexOf(" ") != -1) {
                alert("Invalid E-mail ID")
                return false
            }

            return true
        }
	
	
	function verifycontact()
	{
            var themessage = "Please complete the following fields: ";
            var c = 0;

          if (document.f1.name.value == "First Name") {
                themessage = themessage + "\n 1) First Name";
                c = 1;
            }
			
			if (document.f1.email.value == "Email ID") {
                if (c == 1) {
                    themessage = themessage;
                }
                themessage = themessage + "\n 2) Email ID";
                c = 1;
            }
            else {
                if (echeck(document.f1.email.value) == false) {
                    document.f1.email.value = ""
                    document.f1.email.focus()
                    return false
                }
            }
			if (document.f1.contact.value == "Contact Number") {
                if (c == 1) {
                    themessage = themessage;
                }
                themessage = themessage + "\n 3) Contact Number";
                c = 1;
            }
			 
			
			 		
			if (document.f1.message.value == "") {
                if (c == 1) {
                    themessage = themessage;
                }
                themessage = themessage + "\n 4) Message";
                c = 1;
            }	 
			
			
					  
            //alert if fields are empty and cancel form submit
            if (themessage == "Please complete the following fields: ")
			{
                document.agreement.address.value = document.agreement.address1.value + " " + document.agreement.address2.value;
                document.agreement.submit();
            }
            else {
                alert(themessage);
                return false;
            }
        }          