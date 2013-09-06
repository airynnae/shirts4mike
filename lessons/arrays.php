<?php 
	$flavors = array("Vanilla", "Strawberry", 
		"Raspberry", "Watermelon");
	$mvie["name"] = "Movie Name";
	$empty = array();
 ?>
<html>
<head>
 	<title></title>
</head>
<body>
 	<p><?php 
	 	echo "We have " . count($flavors) . " flavors available.
	 	Here's a list:"; ?></p>

	<?php foreach ($flavors as $flavor) { ?>

	 		<div><?php echo $flavor; ?></div>

	<?php }	?></p>

	<p><?php echo "mvie[\"name\"]"; ?></p>

	<?php // array_push($empty, "message"); ?>
	<p><?php if (!$empty) { echo "Empty!!"; } else { echo $empty[0]; } ?></p>
 
</body>
</html>