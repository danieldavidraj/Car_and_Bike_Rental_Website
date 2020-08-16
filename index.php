<html>
	<head>
		<title>Home Page</title> 
		<link rel = "icon" type = "image/png" href = "images/wheelzonrent-logo.png">
		<link rel="stylesheet" href="poppins.css" type="text/css" media="all">
		<link rel="stylesheet" href="montserrat.css" type="text/css" media="all">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			body
			{
				font-family:'Poppins',sans-serif;
			}
			div,.image,.tabl2
			{
				width:102%;
				margin-left:-10px;
			}
			.up
			{
				width:102%;
				background-color:white;
				opacity:0.7;
				height:100px;
				text-align:right;
				padding:1.6% 4% 0 0;
				box-sizing:border-box;
				font-weight:600;
				position:sticky;
				top:0;
				margin-top:-10px;
				z-index:10;
				transition:0.5s;
			}
			.slides
			{
				position:relative;
				width:100%;
				z-index: 0;
				height:auto;
				top:-105;
			}
			table
			{
				width:100%;
				border-collapse:collapse;
			}
			input[type=submit]
			{
				padding:2vw;
				border:solid #4CAF50 2px;
				border-radius:15px;
				cursor:pointer;
				background-color:white;
				transition:0.3s;
				font-size:100%;
				box-shadow:0px 0px 3px 1px #4CAF50;
				margin-right:50px;
			}
			input[type=submit]:hover
			{
				background-color:#4CAF50;
				color:white;
				box-shadow:none;
			}
			.copyright
			{
				padding:15px 0px 15px 8%;
				color:#6b6b6b;
				font-size:100%;
			}
			.service
			{
				width:100%;
			}
			footer
			{
				width:102%;
				margin-left:-10px;
			}
			.widget
			{
				padding-left:7%;
			}
			h1
			{
				font-size:3.1vw;
				text-transform:uppercase;
				letter-spacing:1.5px;
				font-family:"Montserrat";
				margin-bottom:30px;
			}
			h3
			{
				font-size:1.1vw;
				font-weight:700;
				font-family:"Montserrat";
				margin-bottom:25px;
				margin-top:50px;
				text-transform:uppercase;
				letter-spacing:1.5px;
				color:#dddddd;
			}
			.text
			{
				color:#bfbfbf;
				font-size:1.1vw;
				line-height: 1.7;
				margin-bottom:50px;
			}
			.text1
			{
				color:#bfbfbf;
				font-size:1.1vw;
				line-height:2.5;
				margin-bottom:50px;
				margin-top:-15px;
			}
			ul
			{
				list-style:none;
				margin-right:-2%;
			}
			li
			{
				display:inline-block;
			}
			nav .navi,.active
			{
				display:block;
				padding-left:10px;
				padding-right:10px;
				text-decoration:none;
				color:black;
				font-size:1vw;
				letter-spacing:1px;
				font-weight:700;
				text-transform: uppercase;
				position:relative;
			}
			.navi:hover,.active
			{
				transition:0.5s;
				color:#00afe5;
			}
			.navi:after,.active:after
			{
				transition:0.5s;
				position:absolute;
				bottom: 0;
				left: 0;
				right: 0;
				margin: auto;
				content:'.';
				width:0%;
				color:transparent;
				background:#00afe5;
				height:3px;
			}
			.active:after
			{
				width:80%;
			}
			.navi:hover:after
			{
				width:80%;
			}
			.adjust
			{
				padding-right:100px;
			}
			.tabl
			{
				margin:auto;
				text-align:center;
				width:70%;
				height:38%;
				margin-top:4%;
				border-collapse:separate;
			}
			.wid
			{
				position: relative;
			}
			.vehicle
			{
				position:absolute;
				top: 90%;
  				left: 54%;
  				transform: translate(-50%, -50%);
			}
			.servtext
			{
				background-image:url("images/service.jpg");
				background-size:100% 100%;
				box-sizing:border-box;
				padding:50px;
			}
			.context
			{
				background-image:url("images/contact.jpg");
				background-size:100% 100%;
				box-sizing:border-box;
				padding:50px;
				height:auto;
			}
			button
			{
  				transition-duration: 0.4s;
				cursor: pointer;
				display: inline-block;
				background-color:#00afe5;
				border-radius:2px;
				font-size:25px;
				border:none;
			}
			button:hover 
			{
  				background-color:#006b8b;
  				color:#ffffff;
			}
			.readmore
			{
				color:#00afe5;
				font-size:1.1vw;
				text-align:center;
				transition-duration: 0.4s;
			}
			.readmore:hover
			{
				color:#006b8b;
			}
			.dropdown .dropbtn
            {  
				position:relative;
            }
            .dropdown-content 
            {

                margin:0px 0px 0 -60px;
                display: none;
                position: absolute;
                background-color: #303030;
                max-width: 250px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                z-index:1;
            }
            .dropdown-content a
            {
                color: rgb(136, 136, 136);
                padding: 12px 16px;
                text-decoration: none;
                display: block;
                text-align: left;
            }
            .dropdown:hover
            {
                background-color: rgba(85, 85, 85, 0);
                color:#00afe5;
            }
            .dropdown-content a:hover 
            {
                color: rgb(255, 255, 255);
            }
            .dropdown:hover .dropdown-content 
            {
                display: block;
            }
			.logo1,.logo1 img{
				display:none;
			}
			@media only screen and (max-width:900px) 
			{
				.slides{
					top:0;
				}
				.call img{
					padding-left:37%;
					float:left;
					padding-top:4px;
				}
				.call font{
					padding-right:35%;
					font-size:17px;
				}
				.mail img{
					padding-left:34%;
					float:left;
					padding-top:7px;
				} 
				.mail font{
					padding-right:32%;
				}
				.logo1,.logo1 img{
					display:block;
					position:relative;
				}
				.up{
					height:230px;
				}
				.logo{
					display:none;
				}
				header{
					background-repeat:no-repeat;
					background-position:-300px 0px;
					height:70%;
				}
				.head{
					padding-top:30px;
				}
				.head hr{
					display:none;
				}
				.up nav{
					text-align:center;
				}
				nav .navi,.active{
					font-size:80%;
					display:block;	
				}
				.head h1{
					text-align:center;
					font-size:25px;
				}
				.head svg{a
					text-align:center;
					height:5%;
					width:10%;
				}
				.head font{
					text-align:center;
					font-size:10px;
				}
				.main img{
					width:60%;
				}
				.main h2{
					font-size:100%;
				}
				.widget h3{
					font-size:100%;
				}
				.widget p{
					font-size:80%;
				}
				footer img{
					width:5%;
				}
				input[type=submit]{
					font-size:50%;
				}
				.copyright font{
					font-size:90%;
				}
			}
			@media only screen and (max-width:720px)
			{
				.up{
					height:200px;
				}
				header{
					height:60%;
				}
				.call img{
					padding-left:37%%;
					float:left;
					padding-top:3px;
				}
				.call font{
					padding-right:35%;
					font-size:13px;
				}
				.mail img{
					padding-left:34%;
					float:left;
					padding-top:7px;
				} 
				.mail font{
					padding-right:30%;
					font-size:13px;
				}
				nav .navi,.active{
					font-size:49%;
				}
				input[type=submit]{
					padding:1vw;
				}
				.main img{
					width:70%;
				}
				.main h2{
					font-size:65%;
				}
				.widget{
					margin:auto;
				}
				.widget h3{
					font-size:100%;
				}
				.widget p{
					font-size:60%;
				}
				.copyright font{
					
					margin:auto;
					font-size:80%;
				}
			} 
		</style>
	</head>
	<body>
		<div class="up" id="up">
			<div class="logo"><img src="images/wheelzonrent-logo.png" height="100%" width="9.7%" style="float:left;margin:-1.2% 0 0 6.5%;">
			<img height="25%" width="1.6%" src="images/phone.png" style="height:auto;"><font style="font-size:1.254vw;">&ensp;+91-7305010188&emsp;</font>
			<img height="21%" width="1.9%" src="images/message.png" style="height:auto;"><font style="font-size:1.254vw;">&ensp;Info@wheelzonrent.in</font></div>
			<div class="logo1"><center><img  src="images/wheelzonrent-logo.png" height="50%" width="30%"></center>
					<div class="call"><img height="25%" width="2.5%" src="images/phone.png" style="height:auto;"><font>+91-7305010188&emsp;</font></div>
					<div class="mail"><img height="21%" width="2.5%" src="images/message.png" style="height:auto;"><font>&ensp;Info@wheelzonrent.in</font></div></div>
			<nav>
				<ul>
					<li><a class="active" href="Home.php">Home</a></li>
					<li><a class="navi" href="cars.php">Cars</a></li>
					<li><a class="navi" href="bikes.php">Bikes</a></li>
					<li><div class="dropdown">
                        <a id="glow3" class="navi" href="#service" style="margin-left:11px;">Service</a>
                        <div class="dropdown-content" onmouseover="Glow3()" onmouseout="Initial3()">
                            <a href="rental.php">CAR RENTAL SERVICE</a>
                            <a href="corporate.php">CORPORATE CAR RENTAL</a>
                            <a href="wed.php">WEDDING CAR RENTAL</a>
                            <a href="event.php">EVENT TRANSPORTATION</a>
                            <a href="self.php">SELFDRIVE CAR RENTAL</a>
                            <a href="one.php">ONE WAY DROP SERVICE</a>
                        </div>
                    </div></li>
					<li><a class="navi" href="contact.php">Contact Us</a></li>
					<li><a class="navi" href="terms.php">Terms</a></li>
					<li><a class="navi" href="feedback.php">Feedback</a></li>
				</ul>
			</nav>
		</div>
		<div class="slide">
			<img class="slides" src="images/slide1.jpg" height="100%" width="100%">
			<img class="slides" src="images/slide2.jpg" height="100%" width="100%">				
			<img class="slides" src="images/slide3.jpg" height="100%" width="100%">
			<img class="slides" src="images/slide4.jpg" height="100%" width="100%">
			<img class="slides" src="images/slide5.jpg" height="100%" width="100%">
		</div>	
		<script>
				function Glow3()
				{
					document.getElementById("glow3").className = "active";
				}
				function Initial3()
				{
					document.getElementById("glow3").className = "navi";
				}
		</script>
		
		<script>
			var myIndex = 0;
			carousel();
			function carousel() 
			{
				var i;
				var x = document.getElementsByClassName("slides");
				for (i = 0; i < x.length; i++) 
				{
						x[i].style.display = "none";  
				}
				myIndex++;
				if (myIndex > x.length) 
				{
					myIndex = 1
				} 	   
				x[myIndex-1].style.display = "block";  
				setTimeout(carousel, 3000);
				}
		</script>
		<div id="Sticky"></div>
		<script>
			window.onscroll = function() {myFunction()};
			var navbar = document.getElementById("up");
			var sticky = Sticky.offsetTop;

			function myFunction() 
			{
				
				if (window.pageYOffset >= sticky) 
				{
					document.getElementById("up").style.opacity="1";
				} 
				else 
				{
					document.getElementById("up").style.opacity="0.7";
				}
			}
		</script>
		<div style="text-align:center;padding:1% 0 5% 0"><img src="images/wheelzonrent-logo.png" style="height:auto;" height="25%" width="25%"></div>
		<div>
		<h1 style="font-size:2vw;color:#292929;margin:3% 0 0 28%;">&lt;</h1>
		<hr align="left" width="9%" color="#dddddd" style="margin:-1.3% 0 0 32%;">
		<h1 style="font-size:2vw;color:#292929;text-align:center;margin:-1.3% 0 0 0;">OUR FLEET</h1>
		<hr align="left" width="9%" color="#dddddd" style="margin:-1.3% 0 0 59%;">
		<h1 style="font-size:2vw;color:#292929;margin:-1.3% 0 0 71%">&gt;</h1>
		</div>	
			<table class="tabl">
				<tr>
					<td>
						<div class="wid">
							<a href="cars.php" onmouseover="Glow1()" onmouseout="Initial1()">	
								<img src="images/car wid.jpg" width="70%" height="28%" style="height:auto;">
								<div class="vehicle">
									<h2 id="glow1" style="font-size:2vw;color:white;text-align:center;">CARS</h2>
								</div>
							</a>
						</div>
					</td>
					<td>
						<div class="wid" id="resp">
							<a href="bikes.php" onmouseover="Glow2()" onmouseout="Initial2()">
								<img src="images/bike wid.jpg" width="70%" height="28%" style="height:auto;">
								<div class="vehicle">
									<h2 id="glow2" style="font-size:2vw;color:white;text-align:center;">BIKES</h2>
								</div>
							</a>
						</div>
					</td>
				</tr>
			</table>
			<script>
				function Glow1()
				{
					document.getElementById("glow1").style.color="#00afe5";
					document.getElementById("glow1").style.transitionDuration ="0.5s";
				}
				function Initial1()
				{
					document.getElementById("glow1").style.color="white";
				}
				function Glow2()
				{
					document.getElementById("glow2").style.color="#00afe5";
					document.getElementById("glow2").style.transitionDuration ="0.5s";
				}
				function Initial2()
				{
					document.getElementById("glow2").style.color="white";
				}
			</script>
			<br><br>
		<img class="image" src="images/char-dham-banner.jpg">
		<table class="tabl2" bgcolor="#00afe5" height="100px">
			<tr>
				<td>
					<h2 style="font-size:2vw;color:white;text-align:center;float:right;margin:auto;">WHAT ABOUT PRICING?</h2>
				</td>
				<td>
					<h3 style="font-size:1vw;color:white;text-align:center;float:left;margin:auto;">&emsp;&emsp;Dont worry. We provide very nice deals and the most competative price just for you!</h3>
				</td>
			</tr>
		</table>
		<a id="service">
		<div class="servtext">
				<hr align="left" width="8.5%" size="2%" color="#dddddd" style="margin:2% 0 0 29%;position:relative;">
				<h1 style="font-size:1.7vw;color:white;text-align:center;margin:-1.4% 0 0 0;">OUR SERVICES</h1>
				<hr align="left" width="8.5%" size="2%" color="#dddddd" style="margin:-1.4% 0 0 62.3%;"><br>
				<h3 style="font-size:0.9vw;color:white;text-align:center;margin-top:2%;">"To travel is to take a journey into yourself and Be a 'Story Teller' for generations"</h3>
		</div>
		<br><br>
		<div style="margin-top:5%;">
			<table  style="width:82%;margin:auto;">
				<tr>
					<td>
						<img src="images/carp.png" style="float:left;" style="height:auto;"><h1 style="font-size:1.4vw;color:black;">CAR RENTAL SERVICE</h1>
						<h3 style="color:grey;font-size:0.9vw;margin-left:45px;text-align:left;">wheelzonrent offers to make it easy for clients to get the right car at
							 the right price at the right time. If you are looking for car rental service in Delhi/India or minibusses hire 
							 services, then our company is the right option for you. Get the best deal on booking of luxury car and coaches in Delhi.</h3>
						<a href="rental.php"  style="text-decoration:none;"><h3 class="readmore">READ MORE</h3></a>
					</td>
					<td>
						<img src="images/busi.png" style="float:left;"><h1 style="font-size:1.4vw;color:black;">CORPORATE CAR RENTAL</h1>
						<h3 style="color:grey;font-size:0.9vw;margin-left:45px;text-align:left;">Our planning, communication and tracking support, make us accessible to you whenever and 
							wherever you require. Our proprietary planning methodology and our custom-designed and engineered fleet management system gives 
							us a competitive edge in the industry.</h3>
						<a href="corporate.php" style="text-decoration:none;"><h3 class="readmore">READ MORE</h3></a>
					</td>
					<td>
						<img src="images/marriage.png" style="float:left;"><h1 style="font-size:1.4vw;color:black;">WEDDING CAR RENTAL</h1>
						<h3 style="color:grey;font-size:0.9vw;margin-left:45px;text-align:left;">Wheelzonrent is emerging car rental company in delhi/india . We have been known in industry 
							for our 100% customer satisfaction. We think for a special occasion we need the right car at right prices, wheelzonrent provides 
							the best car accordingly the customer requirement.</h3>
						<a href="wed.php" style="text-decoration:none;"><h3 class="readmore">READ MORE</h3></a>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/event.png" style="float:left;"><h1 style="font-size:1.4vw;color:black;">EVENT TRANSPORTATION</h1>
						<h3 style="color:grey;font-size:0.9vw;margin-left:45px;text-align:left;">While customer is traveling with us we care the all needs of our clients. We offer
							 well-maintained cars with Professionally Trained Chauffeurs to Corporate at suitable rates on premium and luxury car rental 
							 choices. Online Booking and Book-keeping for better management.</h3>
						 <a href="event.php" style="text-decoration:none;"><h3 class="readmore">READ MORE</h3></a>
					</td>
					<td>
						<img src="images/self.png" style="float:left;"><h1 style="font-size:1.4vw;color:black;">SELFDRIVE CAR RENTAL</h1>
						<h3 style="color:grey;font-size:0.9vw;margin-left:45px;text-align:left;">Wheelzonrent is a very customer friendly company where customer service and
							 satisfaction come first. wheelzonrent provides self-driven cars to customers at very convenient prices and gives 
							 absolutely new and young well-maintained fleet for hassle-free and memorable driving experience.</h3>
						<a href="self.php" style="text-decoration:none;"><h3 class="readmore">READ MORE</h3></a>
					</td>
					<td>
						<img src="images/one.png" style="float:left;"><h1 style="font-size:1.4vw;color:black;">ONE WAY DROP SERVICE</h1>
						<h3 style="color:grey;font-size:0.9vw;margin-left:45px;text-align:left;">Wheelzonrent is providing One Way Drop Services From Delhi / NCR. We offer 
							to make it easy for clients to get the right car at the right price at the right time. If you are looking for 
							car rental service in Delhi/India, we are the right choice for you.</h3>
						<a href="one.php" style="text-decoration:none;"><h3 class="readmore">READ MORE</h3></a>
					</td>
				</tr>
			</table>
		</div>
		<div class="context">
			<h1 style="color:white;font-size:2vw;text-align:left;">WE PROMISE, YOU WILL<br> 
					HAVE THE BEST EXPERIENCE</h1>
			<h3 style="color:white;font-size:1vw;text-align:left;">Quality is never an accident, it is always the result of high intention,
					 sincere effort,<br> intelligent direction, and skillful execution.</h3>
				<a href="contact.php"><button><h1 style="color:white;font-size:1vw;margin:10px 10px 10px 10px">Enquire Now</h1></button></a>
		</div>
        <footer>
			<table style="height:10%;">
				<tr bgcolor="#252525">
					<td class="widget"> 
						<h3>About Us</h3>
					</td>
					<td class="widget">
						<h3>Contact Info</h3>
					</td>
				</tr>
				<tr bgcolor="#252525">
					<td class="widget">
						<p class="text">Wheelzonrent is one of the reputed Travel<br>
						Company in India.At Wheelzonrent<br>
						everything we do is about giving you the<br>
						freedom to discover more.</p>
					</td>
					<td class="widget">
						<p class="text1">Address: Tamil Nadu,India<br>
						<img src="images/phone.png">&emsp;+91-7305010188<br>
						<img src="images/message.png">&emsp;danieldavidraj23@gmail.com</p>
					</td>
				</tr>
				<tr bgcolor="black">
					<td class="copyright" colspan="2"><font>Copyright 2020 All Right Reserved</font></td>
				</tr>
			</table>
		</footer>
    </body>
</html>
