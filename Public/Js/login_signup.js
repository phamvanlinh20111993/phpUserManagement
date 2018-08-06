


var validateEmail = function(email){

	var str = "";
	var evalidate = /^[a-zA-Z0-9_]+(?:\.[a-zA-Z0-9_])*@[a-zA-Z0-9_]+(?:\.[a-zA-Z0-9_]+)*$/
	if(email.length < 1){
		str = "Địa chỉ email bắt buộc."
	}
	else if (!evalidate.test(email)){
		str = "Địa chỉ email không đúng định dạng."
	}

	return str;
}

var validatePassword = function(password){

	var str = ""
	var strongp = /(?=.*[A-Z]+)(?=.*[a-z]+)(?=.*[0-9]+)(?=.*[!@#$%^&~*?^]+)(?=.{15,})/
    var mediump = /(?=.*[A-Z]+)(?=.*[a-z]+)(?=.*[0-9]+)(?=.*[!@#$%^&~*?^]+)(?=.{10,})/
    var weakp = /(?=.{4,10})(?=.*[a-z]+)(?=.*[0-9]+)/

    if(password.length < 1){
		str = "Mat khau bắt buộc."
	}
    else if(!weakp.test(password)){
       str = "Mat khau khong dung dinh dang."         
    }

	return str;
}


var username = document.getElementById("username")
var password = document.getElementById("password")
var emailerr = document.getElementById("errorusername")
var passworderr = document.getElementById("errorpassword")

username.onclick = function(){
	emailerr.innerHTML = ""
}

password.onclick = function(){
	passworderr.innerHTML = ""
}


document.getElementById("loginform").onclick = function(){

	emailerr.innerHTML = validateEmail(username.value)
	passworderr.innerHTML = validatePassword(password.value)

	if( emailerr.innerHTML == "" &&  passworderr.innerHTML == ""){
		//post
		// data = {email: username.value, pass: password.value }
		// requestServer('/UserManagement/Controller/login_signup.php', 'POST', data, 1, 
		//   function(error, data){
		// 	console.log(data)
		//   })

		document.getElementById("loginForm").submit();
	}

}