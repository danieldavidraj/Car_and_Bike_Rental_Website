<html>
	<head>
		<title>Feedback</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel = "icon" type = "image/png" href = "images/wheelzonrent-logo.png">
		<link rel="stylesheet" href="poppins.css" type="text/css" media="all">
		<link rel="stylesheet" href="montserrat.css" type="text/css" media="all">
		<style>
			body
			{
				font-family:'Poppins',sans-serif;
			}
			.up
			{
				width:100%;
				background-color:white;
				opacity:0.8;
				height:100px;
				text-align:right;
				padding:1.6% 2.45% 0 0;
				box-sizing:border-box;
				font-weight:600;
				position:sticky;
				top:0;
				transition:0.5s;
			}
			.head
			{
				color:white;
				padding-top:80px;
				padding-bottom:140px;
				text-align:center;
			}
			header
			{
				background-image:url("images/bannerupload.jpg");
				background-position:-150px 0px;
				margin:-10px;	
			}
			.logo1,.logo1 img{
				display:none;
			}
			.break,.ccr1{
				display:none;
			}
			svg
			{
				fill:white;
				margin-top:-25px;
			}
			ul
			{
				list-style:none;
				margin-right:-0.9%;
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
				letter-spacing:1px;
				font-size:1vw;
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
			.head h1
			{
				font-size:3.1vw;
				text-transform:uppercase;
				letter-spacing:1.5px;
				font-family:"Montserrat";
				margin-bottom:30px;
			}
			h2
			{
				font-size:100%;
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
			.main
			{
				border-collapse:separate;
				border-spacing:8vh 12vh;
			}
			.contact
			{
				background:white;
				text-align:center;
				padding:3% 3% 3% 3%;
				width:33.33%;
				font-size:1.6vw;
				height:20vh;
			}
			h4
			{
				color:#585858;
				font-size:100%;
				font-family: "Montserrat";
				font-weight: 400;
			}
			p
			{
				font-size:100%;
				color:#00afe5;
			}
			table
			{
				width:100%;
				background-size:100% 100%;
				border-collapse:collapse;
			}
			.copyright
			{
				padding:15px 0px 15px 8%;
				color:#6b6b6b;
				font-size:100%;
			}
			footer
			{
				margin:-10px;
			}
			.widget
			{
				padding-left:7%;
			}
			.text
			{
				color:#bfbfbf;
				font-size: 1.1vw;
				line-height: 1.7;
				margin-bottom:50px;
			}
			.text1
			{
				color:#bfbfbf;
				font-size: 1.1vw;
				line-height:2.5;
				margin-bottom:50px;
				margin-top:-15px;
			}
			.head1
			{
				font-size: 100%;
				color: #292929;
				font-weight: bold;
				text-transform: uppercase;
				font-family: "Montserrat";
				text-align: center;
			}
			.form
			{
				border-collapse:separate;
				background:#f6f6f6;
				border:1px solid #dddddd;
				border-spacing:10px;
				width:70%;
				margin:auto;
				padding:10px 10px 0px 10px;
				margin-top:50px;
				margin-bottom:50px;
				font-size:1.4vw;
			}
			input[type=text]
			{
				border:1px solid #dddddd;
				padding: 8px 15px;
				font-size: 15px;
				font-weight:bold;
				width:70%;
				border-radius:4px;
				color:#515A5A;
			}
			textarea
			{
				border:1px solid #dddddd;
				padding: 8px 19px;
				font-size: 13px;
				color: #b5b5b5;
				width:100%;
				margin-top:20px;
			}
			input[type=submit]
			{
				padding: 10px 20px;
				background-color: #00afe5;
				color: #ffffff;
				cursor: pointer;
				border-radius: 3px;
				font-weight: 600;
				border: none;
				transition:0.4s;
				margin:5px 0 10px 0;
			}
			input[type=submit]:hover
			{
				background-color:#006b8b;
			}
			.thank
			{
				color:#00afe5;
				font-size:3vw;
				font-family:"Montserrat";
				font-weight:800;
				padding:20px;
				margin-top:50px;
				text-align:center;
			}
			.taxi
			{
				width:100%;
				margin-top:50px;
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
			.sticky 
			{
				position: fixed;
				top: 0;	
				width:100%;
			}
			#finalmessage
			{
				border-radius:8px;
				border-spacing:2.8vh;
				width:48%;
				padding:0 10px 10px 10px;
				display:none;
				margin-top:-3%;
				box-shadow:0 2px 10px 3px #dddddd;
				border-bottom:1vh solid #7DC248;
			}
			.check
			{
				height:9%;
				width:6.2%;
				display:none;
				margin:9% auto 0 auto;
			}
			@media only screen and (max-width:900px) 
			{
				.ccr1{
					display:inline-block;
				}
				.ccr1 h1{
					font-size:85%;
				}
				.ccr1 p{
						font-size:85%;
				}
				.break{
					display:block;
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
					width:101%;
				}
				.logo{
					display:none;
				}
				header{
					background-repeat:no-repeat;
					background-position:-150px 0px;
					height:70%;
				}
				.head{
					padding-top:30px;
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
					font-size:180%;
				}
				.head svg{
					text-align:center;
					height:5%;
					width:10%;
				}
				.head font{
					text-align:center;
					font-size:10px;
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
					font-size:80%;
				}
				.img{
					display:none;
				}
				h1{
					font-size:100%;
					margin-left:3%;
				}
				.ccr{
					display:none;
				}
				.ccr1 h1{
					margin-left:3%;
				}
				.main{
					font-size:20px;
				}
				ol,p{
					font-size:90%;
					margin-left:-2%;
				}
				table{
					width:100%;
				}
				.contact h4{
					font-size:70%;
				}
				.contact p{
					font-size:70%;
				}
				#t font{
					font-size:24px;
				}
			}
			@media only screen and (max-width:720px)
			{
				.up{
					height:180px;
					width:101%;
				}
				header{
					height:60%;
				}
				.head font{
					font-size:55%;
					margin:auto;
					text-align:center;
				}
				.head h1{
					font-size:100%;
				}
				.call img{
					padding-left:37%;
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
					padding-top:4px;
				} 
				.mail font{
					padding-right:30%;
					font-size:12px;
				}
				nav .navi,.active{
					font-size:82%;
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
				.ccr1 h1{
					font-size:70%;
					margin-left:6%;
				}
				.ccr1 p,ul{
						font-size:60%;
				}
				.break img{
					width:80%;
					height:auto;
				}
				.main{
					text-align:center;
				}
				ol,p{
					font-size:70%;
				}
				.head1 h3{
					font-size:50%;
				}
				table{
					width:100%;
					background-size:100% 100%;
				}
				.thank font{
					font-size:20px;
				}
				#t font{
					font-size:15px;
				}
			}
		</style>
	</head>
	<body onunload="clear()">
		<header>
			<div class="up" id="up">
			<div class="logo"><img  src="images/wheelzonrent-logo.png" height="100%" width="10%%" style="float:left;margin:-1.2% 0 0 6.5%;">
				<img height="25%" width="1.6%" src="images/phone.png" style="height:auto;"><font style="font-size:1.254vw;">&ensp;+91-7305010188&emsp;</font>
				<img height="21%" width="1.9%" src="images/message.png" style="height:auto;"><font style="font-size:1.254vw;">&ensp;Info@wheelzonrent.in</font></div>
				<div class="logo1"><center><img  src="images/wheelzonrent-logo.png" height="50%" width="30%"></center>
					<div class="call"><img height="25%" width="2.5%" src="images/phone.png" style="height:auto;"><font>+91-7305010188&emsp;</font></div>
					<div class="mail"><img height="21%" width="2.5%" src="images/message.png" style="height:auto;"><font>&ensp;Info@wheelzonrent.in</font></div></div>
				
				<nav>
					<ul>
						<li><a class="navi" href="Home.php">Home</a></li>
						<li><a class="navi" href="cars.php">Cars</a></li>
						<li><a class="navi" href="bikes.php">Bikes</a></li>
						<li><div class="dropdown">
								<a id="glow3" class="navi" href="Home.php#service">Service</a>
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
						<li><a class="active" href="feedback.php">Feedback</a></li>
					</ul>
				</nav>
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
			<div class="head">
				<h1>Feedback</h1>
				<hr width="10%" color="white" style="margin-left:36%">
				<svg height="2.2vw" width="2.2vw" viewBox="0 0 200 200">
				<polygon points="100,10 40,198 190,78 10,78 160,198">
				</svg>
				<hr width="10%" color="white" style="margin:-1% 0 0 54%">
				<br>
				<font>Help us improve with your valuable feedback<font>
			</div>
		</header>
		<div id="Sticky"></div>
		<img class="check" id="CheckMark" src="images/check.png">
		<table class="form" id="finalmessage" border="0">
			<tr>
				<td style="width:400vh"><div class="thank" style="color:#7DC248;margin-top:40px;padding:0;width:98%;">SUCCESS!</div>
				<div class="thank" style="color:#4D5656;margin:2% 0 4% 0;padding:0;width:100%;font-size:1.4vw;">You successfully created your booking</div></td>
			</tr>
			<tr>
				<td>Vehicle:<input type="text" name="vehicle" id="display1" style="margin-left:5%;" readonly></td>
			</tr>
			<tr>
				<td>Amount:<input type="text" name="amount" id="display2" style="margin-left:4%;" readonly></td>
			</tr>
			<tr>
				<td>Date:<input type="text" name="date" id="date" style="margin-left:8.7%;" readonly></td>
			</tr>
		</table>
		<script>
				window.onscroll = function() {myFunction()};
				var navbar = document.getElementById("up");
				var sticky = Sticky.offsetTop;
				function myFunction()
				{
					if (window.pageYOffset >= sticky)
					{
						navbar.classList.add("sticky");
						document.getElementById("up").style.opacity="1";
					}
					else
					{
						navbar.className="up";
						document.getElementById("up").style.opacity="0.8";
					}
				}
				if(localStorage.getItem("text")!=null && localStorage.getItem("amount")!=null && localStorage.getItem("date")!=null)
				{
					document.getElementById("CheckMark").style.display="block";
					document.getElementById("finalmessage").style.display="block";
					document.getElementById("display1").value=localStorage.getItem("text");
					document.getElementById("display2").value=localStorage.getItem("amount")+"/-";
					document.getElementById("date").value=localStorage.getItem("date");
				}
		</script>
		<div class="thank"><font>Thank You For Helping us Serve You :)</font></div>
		<img class="taxi" src="images/taxi.jpg"><br>
		<div class="thank" id="t"><font>Feel Free To Browse Through Our Website :D</font></div>
		<table class="form">
			<form method="post">
			<tr>
				<td colspan="2">Feedback:<textarea name="feedback" cols="10" rows="3" placeholder="Enter Feedback"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="submit" Value="Send" onclick=""></td>
			</tr>
			</form>
		</table>
		<footer>
			<table class="main" background="images/contact.jpg">
				<tr>
					<td class="contact">
						<h4>Come To See Us</h4>
						<p>Kanhaiya Nagar, Delhi</p>
					</td>
					<td class="contact">
						<h4>Contact By Email</h4>
						<p>Info@wheelzonrent.in</p>
					</td>
					<td class="contact">
						<h4>Contact By Phone</h4>
						<p>+91-8384066726</p>
					</td>
				</tr>
			</table>
			<table>
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
						<p class="text">Showtime is one of the reputed Travel<br>
						Company in India.At Showtime<br>
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
		<script src="script.js">
		</script>
		<?php
			if(isset($_POST["submit"]) && (!empty($_POST["feedback"])) )
			{
				$servername = "localhost";
				$username = "Daniel Davidraj";
				$password = "password";
				$dbname = "daniel davidraj";
				// Create connection
				$conn = mysqli_connect($servername,$username,$password,$dbname);
				// Check connection
				if (!$conn) 
				{
					die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "INSERT INTO feedback(Feedback) VALUES ('$_POST[feedback]')";
				if (!mysqli_query($conn, $sql))
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
				mysqli_close($conn);
			}
		?>
	</body>
</html>	
			