<?php 
// require "detail.php" ;

// $select_all_query = "SELECT * FROM hp";
// $all_data = query($select_all_query);


 ?>


<!DOCTYPE html>
<html>
<head>
	<style>
* {
  box-sizing: border-box;

}

.column {
  float: left;
  width: 32%;
  padding: 10px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
  width: 50%;
}
</style>
	<title>Home</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<center><h1>Super Deal</h1>
	<p>Dapatkan Promo hari ini</p> </center>
	
		<div class="row">
 			<div class="column">
				<a href="detail.php?id=1">
					<img src="huwawei.jpg" alt="Snow" style="width:100%">
				<h3 align="center">HUAWEI P40 PRO</h3>
				<p align="center">Rp 1000$</p>
				</a>
			</div>
			<div class="column">
				<a href="detail.php?id=2">
					<img src="Blackshark2.png" alt="Forest" style="width:100%">
				<h3 align="center">BLACKSHARK PHONE 2</h3>
				<p align=" center">Rp 2000$</p>
				</a>
			</div>
			<div class="column">
				<a href="detail.php?id=3">
					<img src="rog5.jpg" alt="Mountains" style="width: 100%">
				<h3 align="center">ASUS ROG PHONE 5</h3>
				<p align="center">Rp 7000$</p>
		</a>
	</div>
</div>

</body>
</html>