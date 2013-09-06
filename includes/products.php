<?php 
	
	function get_list_view_html($product_id, $product) {
		$output = "";
		$output = $output . "<li>";
		$output = $output . '<p>' . $product["name"] . '</p>';
		$output = $output . '<a href="shirt.php?id=' . $product_id . '">';
		$output = $output . '<img src="' . BASE_URL . $product["img"] . 
			'" alt="' . $product["name"] . '">';
		$output = $output . "<p>View Details</p>";
		$output = $output . "</a>";
		$output = $output . "</li>";

		return $output;
	}


	$products = array();

	$products[101] = array(
		"name" => "Logo Shirt, Red",
		"price" => 18,
		"img" => "img/shirts/shirt-101.jpg",
		"description" => "A basic shirt good for everyday damage",
		"paypal" => "Q8QTEUXD7KAVQ",
		"sizes" => array("Small", "Medium", "Large", "X-Large"),
		"styles" => array("Short Sleeve", "Long Sleeve")
		);
	$products[102] = array(
		"name" => "Mike the Frog Shirt, Black",
	    "img" => "img/shirts/shirt-102.jpg",
	    "description" => "Red Letter Day stuff.",
	    "price" => 20,
	    "paypal" => "GQQFMU2QLQ42U",
		"sizes" => array("Small", "Medium", "Large", "X-Large"),
		"styles" => array("Short Sleeve")
	);
	$products[103] = array(
	    "name" => "Mike the Frog Shirt, Blue",
	    "img" => "img/shirts/shirt-103.jpg",
	    "description" => "Red Letter Day stuff.",    
	    "price" => 20,
	    "paypal" => "DMGCN68EZ8T6E",
		"sizes" => array("Small", "Medium", "Large", "X-Large"),
		"styles" => array("Short Sleeve")
	);
	$products[104] = array(
	    "name" => "Logo Shirt, Green",
	    "img" => "img/shirts/shirt-104.jpg",
		"description" => "A basic shirt good for everyday damage.",    
	    "price" => 18,
	    "paypal" => "3HHMGVF9R9URJ",
		"sizes" => array("Small", "Medium", "Large", "X-Large"),
		"styles" => array("Short Sleeve", "Long Sleeve")
	);

	$products[105] = array(
	    "name" => "Mike the Frog Shirt, Yellow",
	    "img" => "img/shirts/shirt-105.jpg",
	    "description" => "Red Letter Day stuff.",    
	    "price" => 25,
	    "paypal" => "PMZ7URPL4FAKJ",
		"sizes" => array("Small", "Medium", "Large", "X-Large"),
		"styles" => array("Short Sleeve")
	);
	$products[106] = array(
	    "name" => "Logo Shirt, Gray",
	    "img" => "img/shirts/shirt-106.jpg",
		"description" => "A basic shirt good for everyday damage.",    
	    "price" => 20,
	    "paypal" => "5XTAX2B6G5STY",
		"sizes" => array("Small", "Medium", "Large", "X-Large"),
		"styles" => array("Short Sleeve", "Long Sleeve")
	);
	$products[107] = array(
	    "name" => "Logo Shirt, Turquoise",
	    "img" => "img/shirts/shirt-107.jpg",
		"description" => "A basic shirt good for everyday damage.",    
	    "price" => 20,
	    "paypal" => "K687FWBSXZ7ZL",
		"sizes" => array("Small", "Medium", "Large", "X-Large"),
		"styles" => array("Short Sleeve", "Long Sleeve")
	);
	$products[108] = array(
	    "name" => "Logo Shirt, Orange",
	    "img" => "img/shirts/shirt-108.jpg",
		"description" => "A basic shirt good for everyday damage.",    
	    "price" => 25,
	    "paypal" => "GNVPFGL6TUBAU",
		"sizes" => array("Large", "X-Large"),
		"styles" => array("Short Sleeve", "Long Sleeve")
	);

 ?>