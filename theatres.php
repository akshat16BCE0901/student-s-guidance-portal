<?php require("header.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
    box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
    background-color: #f1f1f1;
    padding: 20px;
    text-align: center;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create three equal columns that floats next to each other */
.column {
    float: left;
    width: 33.33%;
    padding: 15px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width:600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>

<div class="topnav">
  <a href="ThisPage.php">Nearby Restaurants</a>
  <a href="theatres.php">Nearby Theatres</a>
  <a href="sightseeing.php">Sightseeing in Vellore</a>
</div>

<div class="row">
  <div class="column">
    <h2>PVR Theatre</h2>
    <p>It is approximately 3 km from VIT.It shows all movies (Bollywood,Tollywood,Hollywood).One of the most premium theatre of Vellore and is recently established.It is situated in Silk Mills.</p>
<img src="pvr.jpg" width=240 height=300>
  </div>
  <div class="column">
    <h2>Galaxy Theatre</h2>
    <p>It is approximately less than 1 km from VIT.One can reach there walking as well.It shows all movies (Bollywood,Tollywood,Hollywood).One of the oldest theatre of Vellore .It is situated inext to Chittor Bus stand.</p>
<img src="galaxy.jpg" width=240 height=300>
  </div>
  <div class="column">
    <h2>Vishnu theatre</h2>
    <p>It is approximately 4 km from VIT.It shows all movies (Bollywood,Tollywood,Hollywood).One of the most comfortable theatre of Vellore .Generally you will find all VIT population over there.</p>
<img src="vishnu.jpg" width=240 height=300>
  </div>
</div>

</body>
</html>
