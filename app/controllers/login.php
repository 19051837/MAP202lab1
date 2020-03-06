<?php class Login extends Controller {
	public function index() {
		$this->view('login/index');
	}
	public function verify() {
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$user=$this->model('User');
		$user->authenticate($username, $password);
	}
	public function signUp() {
		$this->view('login/signup');
	}
	public function validateUser() {
		$username=$_REQUEST['username'];
		$password=$_REQUEST['password'];
		$uppercase=preg_match('@[A-Z]@', $password);
		$lowercase=preg_match('@[a-z]@', $password);
		$number=preg_match('@[0-9]@', $password);
		$specialChars=preg_match('@[^\w]@', $password);
		if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
			$this->view('login/signup', ['isValidUser'=>"No", 'displayMessage'=>'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character']);
		}
		else if(filter_var($username,
		FILTER_VALIDATE_EMAIL)) {
			$this->view('login/signup', ['isValidUser'=>"No", 'displayMessage'=>'Username should not be Email id']);
		}
		else {
			$password=password_hash($password, PASSWORD_DEFAULT);
			$user=$this->model('User');
			$validUser=$user->registerUser($username, $password);
			if($validUser) {
				$this->view('login/signup', ['isValidUser'=>"Yes"]);
			}
			else {
				$this->view('login/signup', ['isValidUser'=>"No", 'displayMessage'=>'This Username Already Exists']);
			}
		}
	}
}