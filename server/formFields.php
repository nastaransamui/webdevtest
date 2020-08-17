<?php
	$dummyFields = 	[
						['name' => 'name', 'label' => 'first name'],
						['name' => 'surname', 'label' => 'surname'],
						['name' => 'email', 'label' => 'email address'],
						['name' => 'telephone', 'label' => 'telephone']
					];
	
	echo json_encode($dummyFields);