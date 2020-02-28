<?php
	class Courses extends Controller {

    public function index($department=null,$program=null) {	
   		$course=$this->model('Course');
		
		if(isset($department)) {
			
			if(isset($program))
			{
			    $program=rawurldecode($program);
				$department=rawurldecode($department);
				$courses=$course->getAllCourses($program);
			 	$this->view('courses/displayCourses',['program'=> $program,'department'=>$department,'courses'=>$courses]);
				die;
			}
			else
			{
				$department=rawurldecode($department);
				$programs=$course->getAllPrograms($department);
			 	$this->view('courses/displayPrograms',['programs'=> $programs,'department'=>$department]);
				die;
			}
		}
		
		
		$departments=$course->getAllDepartments();

		$this->view('courses/index',['departments'=>$departments]);
		die;  
    }
}

?>