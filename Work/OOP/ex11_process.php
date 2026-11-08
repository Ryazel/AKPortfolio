<?php
class Account {
    public $names;
    public $number;
    public $pass;

    public function setName($names){
        $this->names = $names;
    }
    public function setNumber($number){
        $this->number = $number;
    }
    public function setPass($pass){
        $this->pass = $pass;
    }
    public function getName(){
        return $this->names;
    }
    public function getNumber(){
        return $this->number;
    }
    public function getPass(){
        return $this->pass;
    }
}

$names = $_POST['names'];
$number = $_POST['number'];
$pass = $_POST['pass'];

$person1 = new Account();
$person1->names = $names;
$person1->number = $number;
$person1->setPass($pass);


echo "Name: " . $person1->names = $names . "<br>";
echo "Number: " . $person1->number = $number . "<br>";
echo "Password: " . $person1->getPass() . "<br>";
?>