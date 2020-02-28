<?php

class Insert extends Controller {

    public function index() {	
	$this->view('insert/index');
	die;
    }
	
	public function insertCourse() {	
	$department = $_REQUEST['department'];
    $program = $_REQUEST['program'];
	$courseName = $_REQUEST['coursename'];
    $courseId = $_REQUEST['courseid'];
	$insert=$this->model('InsertCourse');
	$result=$insert->insert($courseId,$courseName,$program,$department);
	$this->view('insert/displayResult',['result'=>$result]);
	die;
    }

}
