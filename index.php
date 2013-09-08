<?php 
$pageTitle = "Welcome to Shirts 4 Mike!";
$section = "homepage";
require_once("includes/config.php");
include(ROOT_PATH . "includes/header.php");

include(ROOT_PATH . "includes/products.php");
$recent = get_products_recent(); 
?>

		<div class="section banner">

			<div class="wrapper">

				<img class="hero" src="<?php echo BASE_URL; ?>img/mike-the-frog.png" alt="Mike the Frog says:">
				<div class="button">
					<a href="<?php echo BASE_URL; ?>shirts.php">
						<h2>Hey, I&rsquo;m Mike!</h2>
						<p>Check Out My Shirts</p>
					</a>
				</div>
			</div>

		</div>

		<div class="section shirts latest">

			<div class="wrapper">

				<h2>Mike&rsquo;s Latest Shirts</h2>

				<?php 
					
				?>
				<ul class="products">
				  <?php 
				  $list_view_html = "";
				  foreach ($recent as $product) { 
				  		$list_view_html = get_list_view_html($product) . $list_view_html;
				  	}
				  echo $list_view_html; 
				  ?>
				</ul>

			</div>

		</div>

<?php include(ROOT_PATH . "includes/footer.php"); ?>