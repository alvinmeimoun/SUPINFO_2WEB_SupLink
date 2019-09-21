window.onload = hello; 

function hello() { 
    showLogin();
}

function showLogin(){
	document.getElementById('div_register').style.visibility='hidden';
	document.getElementById('div_login').style.visibility='visible';
}

function showRegister(){
	document.getElementById('div_login').style.visibility='hidden';
	document.getElementById('div_register').style.visibility='visible';
}