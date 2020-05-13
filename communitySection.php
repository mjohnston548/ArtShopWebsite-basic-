<!DOCTYPE html>
<html>
<head>
	<title>Community</title>
	<meta name="viewport"content="width=device-width, initial-scale=1">
	<style type="text/css" media="all">
		@import "styles/main.css";
		@import "styles/community.css";
	</style>
	<script type="text/javascript">
		function signUp(firstName, lastName, emailAddress){
			alert("The following details have been collected for registration to our mailing list: \n"+"First Name: "+ firstName + "\n"+"Last Name: "+lastName + "\n"+"Email Address: "+ emailAddress+"\n"+"(Mailing list functionality is not available in this prototype.)");
		}

		function search(searchTerm){
			alert("Your search term was "+searchTerm+".\n"+"(Search functionality is not available in this prototype.)");
		}

		function deadEnd(){
			alert("That section of the website is not available in this prototype.");
			
		}
	
		function register(emailAddress){
			alert("You have entered the following email address: "+emailAddress+"\n\n"+"(Email notifications are not available in this prototype.)");
		}

	</script>
</head>
<body>
	<div id="banner"><img src="images/bannerImg.jpg">
		<div id="websiteTitle"><a href="index.php"><h1>Broughty Ferry Art Supplies</h1></a>
		
		</div>
		<div id="searchPanel">
		<form>
			<input id="productSearch" type="text"  placeholder="Search" pattern="[a-zA-Z0-9]{1,40}" title="Alpa-numeric characters only">
			
			<input type="submit" value="Search" onClick="search(document.getElementById('productSearch').value)" >
		</form>
		</div>
	</div>
	<div id="menu">
		<div class="menuLink"><a href="watercolourPaintSection.php"><b>  PAINTING</b></a> </div>
		<div class="menuLink"><a href="pensAndMarkersSection.html" onclick="deadEnd();return false;"><b>  DRAWING</b></a> </div>
		<div class="menuLink"><a href="paperSection.html" onclick="deadEnd();return false;"><b> SURFACE</b></a> </div>
		<div class="menuLink"><a href="communitySection.php"><b> COMMUNITY</b></a> </div>


	</div>
	<div id="mainContainer">
		
		<h1>Latest Art Events</h1>
		<button class="accordion">Art Gallery Visit</button>
		<div class="panel">
  			<p><div class="floatedImage"><img src="images/communityEventImage1.jpg"></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum
  			<br>
					
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum</p>
		</div>

		<button class="accordion">Painting Class (Arbroath)</button>
		<div class="panel">
  			<p><div class="floatedImage"><img src="images/communityEventImage2.jpg"></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum
  			<br>
					
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum</p>
		</div>

		<button class="accordion">Painting Class (Dundee)</button>
		<div class="panel">
  			<p><div class="floatedImage"><img src="images/communityEventImage3.jpg"></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum
  			<br>
					
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum</p>
		</div>
		<br>
		<br>

<script type="text/javascript">
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var panel = this.nextElementSibling;
		    if (panel.style.maxHeight){
		      panel.style.maxHeight = null;
		    } else {
		      panel.style.maxHeight = panel.scrollHeight + "px";
		    } 
		  });
		}
</script>

		<h2>Upcoming Events</h2>

		<button class="accordion2">Art Gallery Visit</button>
		<div class="panel">
  			<p><div class="floatedImage"><img src="images/communityEventImage1.jpg"></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum
  			<br>
					
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum</p>
			<br>
			<br>
                        <form method="GET" action="databaseConfirmationPage.php">
				<p>To register for this event input your email address below. To be notified of all upcoming events, enter your details at the bottom of the page.</p>
				Email Address: <input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address" pattern="[a-z0-9._%+-]{1,32}+@[a-z0-9.-]{1,32}+\.[a-z]{2,}$" title="Alpha-numeric characters followed by an @ symbol, and your email provider's website">
				<input type="submit" value="Register" name="registerButton">
                                <input type="submit" value="De-Register" name="deregisterButton">
			</form>
		</div>

		<button class="accordion2">Painting Class (Arbroath)</button>
		<div class="panel">
  			<p><div class="floatedImage"><img src="images/communityEventImage2.jpg"></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum
  			<br>
					
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum</p>
			<br>
			<br>
			<form method="GET" action="databaseConfirmationPage.php">
				<p>To register for this event input your email address below. To be notified of all upcoming events, enter your details at the bottom of the page.</p>
                                Email Address: <input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address" pattern="[a-z0-9._%+-]{1,32}+@[a-z0-9.-]{1,32}+\.[a-z]{2,}$" title="Alpha-numeric characters followed by an @ symbol, and your email provider's website">
                                <input type="submit" value="Register" name="registerButton">
                                <input type="submit" value="De-Register" name="deregisterButton">
			</form>
		</div>

		<button class="accordion2">Painting Class (Dundee)</button>
		<div class="panel">
  			<p><div class="floatedImage"><img src="images/communityEventImage3.jpg"></div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum
  			<br>
					
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 	incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 	exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 	dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 	Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 	mollit anim id est laborum</p>
			<br>
			<br>
			<form method="GET" action="databaseConfirmationPage.php">
				<p>To register for this event input your email address below. To be notified of all upcoming events, enter your details at the bottom of the page.</p>
				Email Address: <input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address" pattern="[a-z0-9._%+-]{1,32}+@[a-z0-9.-]{1,32}+\.[a-z]{2,}$" title="Alpha-numeric characters followed by an @ symbol, and your email provider's website">
				<input type="submit" value="Register" name="registerButton">
                                <input type="submit" value="De-Register" name="deregisterButton">
			</form>
		</div>
		<br>
		<br>

<script type="text/javascript">
		var acc = document.getElementsByClassName("accordion2");
		var i;

		for (i = 0; i < acc.length; i++) {
		  acc[i].addEventListener("click", function() {
		    this.classList.toggle("active");
		    var panel = this.nextElementSibling;
		    if (panel.style.maxHeight){
		      panel.style.maxHeight = null;
		    } else {
		      panel.style.maxHeight = panel.scrollHeight + "px";
		    } 
		  });
		}
</script>


<div id="footerContent">
		<div class="footerSection">
		<h3>Contact Section/About Section</h3>
		<p>Broughty Ferry Art Supplies was established in Broughty Ferry, Dundee (Scotland) in 1973 and aimed to provide local and national customers with high quality art supplies and also facilitate the growth of the local art community. Since then, Broughty Ferry Art Supplies has strived to stock all the tools imaginable to artists of all stripes and experience level. We searched for the most highly rated materials and products and made sure our devoted customers receive only the best advice at all stages of their journey.</p>
		<p></p>
		<p>Broughty Ferry Art Supplies also invests heavily into the local art community, sponsoring art groups, funding art events and gallery viewings. See our community section for the lastest upcoming events.</p>
		</div>
		<div class="footerSection">
		<h3>Join Our Mailing List:</h3>
		<p>Get news, reviews and exclusive offers.</p>
                <form action="databaseConfirmationPage.php" method="GET">
			<!--tried to align the input boxes and failed using this method: 
			https://stackoverflow.com/questions/4309950/how-to-align-input-forms-in-html-->
			<div class="formElement">
                            First Name: <input type="text" id="firstName" name="firstName" placeholder="First Name" pattern="[a-zA-Z]{1,32}" title="Only letters can be used here.">
			</div>
			<br>
			<div class="formElement">
                            Last Name: <input type="text" id="lastName" name="lastName" placeholder="Last Name" pattern="[a-zA-Z]{1,32}" title="Only letters can be used here.">
			</div>
			<br>
			<div class="formElement">
                            Email Address: <input type="email" id="emailAddress" name="emailAddress" placeholder="Email Address" pattern="[a-z0-9._%+-]{1,32}+@[a-z0-9.-]{1,32}+\.[a-z]{2,}$" title="Alpha-numeric characters followed by an @ symbol, and your email provider's website">
			</div>
			<br>
                        <input type="submit" value="Sign Up" id="signUpButton" name="signUpButton">
                        <input type="submit" value="Unsubscribe" name="unsubButton">
                        <input type="submit" value="Update Email Address" name="updateButton">

		</form>
		
		</div>
	</div>

</body>
</html>