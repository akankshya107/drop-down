<?php
#the values for the dropdown box
//address of host
$host= "";	
//username sql					 
$username= "";
//password of sql 								
$password= ""; 								
$connection - mysql_connect($host,$username,$password)
or die{mysql_error()} ;

//name of database used
$db_name = "";	
//choosing databasese							
mysql_select_db(db_name,$connection);
//name of the tale to be used
$table_name = "";
//Select states from dbs
$sql_q = "select state from branch;		

$result = mysql_query($sql_q, $connection);

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

