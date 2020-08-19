<!DOCTYPE html>
<html>
<head>
	<title>
	</title>

	<?php include 'links.php' ?>

</head>
<body>

	<style>

				
		body {
  font-family: "Lato", sans-serif;
}

.bgimg{
	 background-image: linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.5)) , url(../img/index.jpg);
    background-position: center;
    background-size:cover;
    height:60vh;
    width:100%;
}


	.sidebar {
  height:100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top:0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

.fab{
    padding:12px;
}

.fab:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-snapchat {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}


	</style>

	<div class="bgimg">
    <div id="main">
        <button class="openbtn" onclick="openNav()">☰ Menu</button> 
    </div>
</div><br><br><br>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="sellbooks.php"> Sellbooks </a>
  <a href="mybooks.php"> Mybooks </a>
  <a href="mycart.php"><i class="fas fa-cart-arrow-down"></i>   Mycart</a>
  <a href="#"><i class="fas fa-info-circle"></i>  About us</a>
  <a href="gallery.php"><i class="far fa-image"></i>    Gallery </a>
  <a href="logout.php"><i class="fas fa-power-off"></i>  logout</a>
</div>


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
</body>
</html>