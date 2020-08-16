			var text="",amount,date;
			function Swift()
			{
				localStorage.setItem("text","Maruti Swift");
				localStorage.setItem("amount",2400);
				alert("Maruti Swift will be booked for Rs2400/-");
			}
			function Hyundai()
			{
				localStorage.setItem("text","Hyundai I10");
				localStorage.setItem("amount",2500);
				alert("Hyundai I10 will be booked for Rs2500/-");
			}
			function Innova()
			{
				localStorage.setItem("text","Toyota Innova");
				localStorage.setItem("amount",3200);
				alert("Toyota Innova will be booked for Rs3200/-");
			}
			function Audi()
			{
				localStorage.setItem("text","Audi A4");
				localStorage.setItem("amount",5500);
				alert("Audi A4 will be booked for Rs5500/-");
			}
			function Fortuner()
			{
				localStorage.setItem("text","Toyota Fortuner");
				localStorage.setItem("amount",4600);
				alert("Toyota Fortuner will be booked for Rs4600/-");
			}
			function RE350()
			{
				localStorage.setItem("text","Royal Enfield 350");
				localStorage.setItem("amount",900);
				alert("Royal Enfield 350 will be booked for Rs900/-");
			}
			function RC390()
			{
				localStorage.setItem("text","KTM RC 390");
				localStorage.setItem("amount",2500);
				alert("KTM RC 390 will be booked for Rs2500\-");
			}
			function Duke390()
			{
				localStorage.setItem("text","KTM Duke 390");
				localStorage.setItem("amount",1800);
				alert("KTM Duke 390 will be booked for Rs1800/-");
			}
			function Ninja300()
			{
				localStorage.setItem("text","Kawasaki Ninja 300");
				localStorage.setItem("amount",3500);
				alert("Kawasaki Ninja 300 will be booked for Rs3500/-");
			}
			function HD883()
			{
				localStorage.setItem("text","Harley Davidson Iron 883");
				localStorage.setItem("amount",7000);
				alert("Harley Davidson Iron 883 will be booked for Rs7000\-");
			}
			function Display()
			{
				if(localStorage.getItem("text").length!=0)
				{
					document.getElementById("display1").value=localStorage.getItem("text");
					document.getElementById("display2").value=localStorage.getItem("amount") + "/-";
					document.getElementById("date").required=true;
					document.getElementById("accept").required=true;
				}
			}
			function DATE()
			{
				localStorage.setItem("date",document.getElementById("date").value);
			}
			function Location()
			{
				 window.location.href="feedback.php";
			}
			function clear()
			{
				localStorage.removeItem("text");
				localStorage.removeItem("amount");
				localStorage.removeItem("date");
			}
			function ClearTable()
			{
				document.getElementById("display1").value="";
				document.getElementById("display2").value="";
				document.getElementById("date").value="";
				document.getElementById("accept").value="";	
				document.getElementByName("name").value="";
				document.getElementByName("email").value="";
				document.getElementByName("phone").value="";
				document.getElementByName("subject").value="";	
				document.getElementByName("message").value="";	
			}