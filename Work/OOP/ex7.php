<?php 
 class account{
    public string $username = "Proton";
    private string $password = "Secret404";
    protected string $email = "ProtonUser69@proton.me";

    public function accountcheck(){
        return "Pass: ". $this->password;
    }

 }
        //private need $this because private can only be accessed in the same class
        //public can be accessed normaly
  
 $user1 = new account();
 echo "Call Private Pass Method <br>";
 echo $user1->accountcheck() . "<br> <br>";
 echo "Call Private Pass Directly <br> <br>";
 echo $user1->$password . "<br> <br>";
 echo "Call Public Username <br>";
 echo "Username: ". $user1->username . "<br> <br>";
 echo "Call Private Pass Directly2 <br>";
 echo "Pass: ". $user1->password . "<br> <br>";

?>