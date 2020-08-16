<?php
	$text=$_GET["text"];
	$date=$_GET["date"];
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
						if($row["Vehicle"]==$text && $row["Date"]==$date)
						{
							break;
						}
						$i++;
				  }
				} 
				if($i==$rowsnum)
				{
					echo 0;
				}
				else
				{
					echo 1;
				}
				mysqli_close($conn);
?>