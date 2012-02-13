// JavaScript Document
/* Stuff Used From */
//developer.apple.com/internet/webcontent/validation.html
//www.w3schools.com/js/js_form_validation.asp

function runValidate(thisform){
	//Runs the whole validation sequence
	submitOK = "true";
	var elem = document.admin;
	
	if(isEmpty(elem.name)==false)
		submitOK = "false";
	if(isEmpty(elem.street_address)==false)
		submitOK = "false";
	if(isEmpty(elem.city)==false)
		submitOK = "false";
	if(checkDropdown(elem.state)==false)
		submitOK = "false";
	if(checkZip(elem.zip)==false)
		submitOK = "false";

	if(submitOK == "false")
		return false;
}

//Validation stuff

function isEmpty(elem){
	//Determines if the field is empty or null
	if(elem.value==null||elem.value==""){
		showErrors(elem);
		return false;
	}else{
		elem.style.background = '#ffffff';
		return true;
	}
}

function isEmail(elem){
	//Checks to see if the corresponding field is an email.
	apos = elem.value.indexOf("@");
	dotpos = elem.value.lastIndexOf(".")
		
	if(apos<1 || dotpos-apos<2){
		showErrors(elem);
		return false;
	}else{
		elem.style.background = '#ffffff';
		return true;
	}
}

function checkDropdown(elem){
	//Checks to see if a valid dropdown choice is chosen
	if(elem.value == 0 || elem.value == 1){
		showErrors(elem);
		return false;
	}else{
		elem.style.background = '#ffffff';
		return true;
	}
}

function checkZip(elem){
	//Checks to see if the field is a valid zip code
	//Checks to see if anything was put it
	if(isEmpty(elem)==false){
		showErrors(elem);
		return false;
	}
	//Strips out the dash

	var stripped = elem.value.replace(/-/g,""); //Strips out the dash
											  value = stripped; //Debug
	//Checks to see if the field contains letters
	if (isNaN(stripped)){
		showErrors(elem);
		return false;
	}
	//Checks to see if the length is 5 or 9 numbers long
	if(stripped.length == 5 || stripped.length == 9){
		 elem.style.background = '#ffffff';
		 return true;
	}else{
		showErrors(elem);
		return false;
	}
}
		
function checkPhone(elem){
	//Checks to see if the field is a valid phone number
	//Checks to see if anything was put it
	if(isEmpty(elem)==false){
		showErrors(elem);
		return false;
	}
	//Strips out the usual phone number elements
	var stripped = elem.value
	
	for(i=0;i<elem.value.length;i++){
		stripped = elem.value.replace(/[\(\)\.\-\ ]/g, ""); //Strips out the usual phone number elements
	}
		
	elem.value = stripped; //Sets the value to the stripped numbers
		
	//Checks to see if the field contains letters
	if (isNaN(stripped)){
		showErrors(elem);
		return false;
	}
	//Checks to see if the length is 10 numbers long
	if(stripped.length == 10){
		 elem.style.background = '#ffffff';
		 return true;
	}else{
		showErrors(elem);
		return false;
	}
}

function showErrors(field){
	//Shows the errors in the form.
	elem = document.getElementById("error");
	elem.style.display = 'block';
	
	//Changes the color of the input field
	field.style.background = '#ffffaa';
}
