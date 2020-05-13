<html>
    <?php
        include_once 'dbconnection.php';
        
//        $firstName="";
//        $lastName="";
//        $emailAddress="";
        
        if(isset($_GET['signUpButton'])){
            //Adding details to the mailinglist table
            $firstName=$_GET['firstName'];
            $lastName=$_GET['lastName'];
            $emailAddress=$_GET['emailAddress'];
        
            $query=$con->prepare(" INSERT INTO mailinglist(firstName,lastName,emailAddress) VALUES (:firstName,:lastName,:emailAddress)");
    
            $success=$query->execute([
                'firstName'=>$firstName,
                'lastName'=>$lastName,
                'emailAddress'=>$emailAddress
        
            ]);
            
            $output=showMailingList($con);
            
            
        } if(isset($_GET['registerButton'])){
            //Adding details to the eventslist table
            $emailAddress=$_GET['emailAddress'];
            
            $query=$con->prepare(" INSERT INTO eventslist(emailAddress) VALUES (:emailAddress)");
            
            $success=$query->execute([
                'emailAddress'=>$emailAddress
        
            ]);
            //Put paragraph above here as title for table
            $output= showEventsList($con);
            
            
        } if(isset($_GET['deregisterButton'])){
            $emailAddress=$_GET['emailAddress'];
            
            $query=$con->prepare(" DELETE FROM eventslist WHERE emailAddress=:emailAddress");
            
            $success=$query->execute([
                'emailAddress'=>$emailAddress
        
            ]);
            //Put paragraph above here as title for table
            $output= showEventsList($con);
            
        
            
            
        } if(isset($_GET['unsubButton'])){
            //Removing details from the mailing list           
            $emailAddress=$_GET['emailAddress'];
        
            $query=$con->prepare(" DELETE FROM mailinglist WHERE emailAddress=:emailAddress");
            
            $success=$query->execute([
                'emailAddress'=>$emailAddress
        
            ]);
            
            $output= showMailingList($con);
            
            
        } if(isset($_GET['updateButton'])){
            //Assuming lastNames are unique
            $firstName=$_GET['firstName'];
            $lastName=$_GET['lastName'];
            $emailAddress=$_GET['emailAddress'];
            
            $query=$con->prepare(" UPDATE mailinglist SET emailAddress=:emailAddress WHERE lastName=:lastName");
            
            $success=$query->execute([
                'lastName'=>$lastName,
                'emailAddress'=>$emailAddress
        
            ]);
            $output= showMailingList($con);
            
            
        }    
        
        function showEventsList($con){
            $readQuery= $con->query("SELECT * FROM eventslist");

            $usersOnMailingList=$readQuery->fetchAll(PDO::FETCH_OBJ);

            $output="";
            $output.="<table>";
            $output.="<th>ID</th><th>Email Address</th>";

            foreach ($usersOnMailingList as $user ) {
		$output.='<tr>';
		$output.='<td>'.$user->id.'</td>';
		
		$output.='<td>'.$user->emailAddress.'</td>';
		
		$output.='</tr>';
            }
            $output.="</table>";
            return $output;
            
            
        }
        
        function showMailingList($con){
            $readQuery= $con->query("SELECT * FROM mailinglist");

            $usersOnMailingList=$readQuery->fetchAll(PDO::FETCH_OBJ);

            $output="";
            $output.="<table>";
            $output.="<th>ID</th><th>First Name</th><th>Surname</th><th>Email Address</th>";

            foreach ($usersOnMailingList as $user ) {
		$output.='<tr>';
		$output.='<td>'.$user->id.'</td>';
		$output.='<td>'.$user->firstName.'</td>';
		$output.='<td>'.$user->lastName.'</td>';
		$output.='<td>'.$user->emailAddress.'</td>';
		
		$output.='</tr>';
            }
            $output.="</table>";
            return $output;
        }
    
    
    
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
        <br>
        <br>
        <?php echo $output ?>
        
    </body>
    
    
</html>
