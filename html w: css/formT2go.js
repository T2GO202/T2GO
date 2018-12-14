//formT2go.js
// the "driver function that handles, at the highest level,
// the form data validation and display

function formT2go()
  {
		var contactObj = document.getElementById("contactformT2go");
		var name = contactObj.name.value;
		var email = contactObj.email.value;
		var everythingGOOD = true;
		
		if (!validateName(name))
		{
			alert("Error: please insert name.");
			everythingGOOD = false;
		}
		
		
		if (!validateEmail(email))
		{
			alert("Error: please insert a valid email address.");
			everythingGOOD = false;
		}
		

		if (everythingGOOD)
		{
			if (contactObj.reply.checked)
				alert ("Warning: the e-mail feature is currently not supported.")_
			alert ("Thank you!");
			return true;
			}
			else
				return false;
				
	}
	
	
function validateName(name)
{
	var p = name.search(/^[-'\w\s]+$/);
	if (p == 0)
		return true;
	else
		return false;
}


function validateEmail(address)
{
    var p = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (p == 0)
        return true;
    else
        return false;
}