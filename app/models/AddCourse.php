<?php
class AddCourse {


    public function __construct() {
        
    }
	

	
	public function save($courseid,$courseName,$program,$department){
		 try{

		$db = db_connect();
			  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $statement = $db->prepare("INSERT INTO courses (courseid, coursename, department, program) VALUES (:courseid,:courseName,:program,:department);");
		$statement->bindParam(':courseid', $courseid,PDO::PARAM_STR);
		$statement->bindParam(':courseName', $courseName,PDO::PARAM_STR);
	   $statement->bindParam(':program', $program,PDO::PARAM_STR);
		$statement->bindParam(':department', $department,PDO::PARAM_STR);
        $statement->execute();
			
	   return "Suceesfully Added";		 
		 }
		catch (PDOException $e) {

 		return "Unable to add";
 	}
	
	}
}
	
?>