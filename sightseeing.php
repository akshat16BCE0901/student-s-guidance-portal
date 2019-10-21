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
  <a href="restraunts.php">Nearby Restaurants</a>
  <a href="theatres.php">Nearby Theatres</a>
  <a href="sightseeing.php">Sightseeing in Vellore</a>
</div>

<div class="row">
  <div class="column">
    <h2>Vellore  Fort</h2>
    <p>Vellore Fort is a large 16th-century fort situated in heart of the Vellore city, in the state of Tamil Nadu, India built by Vijayanagara kings. The fort was at one time the headquarters of the Aravidu Dynasty of the Vijayanagara Empire. The fort is known for its grand ramparts, wide moat and robust masonry.</p>
<img src="fort.jpg" width=240 height=300>
  </div>
  <div class="column">
    <h2>Golden Temple</h2>
    <p>The golden temple complex inside the Sripuram  spiritual park is situated at the foot of a small range of green hills at Thirumalaikodi (or simply Malaikodi) village, 8 km from Vellore in Tamil Nadu, India. It is 120 km from Tirupati, 145 km from Chennai, 160 km from Puducherry and 200 km from Bengaluru. The Maha Kumbhabhishekam or consecration of the temple and its chief deity, Sri Lakshmi Narayani or Maha Lakshmi, the goddess of wealth, was held on 24 August 2007, and devotees from all religions and backgrounds are welcome to visit.</p>
<img src="temple.jpg" width=240 height=300>
  </div>
  <div class="column">
    <h2>Bagayam Hills</h2>
    <p>The Palamathi Hills (also bagayam Hills) are an extension of the Eastern Ghats spread across southeastern parts of Vellore City in Tamil Nadu. The Palamathi Hill range, the nearby Palamathi Reserve Forest, the Otteri lake is collectively referred to as Palamathi Hills. The area is a thriving hotspot for various birds and various flora. The hill top has a famous Hindu temple (Bala Murugan Kovil). The place is also a developing tourist destination.</p>
<img src="hills.jpg" width=240 height=300>
  </div>
</div>

</body>
</html>
