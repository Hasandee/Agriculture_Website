<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Product </title>
	<link rel="stylesheet" type="text/css" href="../Style/Products.css">
</head>

<body>
	<section class="products">
		<h2>Our Products</h2>
		<div class="all-products">
			<div class="product">
				<img src="../Images/img23.jpg">
				<div class="product-info">
					<h4 class="product-title">Vegetables
					</h4>

					<a class="product-btn" href="Vegetables.html">Read More</a>

				</div>
			</div>
			<div class="product">
				<img src="../Images/img22.jpg">
				<div class="product-info">
					<h4 class="product-title">Fruits
					</h4>

					<a class="product-btn" href="Fruits.html">Read More</a>

				</div>
			</div>
			<div class="product">
				<img src="../Images/img24.jpg">
				<div class="product-info">
					<h4 class="product-title">Legumes
					</h4>

					<a class="product-btn" href="Legums.html">Read More</a>

				</div>
			</div>
			<div class="product">
				<img src="../Images/img25.jpg">
				<div class="product-info">
					<h4 class="product-title">Root Crops
					</h4>

					<a class="product-btn" href="RootCrops.html">Read More</a>

				</div>
			</div>
		</div>

		<h3>All Products</h3>
		<div id="saved-products" class="all-products">
			<?php
			include('../Control/product.php'); 
			?>
		</div>

	</section>

</body>

</html>