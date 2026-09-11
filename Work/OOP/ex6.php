<?php 
 
 class User{
    public const ROLE_DEFAULT = "Student";
    public static int $usertotal = 0;
    public string $username;
    public function __construct(string $inputname){
        $this->username = $inputname;
        self::$usertotal++;
    }
    public function getProfile(){
        return "Name: " .$this->username. " | Role: ". self::ROLE_DEFAULT;
    }
    public static function getUserTotal(){
        return "Total User Right Now: ". self::$usertotal;
    }
 }

 echo "Default Role: " .User::ROLE_DEFAULT."<br>";
 echo User::getUserTotal(). "<br>";
 echo "<hr>";

 $user1 = new User("Bellanoir");
 $user2 = new User("Astrivagant");
 $user3 = new User("Shaoloong");

 echo $user1->getProfile()."<br>";
 echo "<hr>";
 
 echo User::getUserTotal();

?> 