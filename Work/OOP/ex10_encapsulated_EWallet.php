<?php
 class EWallet{
    private $username;
    private $number;
    private $balance;
    public function __construct($username, $number, $balance){
        $this->username = $username;
        $this->number = $number;
        $this->balance = $balance;
    }
    public function topup($amount){
        if ($amount > 0){
            $this->balance += $amount;
            echo "TopUp Succesful <br>";
        } else {
            echo "Invalid TopUp amount. <br>";
        }
    }
    public function payment($amount){
        if ($amount <= 0){
          echo "Payment amount is not valid. <br>";  
        } elseif ($amount > $this->balance) {
            echo "Balance is not enough";
        } else {
           $this->balance -= $amount;
           echo "Payment Successful <br>";
        }
    }
    public function duplicate($amount){
        if ($amount <= 0){
           echo "You must have more than 0 balance";
        } else {
            $this->balance *= $amount;
            echo "Duplication Successful <br>";
        }
    }
    public function showname(){
        return $this->username;
    }
    public function shownumber(){
        return $this->number;
    }
    public function checkbalance(){
        return $this->balance;
    }
 }

 $profile1 = new EWallet("Patrizion","SA91108134",100000);

 echo "Name : " . $profile1->showname()."<br>";
 echo "Number : " . $profile1->shownumber()."<br>";
 echo "Starting Balance : " . $profile1->checkbalance()."<br>"."<br>";

 $profile1->topup(200000);
 echo "After TopUp: " . $profile1->checkbalance(). "<br>"."<br>";

 $profile1->payment(50000);
 echo "After Payment: ". $profile1->checkbalance()."<br>"."<br>";

 $profile1->duplicate(999);
 echo "After Illegal Duplicating: ". $profile1->checkbalance(). "<br>";

?>