<html>
	<head>
        <title>Wedding Car Rental</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "icon" type = "image/png" href = "images/wheelzonrent-logo.png">
		<link rel="stylesheet" href="poppins.css" type="text/css" media="all">
		<link rel="stylesheet" href="montserrat.css" type="text/css" media="all">
		<style>
			body
			{
				font-family:'Poppins',sans-serif;
			}
			header
			{
				background-image:url("images/bannercar.jpg");
				background-position:-150px 0px;
				margin:-10px;
			}
			div
			{
				width:100%;
			}
			.up
			{
				background-color:white;
				opacity:0.8;
				height:100px;
				text-align:right;
				padding:1.6% 2.45% 0 0;
				box-sizing:border-box;
				font-weight:600;
				width:100%;
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
			table
			{
				width:100%;
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
			ul
			{
				list-style:none;
				margin-right:-0.7%;
			}
			li
			{
				display:inline-block;
			}
			.navi,.active
			{
				display:block;
				padding-left:10px;
				padding-right:10px;
				text-decoration:none;
				color:black;
				letter-spacing:1px;
				font-weight:700;
				font-size:1vw;
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
					background-position:-300px 0px;
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
					font-size:25px;
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
			}
			@media only screen and (max-width:720px)
			{
				.up{
					height:200px;
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
					padding-top:7px;
				} 
				.mail font{
					padding-right:30%;
					font-size:12px;
				}
				nav .navi,.active{
					font-size:47%;
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
				.ccr1 h3{
					font-size:80%;
				}
				.ccr1 p{
						font-size:70%;
				}
			} 
		</style>
	</head>
	<body>
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
							<a class="active" href="Home.php#service">Service</a>
							<div class="dropdown-content">
								<a href="rental.php">CAR RENTAL SERVICE</a>
								<a href="corporate.php">CORPORATE CAR RENTAL</a>
								<a href="wed.php" style="color:white;">WEDDING CAR RENTAL</a>
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
		<div class="head">
            <h1>WEDDING / EVENT MANAGEMENT</h1>
            <hr width="10%" color="white" style="margin-left:36%">
			<svg height="2.2vw" width="2.2vw" viewBox="0 0 200 200">
			<polygon points="100,10 40,198 190,78 10,78 160,198">
			</svg>
			<hr width="10%" color="white" style="margin:-1.15% 0 0 54%">
			<br>      
            <font>Wheelzonrent is emerging car rental company in delhi/india . We have been known in industry for our 100% customer satisfaction</font>
        </div>
        </header>
        <br> <br> <br>
		<div class="img" id="Sticky">
        <img src="images/marry.jpg" style="margin:1.5% 0 0 7%;height:auto;width:40%;" align="left"></div>
		<div class="break"><img src="images/marry.jpg" style="width:70%;margin-left:10%;margin-right:10%;margin-top:1%;" align="left"><br></div>
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
		<div class="ccr">
        <h3 style="font-size:1.6vw;color:black;margin:2% 0 0 50%;">WEDDING / EVENT MANAGEMENT</h3>
        <p style="color:grey;font-size:95%;text-align:left;margin:2% 80px 0 50%;">
            Wheelzonrent is emerging <b>car rental company in Delhi/India.</b> We have been known in the industry for our 100% customer satisfaction.<br>
            We provide cars on rent for business promotions, corporate meetings, wedding, and movies, etc.
            we have a wide range of luxury and premium cars for you. We think for a special occasion we need the right car at right prices, wheelzonrent provides the best car accordingly the customer requirement.<br><br>
        </p>
        <p style="font-size:95%;text-align:left;margin:10% 0 10% 4%;">
		We assured you the best of our services. Further for more assistance please feel free to call us – 8384066726.<br>
		<b><font color="#00afe5">Wedding Car On Rent, Luxury Car Hire In Delhi, Marriage Car Rental Service Delhi, Doli Car Rental In Delhi</font></b>
		</p>
		</div>
		<div class="ccr1">
        <h3 style="color:black;margin-left:2%;">WEDDING / EVENT MANAGEMENT</h3>
        <p style="color:grey;font-size:90%px;text-align:left;margin-left:2%;">
            Wheelzonrent is emerging <b>car rental company in Delhi/India.</b> We have been known in the industry for our 100% customer satisfaction.<br>
            We provide cars on rent for business promotions, corporate meetings, wedding, and movies, etc.
            we have a wide range of luxury and premium cars for you. We think for a special occasion we need the right car at right prices, wheelzonrent provides the best car accordingly the customer requirement.<br><br>
        </p>
        <p style="text-align:left;margin:0 0 10% 2%;">
		We assured you the best of our services. Further for more assistance please feel free to call us – 8384066726.<br>
		<b><font color="#00afe5">Wedding Car On Rent, Luxury Car Hire In Delhi, Marriage Car Rental Service Delhi, Doli Car Rental In Delhi</font></b>
		</p>
		</div>
		<footer>
			<img class="service" src="images/service.jpg">
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