//change"*"marker when radio option change
function emailMarkChange() 
{
    document.getElementById("emailmarker").style.visibility = "visible";	
	document.getElementById("phonemarker").style.visibility = "hidden"
	document.getElementById("mobilemarker").style.visibility = "hidden"
}

function phoneMarkChange() 
{
    document.getElementById("emailmarker").style.visibility = "hidden";
	document.getElementById("phonemarker").style.visibility = "visible"
	document.getElementById("mobilemarker").style.visibility = "hidden"
}

function mobileMarkChange() 
{
    document.getElementById("emailmarker").style.visibility = "hidden";
	document.getElementById("phonemarker").style.visibility = "hidden"
	document.getElementById("mobilemarker").style.visibility = "visible"
}
//apply and remove the required attributes when radio option change
function setPhoneRequired()
{
	phoneMarkChange();//change the marker as well
	document.getElementById("cusemail").removeAttribute("required");
	document.getElementById("cusphone").setAttribute("required","");
	document.getElementById("cusmobile").removeAttribute("required");
}

function setMobileRequired()
{
	mobileMarkChange();//change the marker as well
	document.getElementById("cusemail").removeAttribute("required");
	document.getElementById("cusphone").removeAttribute("required");
	document.getElementById("cusmobile").setAttribute("required","");
	
}

function setEmailRequired()
{
	emailMarkChange();//change the marker as well
	document.getElementById("cusemail").setAttribute("required","");
	document.getElementById("cusphone").removeAttribute("required");
	document.getElementById("cusmobile").removeAttribute("required");
	
}


function disableMagazine() //disable the magazine when the chekbox is false
{	
	magazineMarkChange();//change the marker
	var str = document.getElementById("streetaddress");
	var sub = document.getElementById("suburstate");
	var pos = document.getElementById("postcode");
	
	if (event.currentTarget.checked == false)
	{
		
		str.value = "";
		sub.value = "";
		pos.value = "";
		//clear the field
		
		str.removeAttribute("required","");
		sub.removeAttribute("required","");
		pos.removeAttribute("required","");
		// remove the required attribute
		
		str.disabled = true;
		sub.disabled = true;
		pos.disabled = true;
		//disable the filed and not allow user to enter information
	}
	
	else  // if user want to recive the magazine
	{
		str.setAttribute("required","");
		sub.setAttribute("required","");
		pos.setAttribute("required","");
		
		str.disabled = false;
		sub.disabled = false;
		pos.disabled = false;
	}
	
}

function magazineMarkChange()//hide or show the "*" marker when checkbox is checked or unchecked
{
	var streetMarker = document.getElementById("streemarker");
	var suburbMarker = document.getElementById("suburbmarker");
	var postMarker = document.getElementById("postmarker");
	
	if(event.currentTarget.checked == true)
	{
		streetMarker.style.visibility = "visible";
		suburbMarker.style.visibility = "visible";
		postMarker.style.visibility = "visible";
	}
	else
	{
		streetMarker.style.visibility = "hidden";
		suburbMarker.style.visibility = "hidden";
		postMarker.style.visibility = "hidden";
	}
}


//Check funtions

function formValidate() //check all field when submit

{	

	if (!checkBlankSpaces())
	{
		return false;
	}
	
	if (!surnameCheck())
	{
		return false;
	}	

	if (!othernameCheck())
	{
		return false;
	}	

	if (!mobileCheck())
	{
		return false;
	}
	
	if (!phoneCheck())
	{
		return false;
	}
	
	if (!emailCheck())
	{
		return false;
	}
	
	if (!postCodeCheck())
	{
		return false;
	}
	if (!userNameCheck())
	{
		return false;
	}
	if (!passwordCheck())
	{
		return false;
	}
	if (!passwordConfirm())
	{
		return false;
	}
	joinDates();
	return true;
}


function checkBlankSpaces() //check for blank spaces
{
	var a = document.getElementById("surname");
	var b = document.getElementById("othername");
	
	var c = document.getElementById("streetaddress");
	var d = document.getElementById("suburstate");
	var h = document.getElementById("postcode");
	
	var e = document.getElementById("joinusername");
	var f = document.getElementById("joinpass");
	var g = document.getElementById("verifypass");
	
	var x = document.getElementById("cusemail");
	var y = document.getElementById("cusmobile");
	var z = document.getElementById("cusphone");
	
	var j = document.getElementById("occupation");
	
	if(a.value.length == 0)
	{
		a.style.border = "3px solid #8bc34a";
		alert("The surname field is a required field and cannot be blank!");
		return false;
	}
	
	if(b.value.length == 0)
	{
		b.style.border = "3px solid #8bc34a";
		alert("The othername filed is a required field and cannot be blank!");
		return false;
	}
		
	if(x.required == true && x.value.length == 0) //if the field is required and blank
	{
		x.style.border = "4px solid #8bc34a";
		alert("The email field is a required field and cannot be blank!");
		return false;
	}
	if(y.required == true && y.value.length == 0)//if the field is required and blank
	{
		y.style.border = "4px solid #8bc34a";
		alert("The mobile field is a required field and cannot be blank!");
		return false;
	}
	if(z.required == true && z.value.length == 0)//if the field is required and blank
	{
		z.style.border = "4px solid #8bc34a";
		alert("The phone field is a required field and cannot be blank!");
		return false;
	}
    
	if(j.value == "")
	{
		j.style.border = "4px solid #8bc34a";
		alert("The occupation field is a required field and cannot be blank!");
		return false;
	}
		
	if(c.required == true && c.value.length == 0)//if the field is required and blank
	{
		c.style.border = "3px solid #8bc34a";
		alert("The streetaddress filed is a required field and cannot be blank!");
		return false;
	}
	if(d.required == true && d.value.length == 0)//if the field is required and blank
	{
		d.style.border = "3px solid #8bc34a";
		alert("The subur filed is a required field and cannot be blank!");
		return false;
	}
	if(h.required == true && h.value.length == 0)//if the field is required and blank
	{
		h.style.border = "3px solid #8bc34a";
		alert("The postCode filed is a required field and cannot be blank!");
		return false;
	}
	if(e.value.length == 0)
	{
		e.style.border = "3px solid #8bc34a";
		alert("The username filed is a required field and cannot be blank!");
		return false;
	}
	if(f.value.length == 0)
	{
		f.style.border = "3px solid #8bc34a";
		alert("The password filed is a required field and cannot be blank!");
		return false;
	}
	if(g.value.length == 0)
	{
		g.style.border = "3px solid #8bc34a";
		alert("The second passowrd filed is a required field and cannot be blank!");
		return false;
	}
	
	return true;
	
}

function surnameCheck()
{
	var lastName = document.getElementById("surname").value;
	pa1 = /^[A-Za-z]+$/;  //pattern
	if (lastName.length > 0 && !pa1.test(lastName))
	{
		alert("Please enter only word characters for your surname");
		surname.style.border = "3px solid #8bc34a";
		return false;
	}
	if (lastName.length > 50)
	{
		alert("Maximum 50 characters for surname field");
		surname.style.border = "3px solid #8bc34a";
		return false;
	}
    return true;
}

function othernameCheck()
{
	var otherName = document.getElementById("othername").value;
	pa1 = /^[A-Za-z]+$/; //pattern
	if (otherName.length > 0 && !pa1.test(otherName))
	{
		alert("Please enter only word characters for your othername");
		othername.style.border = "3px solid #8bc34a";
		return false;
	}
	if (otherName.length > 50)
	{
		alert("Maximum 50 characters for othername field");
		othername.style.border = "3px solid #8bc34a";
		return false;
	}
    return true;
}


function mobileCheck()
{
	var mobile = document.getElementById("cusmobile").value;
	pa1 = /^0[4,5]\d\d\d\d\d\d\d\d$/; //pattern, the mobile number must start with 0+4or5 digits
	if (mobile.length > 0 && !pa1.test(mobile))
	{
		alert("Incorrect mobile number, must all be digits and format should like 0401234567");
		cusmobile.style.border = "3px solid #8bc34a";
		return false;
	}
	
	return true;
}

function phoneCheck()
{
	var phone = document.getElementById("cusphone").value;
	pa1 = /^\(0[2,3,6,7,8,9]\)\s\d\d\d\d\d\d\d\d$/
	if (phone.length > 0 && !pa1.test(phone)) //pattern, the landline number must start with 0+2-3,6-9
	{
		alert("Incorrect Landline number, note that there is a single space between the brackets and last 8 digits");
		cusphone.style.border = "3px solid #8bc34a";
		return false;
	}
	
	return true;
}


function emailCheck()
{
	var email = document.getElementById("cusemail").value;
	pa1 = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
	//patter: must be zero or more word characters+ single "@" + zero or more word characters + ending
	
	if (email.length > 0 && !pa1.test(email))
	{
		alert("Incorrect email address");
		cusemail.style.border = "3px solid #8bc34a";
		return false;
	}
	
	if (email.length > 50)
	{
		alert("email address length must not greater than 50");
		cusemail.style.border = "3px solid #8bc34a";
		return false;
	}
	
	return true;
}


function userNameCheck()
{
	var userName = document.getElementById("joinusername").value;
	
	pa1 = /\s/; //pattern, a space
	
	if( userName.length < 6 || userName.length > 10)
	{
		alert("Username must has 6 characters and less than 10 characters");
		joinusername.style.border = "3px solid #8bc34a";
		return false;
	}
	
	if (userName.length > 0 && pa1.test(userName)) // if there is a space, return false
	{
		alert("Username must no have spaces");
		joinusername.style.border = "3px solid #8bc34a";
		return false;
	}

	return true;
}

function postCodeCheck()
{
	var postCode = document.getElementById("postcode").value;
	
	pa1 = /\d*/; //patter, zero or more repeats of a digits
	
	if (postCode.length > 0 && !pa1.test(postCode)) 
	{
		alert("Postcode must be 4 digits");
		postcode.style.border = "3px solid #8bc34a";
		return false;
	}
	if (postCode.required == true && postCode.length < 4) // if the postcode is required and less than 4 digits
	{
		alert("Postcode must be 4 digits");
		postcode.style.border = "3px solid #8bc34a";
		return false;
	}
		
	
	return true;


}

function passwordCheck()
{
	var userPass = document.getElementById("joinpass").value;
	
	if (userPass.length < 6) //if the passowrd is less than 6
	{
		alert("Password must has at least 6 characters");
		joinpass.style.border = "3px solid #8bc34a";
		return false;
	}
	pa0 = /\s/
	if (pa0.test(userPass)) //if there is a space
	{
		alert("Password must no has spaces");
		joinpass.style.border = "3px solid #8bc34a";
		return false;
	}	
	
	pa1 = /[0-9]/;
	if (!pa1.test(userPass)) // if there is not at least one digit
	{
		alert("Password must cotain a digit");
		joinpass.style.border = "3px solid #8bc34a";
		return false;
	}
	 
	pa2 = /[a-z]/
	if (!pa2.test(userPass))//if there is not at least one lowercase word character
	{
		alert("Password must cotain a lowercase letter");
		joinpass.style.border = "3px solid #8bc34a";
		return false;
	}
	 
	pa3 = /[A-Z]/
	if (!pa3.test(userPass))//if there is not at least one uppercase word character
	{
		alert("Password must cotain a uppercase letter");
		joinpass.style.border = "3px solid #8bc34a";
		return false;
	}
	pa4 = /\W/
	if (!pa4.test(userPass))//if there is not at least one special letter
	{
		alert("Password must cotain a special letter");
		joinpass.style.border = "3px solid #8bc34a";
		return false;
	}
	
	return true;
}

function passwordConfirm()
	{
		var userPass = document.getElementById("joinpass").value;
		var checkPass = document.getElementById("verifypass").value;
		if ( userPass != checkPass) //if the values of two field don't match
		{
			alert("Your passwords do not match, please check again!");
			verifypass.style.border = "3px solid #8bc34a";
			return false;
		}
		
		return true;
	}

function joinDates()
{
	var date = new Date();
	var day = date.getDate();
	var month = date.getMonth()+1;
	var year = date.getFullYear();
	var join = document.getElementById("joindate");
	var theDate;	
	if(month < 10) //if the month is less than 10 eg: 9
	{
		month = "0" + month; //eg: 09
	}
	if(day <10) //if the date is less than 10
	{
		day = "0" + day; //eg: 02
	}
	theDate = year + "-" + month + "-" + day;
	join.value = theDate;
}	
	
	
	