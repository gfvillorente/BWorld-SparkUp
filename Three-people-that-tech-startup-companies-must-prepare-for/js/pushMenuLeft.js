var menuLeft = document.getElementById('cbp-spmenu-s1');
var showLeftPush = document.getElementById('menu');
var	body = document.body;
var signIn = document.getElementById('signin');
var logo = document.getElementById('logo');
var state = false; //initially close
showLeftPush.onclick = function() {
	classie.toggle(this, 'active');
	classie.toggle(body, 'cbp-spmenu-push-toright');
	classie.toggle(menuLeft, 'cbp-spmenu-open');
	state = !state;
	if(state == true) {
		showLeftPush.focus();
		showLeftPush.style.position = 'fixed';
		logo.style.position = 'relative';
		signIn.style.position = 'fixed';
		if(Math.abs(window.orientation) === 90 ) {
			showLeftPush.style.left = '190px';
			logo.style.left = '190px';
			signIn.style.right = '-190px';
		} else {
			showLeftPush.style.left = '240px';
			logo.style.left = '240px';
			signIn.style.right = '-240px';
		}
	} else {
		showLeftPush.blur();
		showLeftPush.style.position = 'fixed';
		showLeftPush.style.left = '0px';
		logo.style.position = 'relative';
		logo.style.left = '0px';
		signIn.style.position = 'fixed';
		signIn.style.right = '0px';
	}
	var style = window.getComputedStyle(showLeftPush);
	var showLeftPushLeft = style.getPropertyValue('left');
	console.log(showLeftPushLeft);

};
var touchSparktionary = document.getElementById('sparktionaryImageFromMenu');
var touchCommunity = document.getElementById('communityImageFromMenu');
function activateSparktionary(){
	touchSparktionary.src = './img/Sparktionary Button Active.png';
}
function deactivateSparktionary(){
	touchSparktionary.src = './img/Sparktionary Button.png';
}
function activateCommunity(){
	touchCommunity.src = './img/Community Button Active.png';
}
function deactivateCommunity(){
	touchCommunity.src = './img/Community Button.png';
}