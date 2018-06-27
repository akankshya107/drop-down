<?php
#the values for the dropdown box
$types = array();
while(($row =  mysql_fetch_assoc($result))) {
	$types[] = $row['type'];
}
$form['type_options'] = array(
	'#type' =>'value',
	'#value' => $types
);

$form['type'] = array(
	'#title' => t('State'),
	'#type' => 'select',
	'#description' => "Select the state",
	'#options' => $form['type_options']['#value']
);
