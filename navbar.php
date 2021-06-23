<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  
}

body {margin:10px;}
body {background-color: #f2f2f2;}
h1{text-align: center;
	font-family:verdana; }



.topnav {
  overflow: hidden;
  background-color: #4A235A;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #9F63C4;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  
}
</style>
</head>
<body>


<br>
<h1> STEM CELL MANAGEMENT</h1>
<br>
<div class="sticky-top">
<div class="topnav" id="myTopnav">
   <a  href="http://localhost/j_comp/home.html">Home</a>
  <a href="http://localhost/j_comp/Transplant_Details.html">Transplant Details</a>
  <a href="http://localhost/j_comp/storage_details.html">Storage Details</a>
  <a href="http://localhost/j_comp/update_data.html">Update Data</a>
  <a href="http://localhost/j_comp/transplant_center_locator.html">Transplant Center Locator</a>
 
    <a class="active" href="http://localhost/j_comp/login.php">Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</div>


<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>


 




















<div class="fixed-bottom">	
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-dark" href="http://localhost/j_comp/home.html">www.stemxie.com</a>
  </div>
  <!-- Copyright -->
</footer>
</div>
</body>
</html>

