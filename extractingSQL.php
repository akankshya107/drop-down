<?php
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
// gettinng state from user
$state = $_POST('state');							

//checking if $state is valid

//sql query for selecting cities from database
$sql_q = "select city from branch where state = $state";		

$result = mysql_query($sql_q, $connection);
//column name in sql table
$column= '';
$i=0;
// storing names of cities in an array
while ($row = mysql_fetch_array($result)){
	
$city_array[$i]= $row[$column]	;
$i++;	
}



?>