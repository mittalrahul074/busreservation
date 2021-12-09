function CheckEmail(emailid){
	var regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;
	if(regex.test(emailid.value)==false){
		alert("Please enter a valid email!");
		return false;
	}
	console.log(emailid);
	return check();
}

function check(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	if(email=="mittalrahul074@gmail.com"){
		if(pass=="mittalrahul074@gmail.com"){
			window.location.href = "index.html"
		}
		else{
			alert("Please Enter Valid Details");
		}
	}
	else{
		alert("Please Enter Valid Details");
	}
}