<html>
	<head>
        <title>Self Drive Car Rental</title> 
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
				background-image:url("images/bannerupload.jpg");
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
				font-size:3vw;
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
			nav .navi,.active
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
			.main
			{
				color:grey;
				font-size:90%;
				text-align:left;
				margin-left:30px;
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
				.call img{
					padding-left:37%;
					float:left;
					padding-top:4px;
				}
				.call font{
					padding-right:35%;
					font-size:13px;
				}
				.mail img{
					padding-left:34%;
					float:left;
					padding-top:3px;
				} 
				.mail font{
					padding-right:30%;
					font-size:12px;
				}
				nav .navi,.active{
					font-size:71%;
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
					font-size:80%;
				}
				.ccr1 p,ul{
						font-size:70%;
				}

				.break img{
					width:80%;
					height:auto;
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
								<a href="wed.php">WEDDING CAR RENTAL</a>
								<a href="event.php">EVENT TRANSPORTATION</a>
								<a href="self.php" style="color:white;">SELFDRIVE CAR RENTAL</a>
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
            <h1>SELF DRIVE</h1>
            <hr width="10%" color="white" style="margin-left:36%">
			<svg height="2.2vw" width="2.2vw" viewBox="0 0 200 200">
			<polygon points="100,10 40,198 190,78 10,78 160,198">
			</svg>
			<hr width="10%" color="white" style="margin:-1.15% 0 0 54%">
			<br>
            <font>Wheelzonrent is very customer friendly company where customer service and satisfaction come first.</font>
        </div>
        </header>
        <br><br><br>
		<div class="img" id="Sticky">
        <img src="images/self.jpg" height="40%" width="48%" align="left" style="margin-left:3%;"></div>
        <div class="break"> <img src="images/self.jpg" height="auto" width="80%" align="left" style="margin-left:10%;"><br></div>
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
        <h1 style="font-size:1.6vw;margin:0 0 0 55%;">ABOUT THE SELF DRIVING CAR</h1>
		<p class="main" style="margin:2% 5% 0 55%;line-height:2;">
            Wheelzonrent is a very customer friendly company where customer service and satisfaction come first.<br>
            wheelzonrent provides self-driven cars to customers at very convenient prices and gives absolutely new and young 
            well-maintained fleet for hassle-free and memorable driving experience.<br>
            We are available 24×7 with highly professional and experienced customer care executives. They will guide you exactly
             accordingly to your need.<br>
            Let us make all your driving experience a pleasure and fun.<br>
            For more, call and join us to have best quality services<br>
            We assured you the best of our services. Further for more assistance please feel free to call you</p><br><br>
		<p class="main" style="color:black">
            <b>Wheelzonrent provides selfdriven car in Delhi/NCR India. Selfdriven concept has been highly developed in India as it quite new concept as well.</b><br><br>
            <b>Selfdriven concept is like enjoying a journey rather than reaching a destination.</b><br><br> 
            <b>In other words, it is the concept of learning and feeling the nature vibes.</b><br><br>
            Driving in India should be a safe and enjoyable experience. If you have never driven in India before you should become familiar with the rules of our roads. 
            The Indian Transport Agency has issued some key driving tips which you should read before setting on your journey.<br><br>
            But first, as you will appreciate when you arrive in India – you’ve come a long way!!  wheelzonrent strongly suggest if you have come on a 
            long haul flight, you stay overnight at your initial destination. That way, you’ll be nice and refreshed the next day to begin your journey.<br><br>
		</p>
		<p class="main" style="color:black">
		<b>Top Tips for mountains</b>
            <ul style="list-style: circle;margin-left:30px;">
                <li style="display:list-item;">Keep Left</li>
                <li style="display:list-item;">Everyone Wears Seatbelts</li>
                <li style="display:list-item;">60km/h maximum speed or less on the open road</li>
                <li style="display:list-item;">No overtaking on yellow lines</li>
            </ul>
		</p><br><br>
		<p class="main" style="color:black">
            <b>Keep Left</b><br><br>
            Always drive on the left side of the road. If you drive on the right side of the road in your own country, 
            please remember to keep left when pulling out onto the road – it’s easy to forget.<br><br>
            <b>Safety belts</b><br><br>
            By law, everyone in the vehicle must wear a safety belt or child restraint – whether they’re in the front or back. 
            Children under five years of age must be secured in an approved child restraint.<br><br>
            <b>Driving Speeds</b><br><br>
            Speed limit signs show the maximum speed you can travel. At times you may need to drive at a slower speed due to road, weather or traffic conditions.<br>
            <ul style="list-style: circle;">
                <li style="display:list-item;">On most of New Zealand’s main rural roads, the speed limit is 100km/h unless a sign says a lower speed applies.</li>
                <li style="display:list-item;">The speed limit is generally 100km/h on motorways.</li>
                <li style="display:list-item;">This sign indicates the default rural speed limit of 100km/h applies but the road is unlikely to be suitable to travel at that speed. You may need to drive at a slower speed</li>
                <li style="display:list-item;">In urban areas, the speed limit is usually 50km/h unless a sign says otherwise.</li>
            </ul>
		</p><br><br>
        <p class="main" style="color:black">
			<b>Traveling times</b><br><br>
            It’s easy to underestimate traveling times in India. Distances may seem short on paper, but Indian roads may be narrower than you’re used to.<br><br>
		</p>
		<p class="main" style="color:black">
			<ul style="list-style: circle;">
                <li style="display:list-item;">Get plenty of rest before a long drive.</li>
                <li style="display:list-item;">Take a break from driving every two hours.</li>
                <li style="display:list-item;">If possible, share the driving with someone else.</li>
                <li style="display:list-item;">Avoid large meals and drink plenty of fluid.</li>
                <li style="display:list-item;">If you begin to feel sleepy, stop at a safe place and try to have a short sleep for up to 40 minutes.</li>
                <li style="display:list-item;">If you’re feeling very tired, find a place to stay overnight.</li>
            </ul>
		</p><br><br>
        <p class="main" style="color:black">    
			<b>Overtaking</b><br><br>
            Most roads in India have a single lane each way, and some provide passing lanes at regular intervals – these should be used where possible when overtaking. You must not cross a solid yellow line on your side of the center 
            line to pass a vehicle, as this indicates it’s too dangerous to overtake.<br><br>
            <b>Don’t try to overtake on blind covers.<br><br>
		</p>
         <p class="main" style="color:black">    
		Contact
        <br><br><b>
        Phone Number:<font color="#00afe5"> +91</font> 8384066726
        <br><br>
        Email Address:<font color="#00afe5"> info@wheelzonrent.in</font>
        <br><br>
        Reservation Hours: Monday to Sunday 24 hours</b>
        </p><br><br></div>
		<div class="ccr1">
        <h1 style="font-size:1.6vw;margin:10% 0 0 2%">ABOUT THE SELF DRIVING CAR</h1>
		<p class="main" style="margin-left:2%;line-height:2;">
            Wheelzonrent is a very customer friendly company where customer service and satisfaction come first.<br>
            wheelzonrent provides self-driven cars to customers at very convenient prices and gives absolutely new and young 
            well-maintained fleet for hassle-free and memorable driving experience.<br>
            We are available 24×7 with highly professional and experienced customer care executives. They will guide you exactly
             accordingly to your need.<br>
            Let us make all your driving experience a pleasure and fun.<br>
            For more, call and join us to have best quality services<br>
            We assured you the best of our services. Further for more assistance please feel free to call you</p><br>
		<p class="main" style="color:blackl;margin-left:2%;">
            <b>Wheelzonrent provides selfdriven car in Delhi/NCR India. Selfdriven concept has been highly developed in India as it quite new concept as well.</b><br><br>
            <b>Selfdriven concept is like enjoying a journey rather than reaching a destination.</b><br><br> 
            <b>In other words, it is the concept of learning and feeling the nature vibes.</b><br><br>
            Driving in India should be a safe and enjoyable experience. If you have never driven in India before you should become familiar with the rules of our roads. 
            The Indian Transport Agency has issued some key driving tips which you should read before setting on your journey.<br><br>
            But first, as you will appreciate when you arrive in India – you’ve come a long way!!  wheelzonrent strongly suggest if you have come on a 
            long haul flight, you stay overnight at your initial destination. That way, you’ll be nice and refreshed the next day to begin your journey.<br><br>
		</p>
		<p class="main" style="margin-left:2%;color:black;">
		<b>Top Tips for mountains</b>
            <ul style="list-style: circle;margin-left:30px;">
                <li style="display:list-item;">Keep Left</li>
                <li style="display:list-item;">Everyone Wears Seatbelts</li>
                <li style="display:list-item;">60km/h maximum speed or less on the open road</li>
                <li style="display:list-item;">No overtaking on yellow lines</li>
            </ul>
		</p><br><br>
		<p class="main" style="color:black;margin-left:2%;">
            <b>Keep Left</b><br><br>
            Always drive on the left side of the road. If you drive on the right side of the road in your own country, 
            please remember to keep left when pulling out onto the road – it’s easy to forget.<br><br>
            <b>Safety belts</b><br><br>
            By law, everyone in the vehicle must wear a safety belt or child restraint – whether they’re in the front or back. 
            Children under five years of age must be secured in an approved child restraint.<br><br>
            <b>Driving Speeds</b><br><br>
            Speed limit signs show the maximum speed you can travel. At times you may need to drive at a slower speed due to road, weather or traffic conditions.<br>
            <ul style="list-style: circle;">
                <li style="display:list-item;">On most of New Zealand’s main rural roads, the speed limit is 100km/h unless a sign says a lower speed applies.</li>
                <li style="display:list-item;">The speed limit is generally 100km/h on motorways.</li>
                <li style="display:list-item;">This sign indicates the default rural speed limit of 100km/h applies but the road is unlikely to be suitable to travel at that speed. You may need to drive at a slower speed</li>
                <li style="display:list-item;">In urban areas, the speed limit is usually 50km/h unless a sign says otherwise.</li>
            </ul>
		</p><br><br>
        <p class="main" style="color:black;margin-left:2%;">
			<b>Traveling times</b><br><br>
            It’s easy to underestimate traveling times in India. Distances may seem short on paper, but Indian roads may be narrower than you’re used to.<br><br>
		</p>
		<p class="main" style="color:black;margin-left:2%;">
			<ul style="list-style: circle;">
                <li style="display:list-item;">Get plenty of rest before a long drive.</li>
                <li style="display:list-item;">Take a break from driving every two hours.</li>
                <li style="display:list-item;">If possible, share the driving with someone else.</li>
                <li style="display:list-item;">Avoid large meals and drink plenty of fluid.</li>
                <li style="display:list-item;">If you begin to feel sleepy, stop at a safe place and try to have a short sleep for up to 40 minutes.</li>
                <li style="display:list-item;">If you’re feeling very tired, find a place to stay overnight.</li>
            </ul>
		</p><br><br>
        <p class="main" style="color:black;margin-left:2%;">    
			<b>Overtaking</b><br><br>
            Most roads in India have a single lane each way, and some provide passing lanes at regular intervals – these should be used where possible when overtaking. You must not cross a solid yellow line on your side of the center 
            line to pass a vehicle, as this indicates it’s too dangerous to overtake.<br><br>
            <b>Don’t try to overtake on blind covers.<br><br>
		</p>
         <p class="main" style="color:black;margin-left:2%;">    
		Contact
        <br><br><b>
        Phone Number:<font color="#00afe5"> +91</font> 8384066726
        <br><br>
        Email Address:<font color="#00afe5"> info@wheelzonrent.in</font>
        <br><br>
        Reservation Hours: Monday to Sunday 24 hours</b>
        </p><br><br></div>
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