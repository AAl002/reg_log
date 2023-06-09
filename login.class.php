<?php 
class LoginUser{
	private $login;
	private $password;
	public $error;
	public $success;
	private $storage = "data/data.json";
	private $stored_users;
	


	public function __construct($login, $password){
		$this->login = $login;
		$this->password = $password;
		$this->stored_users = json_decode(file_get_contents($this->storage), true);
		$this->log();
	}


	private function log(){
	
		foreach ($this->stored_users as $user) {
			if($user['login'] == $this->login){
				if(password_verify($this->password, $user['password'])){
					session_start();
					$_SESSION['user'] = $user['name'];
					header("location: account.php"); exit();
				}
			}
		}
		return $this->error = "Неверный логин или пароль";
	}

}