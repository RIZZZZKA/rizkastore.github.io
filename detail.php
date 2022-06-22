<?php 
$products = [
	1 => [
		'name' => 'HUAWEI p40 PRO',
		'img' => 'huwawei.jpg',
		'price' => 'Rp 1000$',
		'category' => 'HENDPHONE',
		'about' => 'Mencerminkan kemurnian alam, HUAWEI P40 Pro mengadopsi warna-warna solid dari Deep Sea Blue dan Silver Frost. Lapisan matte refraktif menonjolkan rasa mendalam yang halus yang mengungkapkan keanggunan dan kedamaian batin di setiap warna.', 
		'related_product' => [
			['BLACKSHARK 2', 'Blackshark2.png', 'Rp 2000$'],
			['HUAWEI P40', 'huwawei.jpg', 'Rp 1000$'],
			['ASUS ROG PHONE 5', 'rog5.jpg', 'Rp 30.000'],
		]
	],
	2 => [
		'name' => 'BLACKSHARK 2',
		'img' => 'Blackshark2.png',
		'price' => 'Rp 2000$',
		'category' => 'HANDPHONE',
		'about' => 'RAM 8gb INTERNAL 128gb CPU Snapdragon 855, Octa-core (1x 2,84 GHz, 3x2,42 GHz, & 4 x 1,8 GHz) ; GPU :Adreno 612',
		'related_product' => [
			['IPHONE 12 PRO', 'ipone12.png', 'Rp 1000$'],
			['ASUS ROG PHONE 5', 'rog5.jpg', 'Rp 30.000'],
			['BLACKSHARK 2', 'Blackshark2.png', 'Rp 2000$'],
		] 
	],
	3 => [
		'name' => 'ASUS ROG PHONE 5',
		'img' => 'rog5.jpg',
		'price' => 'Rp 7000%',
		'category' => 'HANDPHONE',
		'about' => 'Kamera belakang 64MP + 13MP + 5MP dengan tingkat densitas pixel sebesar 388ppi dan tampilan resolusi sebesar 1080 x 2448 pixels. Dengan berat sebesar 239g, handphone HP ini memiliki prosesor Snapdragon 885 dan GPU Adreno 660.',
		'related_product' => [
			['IPHONE 12 PRO', 'ipone12.png', 'Rp 1000$'],
			['ASUS ROG PHONE 5', 'rog5.jpg', 'Rp 30.000'],
			['BLACKSHARK 2', 'Blackshark2.png', 'Rp 2000$'],
		] 
	]
];

function get_related_products() {
	global $products;
	return $products[$_GET['id']]['related_product'];
};

?>


<!DOCTYPE html>
<html>
<head>
	<title>Detail of <?= $products[$_GET['id']]['name'] ?></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class='container'>

	<a href="latihan.php">Back to Home</a>

	<!-- PRODUCT DETAILS -->

	<div class="row">
		<div class="col">
			<img src="<?= $products[$_GET['id']]['img']?>" width="500" height="500">
		</div>
		<div class="col">
			<h1><?= $products[$_GET['id']]['name']?></h1>
			<p><?= $products[$_GET['id']]['category']?></p>
			<p class="bg-primary text-light"><?= $products[$_GET['id']]['price']?></p>
			
			<p><?= $products[$_GET['id']]['about']?></p>
			<form method="post" action= "beli.php">
			<button type="submit" name="submit" value="Submit">checkout</button>
			</form>
		</div>
	</div>

	<hr>

	<!-- RELATED PRODUCTS -->
	<div class="card-deck mx-auto" style="max-width:1280px;">
		<?php foreach (get_related_products() as $related_product): ?>
			<div class="card">
				<img src="<?= $related_product[1]; ?>" class="card-img-top">
				<div class="card-body">
					<h5 class="card-title"><?= $related_product[0]; ?></h5>
					<p class="card-text"><?= $related_product[2]; ?></p>
				</div>
			</div>
		<?php endforeach; ?>	
	</div>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>