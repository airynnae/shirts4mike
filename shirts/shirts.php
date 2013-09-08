<?php 
require_once("../includes/config.php");
require_once(ROOT_PATH . "includes/products.php");
$products = get_products_all();
?>
<?php
$pageTitle = "See our full-frog Catalog!";
$section = "shirts";
include(ROOT_PATH . "includes/header.php"); ?>

<div class="section shirts page">
	<div class="wrapper">

		<h1>Mike&rsquo;s Full Catalog of Shirts</h1>

		<ul class="products">
		  <?php foreach ($products as $product) { 
		  		echo get_list_view_html($product);

		  	} 
		  ?>
		</ul>

	</div>
</div>

<?php include(ROOT_PATH . "includes/footer.php"); ?>