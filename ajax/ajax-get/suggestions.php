<?php
	$existingNames = array("Daniel", "Dennis","Barry","Jane");
	
	if (isset($_POST['suggestion'])){
		$name = $_POST['suggestion'];
		
		foreach($existingNames as $existingName){
			if (!empty($name)){
				if(strpos($existingName,$name) !== false){
					echo $existingName;
					echo '<br>';
				}
			}
		}
	}
?>