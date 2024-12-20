// JavaScript Document

var elFirstName = document.getElementById('firstName');
var elLastName = document.getElementById('lastName');
var elEmail = document.getElementById('email');
var elPhone = document.getElementById('phone');
var elUsername = document.getElementById('username');
var elPassword = document.getElementById('password');
var elComments = document.getElementById('comments');


function checkName(minLength, inputGroup, inputStatus, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	var elInput = document.getElementById(inputEl);
	
	if(elInput.value.length < minLength || !hasNoNumbers(elInput.value)){
		elStatus.innerHTML = inputEl.toUpperCase()+' must be '+minLength+' characters or more and contain no numbers';
		elGroup.classList.add('has-error');
	}
	else{
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
}

function checkUser(minLength, inputGroup, inputStatus, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	var elInput = document.getElementById(inputEl);
	
	if(elInput.value.length < minLength){
		elStatus.innerHTML = inputEl.toUpperCase()+' must be '+minLength+' characters or more';
		elGroup.classList.add('has-error');
	}
	else{
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
}

function hasNoNumbers(str) {
  return !/\d/.test(str);
}

function checkNumber(inputGroup, inputStatus, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	var elInput = document.getElementById(inputEl);
	
	if(elInput.value.length < 10 || elInput.value.length > 10 || !/^\d+$/.test(elInput.value)){
		elStatus.innerHTML = inputEl.toUpperCase()+' must be a full 10 numbers with no hypens (1234567890)';
		elGroup.classList.add('has-error');
	}
	else{
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
}

function validateEmail(email, inputStatus, inputGroup){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	

	

	elStatus.innerHTML = '';

	elGroup.classList.add('has-success');
	
}

function checkComments(minLength, inputGroup, inputStatus, inputEl){
	var elStatus = document.getElementById(inputStatus);
	var elGroup = document.getElementById(inputGroup);
	var elInput = document.getElementById(inputEl);
	
	if(elInput.value.length < minLength){
		elStatus.innerHTML = 'Please leave any comments regarding your inquiry in the box';
		elGroup.classList.add('has-error');
	}
	else{
		elStatus.innerHTML = '';
		elGroup.classList.remove('has-error');
		elGroup.classList.add('has-success');
	}
}


elFirstName.addEventListener('blur', function(){
	checkName(2,'firstNameGroup', 'firstNameStatus', 'firstName');
	}, false);
elLastName.addEventListener('blur', function(){
	checkName(2,'lastNameGroup', 'lastNameStatus', 'lastName');
	}, false);
elEmail.addEventListener('blur', function(){
	validateEmail('email', 'emailStatus', 'emailGroup');
}, false);
elPhone.addEventListener('blur', function(){
	checkNumber('phoneGroup','phoneStatus','phone');
}, false);
elUsername.addEventListener('blur', function(){
	checkUser(6,'usernameGroup','usernameStatus','username');
}, false);
elPassword.addEventListener('blur', function(){
	checkUser(6,'passwordGroup','passwordStatus','password');
}, false);
elComments.addEventListener('blur', function(){
	checkComments(1,'commentsGroup','commentsStatus','comments');
}, false);