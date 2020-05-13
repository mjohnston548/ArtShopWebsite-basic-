<!DOCTYPE html>
<html>
<?php





?>
<head>
	<title>Broughty Ferry Art Supplies</title>
	<meta name="viewport"content="width=device-width, initial-scale=1">
	<style type="text/css" media="all">
		@import "styles/main.css";
		@import "styles/watercolourPaintSection.css"
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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

		
		//watercolor page code for hiding/showing elements
		function hideByColor(colorSelected){
			// use jquery to select all elements which do not contain the given class name (colorSelected)
			
			$(".cardHolder").not("."+colorSelected).hide();
			
			
		
		}
		function hideByBrand(brandSelected){
			$(".cardHolder").not("."+brandSelected).hide();
		}
		function hideByType(typeSelected){
			$(".cardHolder").not("."+typeSelected).hide();
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

	<div id="sectionHeader">
		<div class="headerHalf">
	
		<p>Watercolor (American English) or watercolour (British English; see spelling differences), also aquarelle (French, diminutive of Latin aqua "water"), is a painting method in which the paints are made of pigments suspended in a water-based solution. Watercolor refers to both the medium and the resulting artwork. Aquarelles painted with water-soluble colored ink instead of modern water colors are called "aquarellum atramento" (Latin for "aquarelle made with ink") by experts. However, this term has been more and more passing out of use. <a href="https://en.wikipedia.org/wiki/Watercolor_painting">Wikipedia</a> </p>
		</div>
		<div class="headerHalf">
			<img src="images/watercolourPaintDescriptionImage.jpg">
		</div>
	</div>
	<br>
	<div id="filterBox">
		<h3>Filter by colour</h3>
		<label class="container">Red
	  		<input type="checkbox" autocomplete="off"  onclick="hideByColor('Red')">
	  		<span class="checkmark"></span>
		</label>
		<label class="container">Yellow
  			<input type="checkbox" autocomplete="off" onclick="hideByColor('Yellow')">
  			<span class="checkmark"></span>
		</label>
		<label class="container">Blue
  			<input type="checkbox" autocomplete="off" onclick="hideByColor('Blue')">
  			<span class="checkmark"></span>
		</label>
		<label class="container">Green
  			<input type="checkbox" autocomplete="off"  onclick="hideByColor('Green')" >
  			<span class="checkmark"></span>
		</label>
		<label class="container">Grey
  			<input type="checkbox" autocomplete="off" onclick="hideByColor('Grey')">
  			<span class="checkmark"></span>
		</label> 
		<label class="container">Purple
  			<input type="checkbox" autocomplete="off" onclick="hideByColor('Purple')">
  			<span class="checkmark"></span>
		</label>

		<h3>Filter by brand</h3>
		<label class="container">Sennelier
	  		<input type="checkbox" autocomplete="off" onclick="hideByBrand('Sennelier')">
	  		<span class="checkmark"></span>
		</label>
		<label class="container">St Petersburg
  			<input type="checkbox" autocomplete="off" onclick="hideByBrand('StPetersburg')">
  			<span class="checkmark"></span>
		</label>
		<label class="container">Windsor & Newton
  			<input type="checkbox" autocomplete="off" onclick="hideByBrand('windsorAndNewton')">
  			<span class="checkmark"></span>
		</label>
		<label class="container">Daniel Smith
  			<input type="checkbox" autocomplete="off" onclick="hideByBrand('DanielSmith')">
  			<span class="checkmark"></span>
		</label>
		<label class="container">M. Graham
  			<input type="checkbox" autocomplete="off" onclick="hideByBrand('mGraham')">
  			<span class="checkmark"></span>
		</label>

		<h3>Filter by paint type</h3>
		<label class="container">Tube
	  		<input type="checkbox" autocomplete="off" onclick="hideByType('Tube')">
	  		<span class="checkmark"></span>
		</label>
		<label class="container">Pan
  			<input type="checkbox" autocomplete="off" onclick="hideByType('Pan')">
  			<span class="checkmark"></span>
		</label>
		

	</div>
	<div id="mainPanel">
		<div class="cardHolder Sennelier Green Tube Paint" id="myDiv">
			<div class="card">
				<img src="images/watercolourTubePaint1.jpg" style="width:100%">
				<h2>Sennelier Bright Yellow Green Paint</h2>
				<p class="price">£20.00</p>
				<p>Text about product</p>
				<p><button>Add to Cart</button></p>
			</div>
		</div>
		<div class="cardHolder StPetersburg Red Tube Paint">	
			<div class="card">
				<img src="images/watercolourTubePaint2.jpg" style="width:100%">
				<h2>White Nights Cadmium Red Light Paint</h2>
				<p class="price">£20.00</p>
				<p>Text about product</p>
				<p><button>Add to Cart</button></p>
			</div>
		</div>
		<div class="cardHolder Sennelier Orange Tube Paint">	
			<div class="card">
				<img src="images/watercolourTubePaint3.jpg" style="width:100%">
				<h2>Sennelier Quninacridone Orange Paint</h2>
				<p class="price">£20.00</p>
				<p>Text about product</p>
				<p><button>Add to Cart</button></p>
			</div>
		</div>
	
		<div class="cardHolder DanielSmith Blue Tube Paint">	
			<div class="card">
				<img src="images/danielSmithTubeCobaltBlue.jpg" style="width:100%">
				<h2>Daniel Smith Cobalt Blue Paint</h2>
				<p class="price">£20.00</p>
				<p>Text about product</p>
				<p><button>Add to Cart</button></p>
			</div>
		</div>
		<div class="cardHolder mGraham Green Tube Paint">	
			<div class="card">
				<img src="images/mGrahamTubeAzoGreen.jpg" style="width:100%">
				<h2>M. Graham Azo Green Paint</h2>
				<p class="price">£20.00</p>
				<p>Text about product</p>
				<p><button>Add to Cart</button></p>
			</div>
		</div>
		<div class="cardHolder StPetersburg Grey Pan Paint">	
			<div class="card">
				<img src="images/whiteNightsPanPaynesGrey.jpg" style="width:100%">
				<h2>St Petersburg White Nights Payne's Grey Paint</h2>
				<p class="price">£20.00</p>
				<p>Text about product</p>
				<p><button>Add to Cart</button></p>
			</div>
		</div>
		<div class="cardHolder windsorAndNewton Purple Pan Paint">	
			<div class="card">
				<img src="images/windsorAndNewtonPanDioxizinePurple.jpg" style="width:100%">
				<h2>Windsor & Newton Dioxizine Purple Paint</h2>
				<p class="price">£20.00</p>
				<p>Text about product</p>
				<p><button>Add to Cart</button></p>
			</div>
		</div>

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