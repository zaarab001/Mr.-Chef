<!doctype html>

<html>
<head>

	<meta name="viewport" content="width=device-width ,height=device-height, initial-scale=1.0">
    <link rel="icon" href="img/images.png">
    <title>MrChef.com</title>
	<link href="https://fonts.googleapis.com/css?family=Supermercado+One" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<style type="text/css">
			*{
				margin: 0px;
				padding: 0px;
			}

			body{
				background: rgb(255, 255, 255);
				font-family: 'Supermercado One', cursive;
			}


		.body{
			width: 90%;
			height: 95%;
			min-height: 560px;
			display: block;
			background-image:url(img/images%20(77).jpeg);
			background-repeat: no-repeat;
			background-size: 100%;
			margin: 0 auto;
			background-position: center;
    		background-origin: initial;
    		background-position: top;
    		box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		}


		.topnav{
			width: 100%;
			overflow: hidden;
		}


		.topnav a {
		    float: left;
		    display: block;
		    color: #f2f2f2;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		    font-size: 20px;
		    vertical-align: middle;
		}

		.topnav a.nav{
			display: none;
		}
		

		.topnav .icon {
		    display: none;
		}


		.button {
		  border-radius: 7px;
		  background-color: #FCB74C;
		  border: none;
		  color: #FFFFFF;
		  text-align: center;
		  padding: 10px;
		  width: 100px;
		  transition: all 0.5s;
		  cursor: pointer;
		  margin: 5px;
		}

		.button span {
		  cursor: pointer;
		  display: inline-block;
		  position: relative;
		  transition: 0.5s;
		}

		.button span:after {
		  content: '\00bb';
		  position: absolute;
		  opacity: 0;
		  top: 0;
		  right: -20px;
		  transition: 0.5s;
		}

		.button:hover span {
		  padding-right: 25px;
		}

		.button:hover span:after {
		  opacity: 1;
		  right: 0;
		}


			.dropdown {
			    float: left;
			    overflow: hidden;
			}

			.dropdown .dropbtn {
			    cursor: pointer;
			    font-size: 16px;    
			    border: none;
			    width: 180px;
			    outline: none;
			    color: white;
			    padding: 14px 16px;
			    background-color: inherit;
			    font: inherit;
			    margin: 20px;
			    background-color: #E54925;
			}

			.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
			    background-color: #FCB74C;
			}
			.button:hover{
				background-color:#E54925;
			}

			.dropdown-content {
			    display: none;
			    position: absolute;
			    background-color: #FCB74C;
			    min-width: 160px;
			    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			    z-index: 1;
			}

			.dropdown-content a {
			    float: none;
			    color: white;
			    padding: 12px 16px;
			    text-decoration: none;
			    display: block;
			    text-align: left;
			}

			.dropdown-content a:hover {
			    background-color: #E54925;
			}

		
			.show {
			    display: block;
			}


			.container {
			    display: inline-block;
			    cursor: pointer;
			}

			.bar1, .bar2, .bar3 {
			    width: 26px;
			    height: 3px;
			    background-color: #E54925;
			    margin: 6px 0;
			    transition: 0.4s;
			}

			/* Rotate first bar */
			.change .bar1 {
			    -webkit-transform: rotate(-45deg) translate(-4px, 6px) ;
			    transform: rotate(-45deg) translate(-4px, 6px) ;
			}

			/* Fade out the second bar */
			.change .bar2 {
			    opacity: 0;
			}

			/* Rotate last bar */
			.change .bar3 {
			    -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
			    transform: rotate(45deg) translate(-8px, -8px) ;
			}


			.login{
				float: right !important; 
			}

			
			.b {
		  	animation: bounce 1s infinite;
		  	display: block;
		  	text-decoration: none;
		  	text-align: center;
		  	color: #333;
		  	font-size: 1.5em;
			cursor: pointer;
			}



			.pot{
				background: rgba(252,183,76,.5);
				border-radius: 7px;
				padding: 9px;
				box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14), 0 3px 1px -2px rgba(0, 0, 0, 0.2), 0 1px 5px 0 rgba(0, 0, 0, 0.12);
			}

			
			@keyframes bounce {
				0%, 20%, 50%, 80%, 100% {
			    transform:translateY(0);
			  }
				40% {
			    transform:translateY(-30px);
			  }
				60% {
			    transform:translateY(-15px);

			  }
				}

			.welcome{

				font-size: 3em;
				color: rgba(0,0,0,.65);
				text-align: center;
				margin: 20px;
				font-family:'Supermercado One', cursive;
			}

			.foot{
			color: #333;
			text-decoration: none;
			width: 100%;
			text-align: center;
			font-size: 1.2em;
			}

			.footerLink{
			color: #333;
			margin: 5%;
			}

			.orderForm{
				display: none;
			}

			.unShow{
				display: none;
			}
			.show{
				display: block;
			}

			.tab {
				width: 90%;
				margin: 0 auto;
				overflow: hidden;
				border-bottom: 1px solid rgb(247, 88, 8);
				background-color: rgba(248, 232, 158, 0.39);
				font-family: 'Supermercado One', cursive;	
				border-radius: 5px;
			}

			.tab button {
				background-color: rgba(255, 255, 255, 0);
				float: left;
				border: none;
				outline: none;
				cursor: pointer;
				transition: 0.3s;
				width: 20%;
				min-width: 80px;
				font-family: 'Supermercado One', cursive;
			}

			.tablinks{
				font-size: 90%;
				min-height: 60px;
			}
			
			.tab button:hover {
				color:#E54925;
			}

			
			.tab button.active {
				background-color: #E54925;
				color: #f1f1f1;
			}

			
			.tabcontent {
				display: none;
				padding: 6px 12px;
				border-top: none;
				width: 90%;
				margin: 0 auto;
				text-align: center;
			}

			.tabcontent {
				animation: fadeEffect 1s;
			}

			@keyframes fadeEffect {
				from {opacity: 0;}
				to {opacity: 1;}
			}
		@media screen and (max-width: 600px) {
		 .body{
			 background-color:transparent:#FFC;
		 	background-image:url(img/images%20(77).jpeg);
			height: 100%; 

		 }
		 .dropdown{
		 	display: none;
		 }
		  .topnav a:not(:first-child) {display: none;}
		  .topnav a.icon {
		    float: right;
		    display: block;
		    padding: 10px;
		  }

		  .topnav.responsive {
		  	position: relative;

		  }
		  .topnav.responsive a.icon {
		    position: absolute;
		    right: 0;
		    top: 0;
		  }
		  .topnav.responsive a {
		    float: none;
		    display: block;
		    text-align: left;
		    background: #333;
		    text-align: center;
		  }

		  .login{
		  	display: block;
		  	float: none !important;
		  }
		  
		  .welcome{
		  	font-size: 1.2em;
		  }

		  .tab button {
			  margin: 0 3px;
		  }

		  .tablinks{
			  font-size: 80%;
		  }

		}

	</style>



	<script type="text/javascript">


	function myFunction() {
    var x = document.getElementById("myTopnav");
	    if (x.className === "topnav") {
	        x.className += " responsive";
	    } else {
	        x.className = "topnav";
	    }
	}


	function drop() {
	    document.getElementById("myDropdown").classList.toggle("show");
	}

	function myyFunction(x) {
	    x.classList.toggle("change");
	}

	function showForm(){
		var cont = document.getElementById("content1");
		var form = document.getElementById("orderForm");
		
		cont.classList.add('unShow');
		form.classList.add('show');
		document.getElementById("defaultOpen").click();
	}

	window.onclick = function(e) {
		  if (!e.target.matches('.dropbtn')) {
		    var myDropdown = document.getElementById("myDropdown");
			      if (myDropdown.classList.contains('show')) {
			        myDropdown.classList.remove('show');
			      }
		  }
	}

	function openCity(evt, cityName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
	}


	</script>
</head>

<body>

	<div class="body">

<!-- Navigation -->

		<div class="topnav" id="myTopnav">
			  <img src="img/images.png" style="float:left; width:100px; height:100px; margin-left:20px">

			  <!-- For mobile -->
			  <a href="#" class="nav">Party Orders</a>
			  <a href="#" class="nav">Team Up Scheme</a>
			  <a href="#" class="nav">Restaurant Online Presence</a>
			  <a href="#" class="nav">Delivery Services</a>

				<div class="dropdown">
			    <button class="button dropbtn" onClick="drop();">
			    	<span>Other Services</span>
			    </button>
			    <div class="dropdown-content" id="myDropdown">
			      <a href="#">Team Up Scheme</a>
			      <a href="#">Restaurant Online Presence</a>
			      <a href="#">Delivery Services</a>
			    </div>
			  	</div>

			  <a href="../index.php" class="login"><button class="button"><span>Home</span></button></a>
			  <a href="javascript:void(0);" class="icon" onClick="myFunction()">
             	<div class="container" onClick="myyFunction(this)">
				  <div class="bar1"></div>
				  <div class="bar2"></div>
				  <div class="bar3"></div>
				</div>

			  </a>
		</div>
	
<!-- Content -->

		<div class="content" id="content1">

			<div class="welcome">Welcome to Mr. Chef Fast Food :)</div>
			<div class="welcome">You can Order <h1>FOOD</h1> in Three easy steps!!</div>
			<span onClick="showForm();" class="b potS"><img src="img/Mercy-Johnson-e1520766385152.jpg" width="120px" class="pot" > <br> Order Now</span>

		</div>

<!-- Content Form -->

		<div class="orderForm" id="orderForm">

				<div class="tab">
				<button class="tablinks" onClick="openCity(event, 'singleBuk')" id="defaultOpen">Single Order <br> (Mr. Chef Restaurants)</button>
				<button class="tablinks" onClick="openCity(event, 'singleOther')">Party Order <br> (Mr. Chef Retaurants)</button>
				<button class="tablinks" onClick="openCity(event, 'corporateForms')"> Corporate  <br> Orders </button>
				</div>

				<!-- Tab content -->
				<div id="singleBuk" class="tabcontent">
					<!-- Iframe goes here -->
					<iframe src="https://services.cognitoforms.com/f/thWng98pwECN4vQmbQRBBw?id=1" style="position:relative;width:1px;min-width:100%;*width:100%;" frameborder="0" scrolling="yes" seamless="seamless" height="1421" width="100%"></iframe>
					<script src="https://services.cognitoforms.com/scripts/embed.js"></script>
				</div>

				<div id="singleOther" class="tabcontent">
					<!-- Iframe goes here -->
					<iframe src="https://services.cognitoforms.com/f/thWng98pwECN4vQmbQRBBw?id=3" style="position:relative;width:1px;min-width:100%;*width:100%;" frameborder="0" scrolling="yes" seamless="seamless" height="1529" width="100%"></iframe>
					<script src="https://services.cognitoforms.com/scripts/embed.js"></script>
				</div>

				<div id="corporateForms" class="tabcontent">
					<!-- Iframe goes here -->
					<iframe src="https://services.cognitoforms.com/f/thWng98pwECN4vQmbQRBBw?id=5" style="position:relative;width:1px;min-width:100%;*width:100%;" frameborder="0" scrolling="yes" seamless="seamless" height="983" width="100%"></iframe>
					<script src="https://services.cognitoforms.com/scripts/embed.js"></script>
				</div>

		</div>
<!-- Footer goes here.  Copy and paste footer in div below -->

<div class="foot">
	<a href="https://www.facebook.com/mrchefnigeria" target="_blank"><i class="fa fa-facebook-official footerLink"></i></a>
	<a href="https://www.instagram.com/mrchefnigeria" target="_blank"><i class="fa fa-instagram footerLink"></i></a>
	<a href="mailto:support@mrchefhub.com" target="_blank"><i class="fa fa-envelope-o footerLink"></i></a>

	<p class="footDetails">&copy;2018&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr.Chef FastMeal.ng </p>
</div>




	</div>


</body>


</html>
