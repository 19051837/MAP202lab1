<?php
class InsertCourse {


    public function __construct() {
        
    }
	

	
	public function insert($courseid,$courseName,$program,$department){
	try{
	$db = db_connect();
    $statement = $db->prepare("INSERT INTO courses (courseid, coursename, department, program) VALUES (:courseid,:courseName,:program,:department);");
	$statement->bindParam(':courseid', $courseid,PDO::PARAM_STR);
	$statement->bindParam(':courseName', $courseName,PDO::PARAM_STR);
	$statement->bindParam(':program', $program,PDO::PARAM_STR);
	$statement->bindParam(':department', $department,PDO::PARAM_STR);
    $statement->execute();
	return $courseName." Added Sucessfully";		 
	}
	catch (PDOException $e) {
	return "We are unable to handle this request Please check with Administrator";
 	}
	}
	
}
	
?>