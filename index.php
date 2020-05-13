<!DOCTYPE html>
<html>
<?php
    include_once 'dbconnection.php';
    
    //include_once 'mailingListFunctions.php';
    
//    function signUp($firstName,$lastName,$emailAddress,$msg){
//        insertDetailsToMailingList($con, $firstName, $lastName, $emailAddress);
//        alert($msg);
//    }
    
    
    ?>
<head>
	<title>Broughty Ferry Art Supplies</title>
	<meta name="viewport"content="width=device-width, initial-scale=1">
	<style type="text/css" media="all">
		@import "styles/main.css";
	</style>
        
        
	<script type="text/javascript">
//		function signUp(firstName, lastName, emailAddress){
//                    //call mailingListInsert to insert details into database.
//                    insertDetailsToMailingList($con,firstName, lastName, emailAddress);
//                    //show current members of database
//                    alert("The following details have been collected for registration to our mailing list: \n"+"First Name: "+ firstName + "\n"+"Last Name: "+lastName + "\n"+"Email Address: "+ emailAddress+"\n"+"(Mailing list functionality is not available in this prototype.)");
//		}

		function search(searchTerm){
			alert("Your search term was "+searchTerm+".\n"+"(Search functionality is not available in this prototype.)");
		}

		function deadEnd(){
			alert("That section of the website is not available in this prototype.");
			
		}
	</script>
</head>
<body>
	<!-- some kind of currency selector interface-->
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

	<div class="homeGalleryPicture"><a href="watercolourPaintSection.html"><img src="images/watercolourPaintGeneral.jpg">
		<div class="homeGalleryPictureTitle">
			<h2>Watercolour Paint</h2>
		</div>
		</a>
	</div>
	<div class="homeGalleryPicture"><a href="acrylicPaintSection.html" onclick="deadEnd();return false;"><img src="images/acrylicPaintGeneral2.jpg">
		<div class="homeGalleryPictureTitle">
			<h2>Acrylic Paint </h2>
		</div>
		</a> 
	</div>
	<div class="homeGalleryPicture"><a href="brushesSection.html" onclick="deadEnd();return false;"><img src="images/brushesGeneral2.jpg">
		<div class="homeGalleryPictureTitle">
			<h2>Brushes   </h2>
		</div>
		</a>
	</div>
	<div class="homeGalleryPicture"><a href="paperSection.html" onclick="deadEnd();return false;"><img src="images/paperGeneral.jpg">
		<div class="homeGalleryPictureTitle">
			<h2>Paper</h2>
		</div>
		</a>
	</div>
	<div class="homeGalleryPicture"><a href="pensAndMarkersSection.html" onclick="deadEnd();return false;"><img src="images/markersGeneral.jpg">
		<div class="homeGalleryPictureTitle">
			<h2>Pens & Markers </h2>
		</div>
		</a>
	</div>
	<div class="homeGalleryPicture"><a href="communitySection.html"><img src="images/communityGeneral.jpg">
		<div class="homeGalleryPictureTitle">
			<h2>Community </h2>
		</div>
		</a>
	</div>

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