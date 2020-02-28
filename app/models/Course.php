<?php

class Course {


    public function __construct() {
        
    }
	
	public function getAllDepartments()
{
$db=db_connect();
$statement =$db->prepare ("select distinct(department) from  courses");
$statement->execute();
$departments=$statement->fetchAll(PDO::FETCH_ASSOC);
return $departments;
}
	
	public function getAllPrograms($department)
{
$db=db_connect();
$statement =$db->prepare ("select distinct(program) from  courses where department=:department");
$statement->bindParam(':department', $department);
$statement->execute();
$programs=$statement->fetchAll(PDO::FETCH_ASSOC);
return $programs;
}
	
	public function getAllCourses($program)
{
$db=db_connect();
$statement =$db->prepare ("select * from courses where program=:program");
$statement->bindParam(':program', $program);
$statement->execute();
$courses=$statement->fetchAll(PDO::FETCH_ASSOC);
return $courses;
}
	
}