<?php

class Insert extends Controller {

    public function index() {	
		//echo "insert";
	    $this->view('insert/index');
	    die;
    }
	
	 public function save() {	
		 
	    $department = $_REQUEST['department'];
        $program = $_REQUEST['program'];
		$courseName = $_REQUEST['coursename'];
        $courseid = $_REQUEST['courseid'];
		$insert=$this->model('AddCourse');
		$result=$insert->save($courseid,$courseName,$program,$department);
		 		$this->view('insert/message',['message'=>$result]);
	    die;
    }

}
