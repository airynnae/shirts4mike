<?php 
$pageTitle = "Welcome to Shirts 4 Mike!";
$section = "homepage";
include("includes/header.php"); ?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="shitrs.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<?php include("includes/products.php"); ?>
				<ul class="products">
				  <?php 
				  // $start_display = 
				  $current_product = 0;
				  $list_view_html = "";
				  foreach ($products as $product_id => $product) { 
				  		$current_product = $current_product + 1;
				  		if ($current_product > count($products) - 4) {
				  			$list_view_html = get_list_view_html($product_id, $product) . $list_view_html;
				  		}
				  	}
				  echo $list_view_html; 
				  ?>
				</ul>

			</div>

		</div>

<?php include("includes/footer.php"); ?>