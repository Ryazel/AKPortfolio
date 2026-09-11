<?php 
 class account{
    public $id;
    public $name;
    public $email;
    public $password;

    public function details1(){
       return "Public Info: " . $this->name . "<br>" . $this->email . "<br>";
    }

    public function details2(){
       return "Hidden Info: ". $this->password . "<br>";
    }
 }

 $accountinfo1 = new account();
 $accountinfo1->id = 0;
 $accountinfo1->name = "Admin";
 $accountinfo1->email = "ryazel@proton.me";
 $accountinfo1->password = "Zweihander";
 echo $accountinfo1->details1();
 echo $accountinfo1->details2();
 echo "<br>";

 $accountinfo2 = new account();
 $accountinfo2->id = 1;
 $accountinfo2->name = "Anthropic";
 $accountinfo2->email = "Anthropic@Claude.ai";
 $accountinfo2->password = "AnthropicMythicClaude";
 echo $accountinfo2->details1();
 echo $accountinfo2->details2();
 echo "<br>";

 $accountinfo3 = new account();
 $accountinfo3->id = 2;
 $accountinfo3->name = "Lephix";
 $accountinfo3->email = "Lephix@Steam.org";
 $accountinfo3->password = "Terraria&Palworld&DMC5";
 echo $accountinfo3->details1();
 echo $accountinfo3->details2();
 echo "<br>";
?>