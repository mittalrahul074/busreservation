function ValidateForm(register){
	
	var mob = register.Mobile_Number.value;
	if(mob.length<10){
		alert("Please enter a valid mobile number!");
		return false;
	}

	var emailid = register.Email_Id.value;
	var regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
	if(regex.test(emailid)==false){
		alert("Please enter a valid email!");
		return false;
	}

	var password = register.Password.value;     
  	if(password.length<8){  
     		alert("Password length must be atleast 8 characters!");  
     		return false;  
  	}

	var pass1 = register.Password.value;
	var pass2 = register.Confirm_Password.value;
	if(pass1!=pass2){
		alert("The two passwords do not match!");
		return false;
	}

	alert("Account has been successfully created!");  
}