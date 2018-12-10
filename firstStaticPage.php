<!DOCTYPE>
<html>
<head>
	<title>WDA</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href="./css/wdaStyle.css" rel="stylesheet" type="text/css">
</head>



<body data-spy="scroll" data-target=".navbar" data-offset="50">
	
	<?php
	
			
		if(isset($_POST['mpla'])){
			
			  $fname=trim($_POST["fname"]);
			  $femail=trim($_POST["femail"]);
			  $fmessage=trim($_POST["fmessage"]);
			
			  if($fname =="") {
				$errorMsg=  "Συμπληρώστε το όνομα σας.";
				$code= 1 ;
			  }
			  elseif($femail == "") {
				$errorMsg=  "Συμπληρώστε το email σας.";
				$code= 2;
				
			  }
			  elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $femail)){
			  $errorMsg= 'Δεν έχετε συμπληρώσει έγκυρο email.';
			  $code= 2;
			}
			  elseif($fmessage == "") {
				$errorMsg=  "Συμπληρώστε το μηνυμα σας.";
				$code= 3;
			  }


			else{

				

				$servername = "localhost";
				$username = "kongat";
				$password = "123qaz!@#";
				$dbname = "test_1";

				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				} 

				$sql = "INSERT INTO post_data (name, email, message)
				VALUES ('".$_POST["fname"]."', '".$_POST["femail"]."', '".$_POST["fmessage"]."')";

				if ($conn->query($sql) === TRUE) {
					echo "New record created successfully";
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}

				$conn->close();
				header('Location: firstStaticPage.php#contact');
			}
		}
		
?>
	

	<nav class="navbar navbar-inverse navbar-fixed-top" id="nav1" >
		<div class="container">
		<div class="navbar-header" >
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     <img src="./img/logo.png" alt="logo image">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#first">Home</a></li>
        <li><a href="#second">SERVICES</a></li>
        <li><a href="#third">TEAM</a></li>
        <li><a href="#skills">SKILLS</a></li>   
        <li><a href="#fourth">TESTIMONIALS</a></li>
        <li><a href="#contact">CONTACT</a></li>           
    </ul>

    </div>
    </div>
</nav>

		<div id="first">
			<div class="container text-center">
				<h2>Hi Guys!This is my first Web Development Project :)<br>What do you think about my work?</h2>
				<button type="button" class="btn btn-warning">IT'S AWESOME</button>
			</div>	
		</div>	
		<div id = "second">
			
				<h2 class="text-center">SERVICES WE PROVIDE</h2>
				<hr>
				<p class="text-center">I am using my ninja Web Development Skills in order to create amazing Web Properties!</p>
				<div class="container-fluid">
					<div class="row">
        				<div class="col-md-2 col-md-offset-2 text-center">
        					<img src="./img/flag.png" alt="branding image">
        					<h4>BRANDING</h4>
        					
        					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,sed diam nonummy nibh.</p>
        				</div>
        				<div class="col-md-2 text-center">
        					<img src="./img/design.png" alt="design image">
        					<h4>DESIGN</h4>
        					
        					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
        				</div>
        				<div class="col-md-2 text-center">
        					<img src="./img/development.png" alt="development image">
        					<h4>DEVELOPMENT</h4>
        					
        					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium</p>
        				</div>
        				<div class="col-md-2 text-center">
        					<img src="./img/rocket.png" alt="rocket science image">
        					<h4>ROCKET SCIENCE</h4>
        					
        					<p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore</p>
        				</div>
        			</div>
				</div>	
		
		</div>
		<div id = "third">
				
				<h2 class="text-center">MEET OUR AMAZING TEAM</h2>
				<div class="line-grey text-center"><span></span></div>
				<br>
				<p class="text-center">We area small team of junior developers, who will help build your online presence</p>
				<div class="container lower">
					<div class="row">
        				<div class="col-md-3  text-center">
        					<img src="./img/team1.jpg" alt="team1">
        					<h3>ANNE HATHAWAY</h3>
        					<p class="role">CEO</p>
        					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in nibh in enim sagittis dignissim quis ac odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        					<img class="media" alt="link" src="./img/social-icons.png">
        					
        				</div>
        				<div class="col-md-3 text-center">
        					<img src="./img/team2.jpg" alt="team2">
        					<h3>KATE UPTON</h3>
        					<p class="role">Creative Director</p>
        					<p>Maecenas accumsan felis nec lorem rhoncus, et faucibus sapien luctus. Nam ac cursus nisl, ac semper metus. Phasellus massa purus, commodo eu blandit eu, suscipit nec lorem.</p>
        					<img class="media" alt="link" src="./img/social-icons.png">
        					
        				</div>
        				<div class="col-md-3 text-center">
        					<img src="./img/team3.jpg" alt="team3">
        					<h3>OLIVIA WILDE</h3>
        					<p class="role">Lead Designer</p>
        					<p>Duis malesuada pellentesque nisi, eu suscipit odio euismod ac. Suspendisse maximus metus id augue auctor scelerisque.Praesent eleifend ante a libero rutrum luctus.</p>
        					<img class="media" alt="link" src="./img/social-icons.png">
        					
        				</div>
        				<div class="col-md-3 text-center">
        					<img src="./img/team4.jpg" alt="team4">
        					<h3>ASHLEY GREENE</h3>
        					<p class="role">SEO / Developer</p>
        					<p>Etiam gravida enim sit amet leo egestas porta. Sed nec facilisis justo, et porta nunc. Quisque sollicitudin magna vitae mollis tincidunt.</p>
        					<img class="media" alt="link" src="./img/social-icons.png">
        					
        				</div>
        			</div>

				</div>	
		
		</div>
		<div id = "skills">
				
				<h2 class="text-center">WE HAVE SKILLS</h2>
				<div class="line-skills text-center"><span></span></div>
				<br>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in nibh in enim sagittis dignissim quis</p>
				<div class="container lower">
					<div class="row">
        				<div class="col-md-3  text-center">
        					<div class="circle" id="circle1">
								<strong></strong>
							</div>
							<h3>WEB DESIGN</h3>
        				</div>
        				<div class="col-md-3 text-center">
							<div class="circle" id="circle2">
								<strong></strong>
							</div>
        					<h3>HTML / CSS</h3>
        				</div>
        				<div class="col-md-3 text-center">	
							<div class="circle" id="circle3">
								<strong></strong>
							</div>						
        					<h3>GRAPHIC DESIGN</h3>     					
        				</div>
        				<div class="col-md-3 text-center">
							<div class="circle" id="circle4">
								<strong></strong>
							</div>
        					<h3>UI / UX</h3>
        				</div>
        			</div>

        			<div class="pie-wrapper progress-30">
    					<span class="label">30<span class="smaller">%</span></span>
    					<div class="pie">
      						<div class="left-side half-circle"></div>
      						<div class="right-side half-circle"></div>
    					</div>
  					</div>

					  <div class="pie-wrapper progress-60">
					    <span class="label">60<span class="smaller">%</span></span>
					    <div class="pie">
					      <div class="left-side half-circle"></div>
					      <div class="right-side half-circle"></div>
					    </div>
					  </div>

					  <div class="pie-wrapper progress-90">
					    <span class="label">90<span class="smaller">%</span></span>
					    <div class="pie">
					      <div class="left-side half-circle"></div>
					      <div class="right-side half-circle"></div>
					    </div>
					  </div>

				</div>	
		
		</div>
		<div id = "fourth">
				
				<h2 class="text-center">WHAT OUR CLIENTS SAY ABOUT US</h2>
				<div class="line-grey text-center"><span></span></div>
				<br>
				<p class="text-center">Our clients love us!</p>
				<div class="container-fluid lower">
					<div class="row">
        				<div class="col-md-5 col-md-offset-1">
        					<div class="row">
        						
        						<div class="col-md-4 ">
        							<img src="./img/client_img1.jpg" alt="team1">
        						</div>
        						<div class="col-md-8">
        							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in nibh in enim sagittis dignissim quis ac odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        							<div>
        								<h3>CHANEL IMAN</h3>
        								<p class="role2">CEO of Pinterest</p>
        							</div>
        						</div>
        					</div>
        					
        					
        				</div>
        				<div class="col-md-5 ">
        					<div class="row">
        						
        						<div class="col-md-4 ">
        							<img src="./img/client_img2.jpg" alt="team1">
        						</div>
        						<div class="col-md-8">
        							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in nibh in enim sagittis dignissim quis ac odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        							<div>
        								<h3>ADRIANA LIMA</h3>
        								<p class="role2">Founder of Instagram</p>
        							</div>
        						</div>
        					</div>
        					
        					
        				</div>
        				
        			</div>
        			<div class="row lower">
        				<div class="col-md-5 col-md-offset-1">
        					<div class="row">
        						
        						<div class="col-md-4">
        							<img src="./img/client_img3.jpg" alt="team1">
        						</div>
        						<div class="col-md-8 ">
        							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in nibh in enim sagittis dignissim quis ac odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        							<div>
        								<h3>ANNE HATHAWAY</h3>
        								<p class="role2">Lead designer at Behance</p>
        							</div>
        						</div>
        						
        					</div>
        					
        					
        				</div>
        				<div class="col-md-5">
        					<div class="row">
        						
        						<div class="col-md-4 ">
        							<img src="./img/client_img4.jpg" alt="team1">
        						</div>
        						<div class="col-md-8 ">
        							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis in nibh in enim sagittis dignissim quis ac odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        							<div>
        								<h3>EMMA STONE</h3>
        								<p class="role2">Co-Founder of Shazam</p>
        							</div>
        						</div>
        						
        					</div>
        					
        					
        				</div>
        				
        			</div>

				</div>	
		
		</div>

	<div id="contact">
		<div class="container-fluid lower-section">
		
				<div class="text-center">
					<h3>CONTACT US</h3>
					<div class="line-blue text-center"><span></span></div>
					<h6 class="text-center">Keffalinias 46, 11251, Athina, Attiki, Tel: 2108203827</h6>
				</div>
				<form class="lower" id="form1" name="myForm" method="POST"  action="<?php echo $_SERVER['PHP_SELF']."#contact"; ?>">
				
			
							<div class="row">
								<div class="form-group col-xs-4 col-xs-offset-2 col-md-4 col-md-offset-2">
									<label for="fname" class="error" id="name-error">
									<?php
									if(isset($code) && $code == 1){
										echo $errorMsg;
									}
									?>
									
									</label>							
								</div>
								<div class="form-group col-xs-4 col-md-4">
									<label for="femail" class="error" id="email-error">
									<?php
									if(isset($code) && $code == 2){
										echo $errorMsg;
									}
									?>

									</label>	
								</div>
							</div>	
							<div class="row">
								<div class="form-group col-xs-4 col-xs-offset-2 col-md-4 col-md-offset-2">
									<input id="fname"type="name" placeholder ="Your Name " onfocus="this.placeholder = ''"onblur="this.placeholder = 'Your Name'" name="fname">		
								</div>
								<div class="form-group col-xs-4 col-md-4">
									<input id="femail"type="email" placeholder ="Your Email" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Your Email'" name="femail">
								</div>
							</div>		
							<div class="row">							
								<div class="form-group  col-xs-8 col-xs-offset-2 col-md-8 col-md-offset-2">
									<label for="fmessage" class="error" id="message-error">
									<?php
									if(isset($code) && $code == 3){
										echo $errorMsg;
									}
									?>
									
									</label>
									<textarea placeholder ="Your Message" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Your Message'"  class="required" name="fmessage"></textarea>
								</div>
							</div>
						<div class="row">		
						<div class="text-center col-md-12" >
							<button  name= "mpla" type="submit" form="form1" value="Submit" class="button-submit">SEND MESSAGE</button>
							
						</div>	
						</div>
										
							
				</form>

				<div class="text-center col-md-4 col-md-offset-4" >
					<div id="success-message">
						<div id='message'>
							<h2>Το μήνυμα σας απεστάλη!</h2>
							<p>Θα επικοινωνήσουμε σύντομα.</p>
						</div>
						
					</div>
					<div >
						<p>
						
						</p>
					</div>
				</div>	
				
			

		</div>
		</div>

<footer>
	<div id="footer">
		<div class="container-fluid text-center">
  			<div class="row">
    			
					<div class="col-md-1 col-md-offset-2 col-sm-1 col-sm-offset-2 col-xs-1 col-xs-offset-2">
						<a href="#">Facebook</a>
					</div>
					<div  class="col-md-1 col-sm-1 col-xs-1">
						<a href="#">Twitter</a>
					</div>	
					<div  class="col-md-1 col-sm-1 col-xs-1">
						<a href="#">Google+</a>
					</div>
					<div  class="col-md-1 col-sm-1 col-xs-1">
						<a href="#">LinkedIn</a>
					</div>	
					<div  class="col-md-1 col-sm-1 col-xs-1">
						<a href="#">Behance</a>
					</div>
					<div  class="col-md-1 col-sm-1 col-xs-1">
						<a href="#">Dribbble</a>
					</div>	 
					<div  class="col-md-1 col-sm-1 col-xs-1">
						<a href="#">Github</a>
					</div>		
					
					
					
    			
  			</div>
		</div>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>
		<script type="text/javascript">
 		//var navbar = document.getElementById("nav1");
 		$("#success-message").hide();

 		/*$(window).scroll(function() {
  			//$('#nav1').addClass("sticky");
		});*/

		$('#fname').focus(function() {
			 $('#name-error').text("");
			
		});
		$('#femail').focus(function() {
			 $('#email-error').text("");
			
		});
		$('#fmessage').focus(function() {
			 $('#message-error').text("");
			
		});
		
	
		var progressBarOptions = {
			startAngle: -1.55,
			size: 200,
			value: 0.75,
			fill: {
				color: '#ffa500'
			}
		}

		$('.circle').circleProgress(progressBarOptions).on('circle-animation-progress', function(event, progress, stepValue) {
			$(this).find('strong').html(Math.round(100 * stepValue) + '<i>%</i>');
		});

		$('#circle1').circleProgress({
			value : 0.90,
			fill: {
				color: '#30BAE7'
			}
		});

		$('#circle2').circleProgress({
			value : 0.75,
			fill: {
				color: '#D74680'
			}
		});
		$('#circle3').circleProgress({
			value : 0.70,
			fill: {
				color: '#15C7A8'
			}
		});
		$('#circle4').circleProgress({
			value : 0.85,
			fill: {
				color: '#EB7D4B'
			}
		});
		
		


	$('#form1').submit(function (e) {
		var name = document.forms["myForm"]["fname"].value;
		var email = document.forms["myForm"]["femail"].value;
		var message = document.forms["myForm"]["fmessage"].value;
		var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
		
		if (name == ""){
			$("#name-error").text("Συμπληρώστε το όνομα σας.");
			return false;
		}else if (email == ""){
			$("#email-error").text("Συμπληρώστε το Email σας.");
			$("input#femail").focus();
			return false;
		}else if (message == ""){
			
			$("#message-error").text("Συμπληρώστε το μήνυμα σας.");
			return false; 
		}else{
			$.ajax({
			type: 'post',
			url: 'first.php',
			data: $('form').serialize(),
			success: function() {
				$("#success-message").fadeIn();
				setTimeout(function() { $("#success-message").fadeOut(); }, 5000);
				$('#form1')[0].reset();
				
			}
		});
		
		
		
		e.preventDefault();
		}
});


	
	
	
	
	
		
</script>
</footer>
</body>

</html> 