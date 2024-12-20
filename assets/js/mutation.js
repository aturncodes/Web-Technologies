// JavaScript Document
// Declare Variables
var elList, addLink, newEl, newText, counter, listItems, newText2;
elList = document.getElementById('list'); //Location for newly added items
addLink = document.getElementById('addToList'); //Bind element for event to add item to list
counter = document.getElementById('counter'); //Place to update items in list


function addItem(e){
	e.preventDefault();
	newEl = document.createElement('div');
	
	newText2 = document.getElementById('itemName');
	newText = document.createTextNode(newText2.value);
	
	
	newEl.classList.add('alert');
	newEl.classList.add('alert-info');
	newEl.appendChild(newText);
	newEl.onclick = function (){this.remove;}; //Attempted lots of methods but really cant figure out why it they arent removing
	elList.appendChild(newEl);
}

function updateCount(){
	listItems = elList.getElementsByTagName('div').length;
	counter.innerHTML=listItems; //Counter updates on firefox but not on chrome for some reason
}

addLink.addEventListener('click', addItem, false);
elList.addEventListener('DOMNodeInserted', updateCount, false);