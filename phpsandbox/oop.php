<?php 
	class Person{
		private $name;
		private $email;
		private static $ageLimit = 40;

		public function __construct($name, $email){
			$this->name = $name;
			$this->email = $email;
			echo __CLASS__.' created<br>';
		}

		public function __destruct(){
			echo __CLASS__.' destroyed<br>';
		}

		public function getName(){
			return $this->name.'<br>';
		}

		public function setName($name){
			$this->name = $name;
		}

		public function getEmail(){
			return $this->email.'<br>';
		}

		public function setEmail($email){
			$this->email = $email;
		}

		public static function getAgeLimit(){
			return self::$ageLimit;
		}
	}

/*	
	#Static props and Methods
	echo Person::$ageLimit;
	echo Person::getAgeLimit();

	$person2 = new Person;
	$person2->setName('Jhon');

	$person2 = new Person('Jhon Doe', 'jDoe@gmail.com');
 	echo $person2->getName();
 */

 	class Costumer extends Person{
 		private $balance;

 		public function __construct($name, $email, $balance){
 			parent::__construct($name, $email);
 			$this->balance = $balance;
 		}

 		public function getBalance(){
 			return $this->balance.' <br>';
 		}

 		public function setBalance($balance){
 			$this->balance = $balance;
 		}
 	}

 	$costumer1 = new Costumer('Jhon Doe', 'jDoe@gmail.com', 311);

 	echo $costumer1->getName();
 	echo $costumer1->getBalance();


?>