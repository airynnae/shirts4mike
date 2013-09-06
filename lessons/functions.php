<?php 

	function mimic_count($array) {
		$count = 0;
		foreach ($array as $element) {
			$count = $count + 1;
		}
		return $count;
	}

	$flavors = array("Vanilla", "Strawberry", "Raspberry", "Watermelon");
	$count = mimic_count($flavors);
	echo $count;
 ?>