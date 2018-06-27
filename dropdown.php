<?php
#the values for the dropdown box
/**
 * @file
 * Contains \ircs\drop-down\Form\DropDownController.
 */
namespace ircs\dropdown\Form;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

//address of host
$host= "localhost";
//username sql
$username= "admin";
//password of sql
$password= "ircsrocks@420";
$connection - mysql_connect($host,$username,$password)
or die{mysql_error()} ;

//name of database used
$db_name = "ircs";
//choosing databasese
mysql_select_db(db_name,$connection);
//name of the tale to be used
$table_name = "";
//Select states from dbs
$sql_q1 = "select state from $table_name";

$result1 = mysql_query($sql_q1, $connection);

$types = array();
while(($row =  mysql_fetch_assoc($result1))) {
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

// Check if the form is submitted
if ( isset( $_POST['submit'] ) ) {
	$state = $_REQUEST['state'];
}

//sql query for selecting cities from database
$sql_q2 = "select city from $table_name where state = $state";		

$result2 = mysql_query($sql_q2, $connection);
$types = array();
while(($row =  mysql_fetch_assoc($result1))) {
	$types[] = $row['type'];
}

$form['type_options'] = array(
	'#type' =>'value',
	'#value' => $types
);

$form['type'] = array(
	'#title' => t('City'),
	'#type' => 'select',
	'#description' => "Select the city",
	'#options' => $form['type_options']['#value']
);
