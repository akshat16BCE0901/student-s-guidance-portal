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
  <a href="restraunts.php">Nearby Restraunts</a>
  <a href="theatres.php">Nearby Theatres</a>
  <a href="sightseeing.php">Sightseeing in vellore</a>
</div>

<div class="row">
  <div class="column">
    <h2>Bihari Dhaba</h2>
    <p>Bihari Dhaba is situated right in front of VIT Main Gate.It has specialised taste in North Indian Cuisines like Paneer Masala,Chicken Masala,Cholle Bhature etc.You can also find buffet on certain occassions.Cost for two is approx 300 Rs.</p>
<img src="bihari.jpg" width=240 height=300>
  </div>
  <div class="column">
    <h2>Vellore Kitchen</h2>
    <p>Vellore Kitchen is around 3-4 km from VIT.You may have to take a bus or rickshaw to get there.People crave its biryani and sizzler.Cost for 2 is approx 500 Rs.You may have to make prior bookings since the place is always crowded.</p>
<img src="vellore.jpg" width=240 height=300>
  </div>
  <div class="column">
    <h2>Earth Plate</h2>
    <p>Earth Plate is a multicuisine restaurant where you will find Chinese,Italian,sizzlers,North Indian etc.Its around 5-6 km from VIT and you have to take a rickshaw or bus till Old bus stand to get there.It is a little expensive and may cost around 700 Rs. for 2 people.</p>
<img src="earth.jpg" width=240 height=300>
  </div>
</div>

</body>
</html>
