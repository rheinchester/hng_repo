<?php
	/**
	SImple php script file.
	*/

	include_once ('database.php');
	include_once ('student.php');
	
	$mat_no='U2014/5575017';
	$first_name = "Franklyn";
	$last_name = "Thomas";
	
	$sql = "INSERT INTO students (mat_no,first_name,last_name) 
				VALUES ('$mat_no','$first_name','$last_name')";
	//qyery string to insert into the students table in the database
	$database->connection->query($sql);
	//running the insert query string constructed erlier on 


	$sql = "UPDATE students SET status = '0' WHERE mat_no = 'U2014/5575017'";//
	//a query string to update a record in the students table in the database to change the value of the status to 0 where mat_no is ''
	$database->connection->query($sql);
	//running the update query string constructed erlier on 
	
	$sql = "SELECT * FROM students";
	//a query string to fetch all record in the students table

	$result = $database->connection->query($sql);

	$results = $result->fetchAll(PDO::FETCH_CLASS,'Students');

	foreach ($results as $obj){
		echo $obj->mat_no.' = > '.$obj->get_fullname().' = > '.$obj->status.'<br>';
	}
?>