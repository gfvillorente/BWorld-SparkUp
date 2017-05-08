// This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      console.log('The person is not logged into your app or we are unable to tell.');
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '972395896226367',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  FB.AppEvents.logPageView();

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', {locale: 'en_US', fields: 'name, email, picture'}, function(response) {
					 console.log(response);
					 document.getElementById('signin').innerHTML = 'LOG OUT';
 					 document.getElementById('signin').style.paddingLeft = '14px';
					 document.getElementById('signin').style.paddingRight = '14px';
					 document.getElementById('signin').setAttribute('onclick','signout()');
					 
					 currentUser.id = parseInt(response.id);
					 currentUser.name = response.name;
					 if (response.picture.data.url) {
						 currentUser.avatarUrl = response.picture.data.url;
					 } else {
						 currentUser.avatarUrl = "./img/Generic Avatar.png";				 
					 }
					 					 
					 sideComments.setCurrentUser(currentUser);
					 
		});
  }
  
  function signin() {
  	FB.login(function(response) {
				if (response.authResponse) {
				 console.log('Welcome!  Fetching your information.... ');
				 FB.api('/me', {locale: 'en_US', fields: 'name, email, picture'}, function(response) {
					 console.log(response);
					 document.getElementById('signin').innerHTML = 'LOG OUT';
 					 document.getElementById('signin').style.paddingLeft = '14px';
					 document.getElementById('signin').style.paddingRight = '14px';
					 document.getElementById('signin').setAttribute('onclick','signout()');
					 
					 currentUser.id = parseInt(response.id);
					 currentUser.name = response.name;
					 if (response.picture.data.url) {
						 currentUser.avatarUrl = response.picture.data.url;
					 } else {
						 currentUser.avatarUrl = "./img/Generic Avatar.png";				 
					 }
					 					 
					 sideComments.setCurrentUser(currentUser);
					 
				 });
				} else {
				 console.log('User cancelled login or did not fully authorize.');
				}
		},{scope: 'public_profile,email'});
  }
  
  function signout() {
		FB.logout(function(response) {
			console.log('User is now logged out.');
			window.location.reload();
		});
  }