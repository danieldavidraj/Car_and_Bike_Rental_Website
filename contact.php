<html>
	<head>
		<title>Contact Us</title>
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
				background-color:white;
				opacity:0.8;
				height:100px;
				text-align:right;
				padding:20px 30px 0px 0px;
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
				margin-right:-0.8%;
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
			iframe
			{
				margin-top:50px;
			}
			table
			{
				height:auto;
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
			.service
			{
				width:100%;
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
			.head1 h3
			{
				font-size:100%;
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
				width:65%;
				margin:auto;
				padding: 10px 10px 2px 10px;
				margin-top:50px;
				margin-bottom:50px;
				font-size:1.3vw;
			}
			input[type=text],input[type=email],textarea
			{
				border:1px solid #dddddd;
				padding: 8px 19px;
				font-size:1vw;
				color: #b5b5b5;
				width:100%;
			}
			input[type=date]
			{
				border:1px solid #dddddd;
				padding: 8px 19px;
				font-size:1vw;
				color: #b5b5b5;
			}	
			#display1,#display2
			{
				color:black;
				margin-left:1.5%;
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
			}
			input[type=submit]:hover
			{
				background-color:#006b8b;
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
				font-size: 100%;
				font-family: "Montserrat";
				font-weight: 400;
			}
			p
			{
				font-size:100%;
				color:#00afe5;
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
			.popup
			{
				opacity:0;
				height:40;
				border:black solid;
				width:65%;
				margin:-5% 0 0 36.1%;
				background-color: #555;
				color: #fff;
				text-align: center;
				border-radius:0.7vh;
				transition:0.3s;
				font-size:1.3vw;
			}
			.popup::after
			{
				content:"";
				position: absolute;
				top: 126%;
				left: 40%;
				border-width: 1vh;
				border-style: solid;
				border-color:transparent black transparent transparent;
			}
			#registration
			{
				display:none;
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
			}
		</style>
	</head>
	<body onload="Display()">
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
						<li><a class="active" href="contact.php">Contact Us</a></li>
						<li><a class="navi" href="terms.php">Terms</a></li>
						<li><a class="navi" href="feedback.php">Feedback</a></li>
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
				<h1>Contact Us</h1>
				<hr width="10%" color="white" style="margin-left:36%">
				<svg height="30" width="50" viewBox="0 0 200 200">
				<polygon points="100,10 40,198 190,78 10,78 160,198">
				</svg><br>
				<hr width="10%" color="white" style="margin:-1.15% 0 0 54%"><br>
				<font>It's Bad Manners To Keep A Vocation Waiting</font;
			</div>
		</header>
		<iframe id="Sticky" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3500.2426812522795!2d77.16255311468153!3d28.682386282398216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0246bc0d7a89%3A0x6278a43a80c822b3!2sKanhaiya+Nagar+Metro+Station!5e0!3m2!1sen!2sau!4v1502530151236" 
		width="100%" height="500" frameborder="0">Please Check your Network</iframe>
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
		</script>
		<form method="post" enctype="multipart/form-data" autocomplete="on">
		<table class="form" id="registration">
			<tr>
				<td>Vehicle:&nbsp;<input type="text" name="vehicle" id="display1" style="width:60%;"></td>
			</tr>
			<tr>
				<td>Amount:<input type="text" name="amount" id="display2" style="width:60%;"></td>
			</tr>
			<tr>
				<td>Date:<input type="date" name="date" id="date" onchange="CheckDate()" style="margin-left:5%;">
				<div id="Popup" class="popup">Sorry!The vehicle is already booked on the corresponding date.
						Select a different date or book another vehicle.</div></td>
			</tr>
			<tr>
					<td colspan="2">Upload Driving License
					<input type="file" id="accept" accept="image/*" name="license"></td>
			</tr>
		</table>

		<script>
			if(localStorage.getItem("text").length!=0)
			{
				document.getElementById("registration").style.display="block";
			}
		</script>
		<div class="head1">
		<h3 style="font-size:2vw;">Please fill the form below</h3></div>
		<table class="form">
				<tr>
					<td><input type="text" name="name" placeholder="Enter Name" required></td>
					<td><input type="email" name="email" placeholder="Enter Email" required></td>
				</tr>
				<tr>
					<td><input type="text" name="phone" placeholder="Enter Phone" pattern="[0-9]{10}" required></td>
					<td><input type="text" name="subject" placeholder="Enter Subject"></td>
				</tr>
				<tr>
					<td colspan="2"><textarea name="message" cols="10" rows="3" placeholder="Enter Message"></textarea></td>
				</tr>
				<tr>
					<td colspan="2"><input id="Sub" type="submit" name="submit" value="Send" onclick="DATE()">
					</td>
				</tr>
		</form>
		</table>
		<script>
			function CheckDate() 
			{
					var text=document.getElementById("display1").value;
					var date=document.getElementById("date").value;
					var xmlhttp = new XMLHttpRequest();
					xmlhttp.onreadystatechange = function() 
					{
						if (this.readyState == 4 && this.status == 200) 
						{
							if(this.responseText==1)
							{
								document.getElementById("Popup").style.opacity="1";
								document.getElementById("Popup").style.height="initial";
							}
							else
							{
								document.getElementById("Popup").style.opacity="0";
								document.getElementById("Popup").style.height="40";
							}
						}
					};
					xmlhttp.open("GET","checkdate.php?text="+text+"&date="+date,true);
					xmlhttp.send();
			}
		</script>
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
			if(isset($_POST["submit"]) && !empty("$_POST[name]") )
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
				
				$sql="SELECT `Vehicle`,`Date` FROM `package`";
				$result=mysqli_query($conn,$sql);
				$rowsnum=mysqli_num_rows($result);
				$i=0;
				if ($rowsnum > 0) 
				{
				  while($row = mysqli_fetch_assoc($result)) 
				  {
						if($row["Vehicle"]==$_POST["vehicle"] && $row["Date"]==$_POST["date"])
						{
							break;
						}
						$i++;
				  }
				} 
				if($i==$rowsnum)
				{
					$image = addslashes(file_get_contents($_FILES['license']['tmp_name']));
					$sql = "INSERT INTO package(Name,Email,Phone,Message,Subject,Vehicle,Amount,Date,License) VALUES ('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[message]','$_POST[subject]','$_POST[vehicle]','$_POST[amount]','$_POST[date]','{$image}')";
					if (!mysqli_query($conn, $sql))
					{
						echo "Error: " . $sql . "<br>" . mysqli_error($conn);
					}
					echo "<script>Location();ClearTable();</script>";
				}
				else
				{
					echo '<script>localStorage.removeItem("date");
					      alert("Sorry!The vehicle is already booked on the corresponding date.Select a different date or book another vehicle.");</script>';
				}
				mysqli_close($conn);
			}
		?>
	</body>
</html>