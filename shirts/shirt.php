<?php 
require_once("../includes/config.php");
require_once(ROOT_PATH . "includes/products.php");
$products = get_products_all(); 

if (isset($_GET["id"])) {
		$product_id = $_GET["id"];
		if (isset($products[$product_id])) {
				$product = $products[$product_id];
		}
}
if (!isset($product)) {
	header("Location: " . BASE_URL . "shirts/");
	exit();
}

$section = "shirts";
$pageTitle = $product["name"];
include(ROOT_PATH . "includes/header.php");

?>

	<div class="section page">
		<div class="wrapper">
			<div class="breadcrumb">
			  <a href="<?php echo BASE_URL; ?>shirts/">Shirts</a> &gt;
			  <?php echo $product["name"] ?>
			</div>

			<div class="shirt-picture">
		  	<span>
		  		<img src="<?php echo BASE_URL . $product["img"]; ?>" 
							alt="<?php echo $product["name"]; ?>">
		  	</span>
			</div>

			<div class="shirt-details">

		  	<h1><span class="price">$<?php echo $product["price"]; ?></span>
		  		<?php echo $product["name"]; ?></h1>

		  	<form target="paypal" 
		  				action="https://www.paypal.com/cgi-bin/webscr" method="post">
			    <input type="hidden" name="cmd" value="_s-xclick">
			    <input type="hidden" name="hosted_button_id" 
			    			value="<?php echo $product["paypal"]; ?>">
			    <input type="hidden" name="item_name" 
			    			value="<?php echo $product["name"]; ?>">
			    <table>
			    	<tr>
				      	<th>
				        	<input type="hidden" name="on0" value="Size">
				        	<label for="os0">Size</label>
				        </th>
				        <td>
				          <select name="os0" id="os0">
				        	<!-- 	<?php // foreach ($product["sizes"] as $size) {
				        			// echo '<option value="' . $size . '">' . $size . '</option>';
				        		// } ?> -->
				        		<?php foreach ($product["sizes"] as $size) { ?>
				        		<option value="<?php echo $size; ?>"><?php 
				        			echo $size; ?></option>
				        		<?php } ?>
				          </select>
				        </td>
			      	</tr>

			    <?php if (count($product["styles"]) > 1) { ?>
			      	<tr>
			      		<th>
			      			<input type="hidden" name="on1" value="Style">
				        	<label for="os1">Style</label>
				        </th>
				        <td>
				        	<select name="os1" id="os1">
				        	  <?php foreach ($product["styles"] as $style) { ?>
				        		<option value="<?php echo $style; ?>"><?php echo $style; ?></option>
				        	  <?php } ?>
				        	</select>
				        </td>
			      	</tr>
			    <?php } ?>

			      	<tr>
			      		<th>
			      			<input type="hidden" name="on2" value="Gift">
				        	<!-- <label for="os2">Gift?: </label> -->
				        	<label for="squaredTwo">Gift?: </label>
				        </th>
				        <td>
				        	<div class="squaredTwo">
					        	<input type="checkbox" id="squaredTwo" name="os2" />
					    	    <label for="squaredTwo"></label>
					    	</div>
				        </td>
			      	</tr>

			    </table>
			    <input type="submit" value="Add to Cart" name="submit">
		  	</form>

		  	<p class="note-designer">* All shirts are designed 
					by Mike the Frog.</p>
			</div>
	  </div>
	</div>

<?php include(ROOT_PATH . "includes/footer.php"); ?>
