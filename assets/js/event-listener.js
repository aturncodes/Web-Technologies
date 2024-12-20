// JavaScript Document
function checkUsername()
{
var elMsg = document.getElementById('feedback');
var elUsername = document.getElementById('username');
if (elUsername.value.length < 5)
{
elMsg.innerHTML = '<h3>Username must be 5 characters or more</h3>';
}
else
{
elMsg.innerHTML = '';
}
}
var el = document.getElementById('username');
el.addEventListener('blur',checkUsername,false);