

document.getElementById("contactphone").onclick = setPhoneRequired;
document.getElementById("contactmobile").onclick = setMobileRequired;
document.getElementById("contactemail").onclick = setEmailRequired;


var el = document.getElementById("magzine");
el.addEventListener("click", disableMagazine);

document.getElementById("surname").onchange = surnameCheck;
document.getElementById("othername").onchange = othernameCheck;
document.getElementById("cusmobile").onchange = mobileCheck;
document.getElementById("cusphone").onchange = phoneCheck;
document.getElementById("cusemail").onchange = emailCheck;
document.getElementById("joinusername").onchange = userNameCheck;
document.getElementById("postcode").onchange = postCodeCheck;
document.getElementById("joinpass").onchange = passwordCheck;
document.getElementById("verifypass").onchange = passwordConfirm;

document.getElementById("submit").onclick = formValidate;
