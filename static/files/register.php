	<head>
		<meta charset="UTF-8"/>
		<title>TEDxIITBHULive | 18th March 2014</title>
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="shortcut icon" href="../images/Live From TED.jpg">
	</head>
	<body>
	<div id="big_wrapper">
		<header id="top-header">
			<div id="middle-header">
			<div id="ted-logo"><img src="../images/tedxiitbhulivelogocolored.png"/></div>
			</div>
			<div id="top-header-info">
			<div id="top-header-info-div"><p>18th March 2014</p></div>
			<div id="top-header-info-div"><p>Swatantrata Bhawan, IIT (BHU) Varanasi</p></div>
			<div id="top-header-info-div"><p>The Next Chapter</p></div>
			</div>
			<div id="header-stamp"><img src="../images/stamp.png"/></div>
		</header>
		<nav id="top-menu">
			<div id="nav-menu">
			<ul>
				<li class="subnav"><a href="../index.html">HOME</a></li>
				<li class="subnav"><a href="about.html">About TED</a></li>
				<li class="subnav"><a href="theme.html">THEME</a></li>
				<li class="current"><a href="register.php">REGISTER</a></li>
				<li class="subnav"><a href="gallery.html">GALLERY</a></li>
				<li class="subnav"><a href="team.html">TEAM</a></li>
			</ul>
			</div>
		</nav>
		<section id="main-section">
			<div id="regform">
				<h1 id="reg-heading"> TEDxIITBHULive REGISTRATIONS</h1>
				<h2>____________________________________________________________</h2>
			<div class="confirm_reg"><?php if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Branch']) && isset($_POST['Year_of_Passing']) && isset($_POST['Institute_Roll_No']) && isset($_POST['Address']) && isset($_POST['Contact_No']) && isset($_POST['Fathers_Name'])) {
		$Name = $_POST['Name'];
		$Email = $_POST['Email'];
		$Branch = $_POST['Branch'];
		$Year_of_Passing = $_POST['Year_of_Passing'];
		$Institute_Roll_No = $_POST['Institute_Roll_No'];
		$Address = $_POST['Address'];
		$Contact_No = $_POST['Contact_No'];
		$Fathers_Name = $_POST['Fathers_Name'];
		
	if (!empty($Name) && !empty($Email) && !empty($Branch) && !empty($Year_of_Passing) && !empty($Institute_Roll_No) && !empty($Address) && !empty($Contact_No) && !empty($Fathers_Name)) {
		
		$to = 'nicky13niresh@gmail.com';
		$subject = 'TEDxIITBHULive Registration';
		$body = 'Name : '.$Name."\n".'Email Id : '.$Email."\n".'Branch : '.$Branch."\n".'Year of Passing : '.$Year_of_Passing."\n".'Institute Roll No. : '.$Institute_Roll_No."\n".'Address : '.$Address."\n".'Contact No : '.$Contact_No;
		$headers = 'From : '.$Email;
		
		if(mail($to, $subject, $body, $headers)) {
			echo 'You have successfully been registered for TEDxIITBHULive. We will contact you by email.';
			} else	{
			echo 'Sorry, An error occurred. Please try again';
			}
		}
	else{
		echo 'All Fields are required';
		}
	}?></div>
			<FORM id="formtag" ACTION="register.php" method="POST">
			<ul id="form_list">
			<li>
			<div class="regdiv">Full Name-</div><INPUT name="Name" placeholder="Your Name" value="" size="30" maxlength="30"></li>
			<li>
			<div class="regdiv">Email Id-</div><INPUT name="Email" placeholder="abc@example.com" value="" size="30" maxlength="30"></li>
			<li>
			<div class="regdiv">Branch-</div><INPUT name="Branch" value="" size="30" maxlength="30"></li>
			<li>
			<div class="regdiv">Year of Passing-</div><select name="Year_of_Passing"><option>None</option><option>2014</option><option>2015</option><option>2016</option><option>2017</option><option>2018</option></select><!--<INPUT name="Year of Passing" value="" size="30" maxlength="30"></li>-->
			<li>
			<div class="regdiv">Institute Roll No.-</div><INPUT name="Institute_Roll_No" value="" size="30" maxlength="30"></li>
			<li>
			<div class="regdiv">Address-</div><INPUT name="Address" value="" size="30" maxlength="80"></li>
			<li>
			<div class="regdiv">Contact No-</div><INPUT name="Contact_No" value="" size="30" maxlength="14"></li>
			<li>
			<div class="regdiv">Father's Name-</div><INPUT name="Fathers_Name" value="" size="30" maxlength="30"></li>
			</ul>
			<div id="submit-button">
			<button type="submit" class="submit_button"> Submit Form </button>
			<!--<INPUT type="submit" value="Submit">-->
			</div>
			</FORM>
			</div>
		</section>
		<!--<section id="section2">
		</section>-->
		<footer id="footer-1">
			<div id="footer-links">
				<div class="link-head">
					<p> TED Links </p>
					<p> TEDxIITBHULive Links </p>
				</div>
			<div id="link-items">
				<div class="ted-link-items">
					<ul>
						<li>TED Blog</li>
						<li>TED Prize</li>
						<li>TED Global</li>
					</ul>
				</div>
				<div class="tedxiitbhu-link-items">
					<ul>
						<li>Home</li>
						<li>About TED</li>
						<li>Theme</li>
						<li>Gallery</li>
						<li>Team</li>
					</ul>
				</div>
			</div>
			</div>
			<div id="footer-logo">
				<a href="http://www.tedxiitbhu.com"><img src="../images/logowhite.png"/></a>
				<div id="social-icons">
					<a class="email-icon" href="mailto:tedxiitbhu@hotmail.com"><img src="../images/email48.png"	alt="mail"/></a>
					<a class="facebook-icon" href="http://www.facebook.com/TEDxIITBHU"><img src="../images/facebook48.png" alt="fb"/></a>
					<a class="twitter-icon" href="#"><img src="../images/twitter48.png" alt="t"/></a>
					<a class="youtube-icon" href="http://www.youtube.com/watch?v=_iqx82SxAZQ&list=PLsRNoUx8w3rNkxEsn51jXlLx7Tj8nL8pP"><img src="../images/youtube48.png" alt="You<br>Tube"/></a>
				</div>
				<div class="copyright">
					<p>&copy; TEDxIITBHULive 2014<br>This <strong>TEDx</strong> event is operated under license from <strong>TED</strong>.</p>
				</div>
			</div>
		</footer>
		<!--<footer id="footer-2">
		</footer>-->
	</div>
	</body>
