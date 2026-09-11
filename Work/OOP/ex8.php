<?php
 class sendingemail{
    public $receiver;
    private $encryptedmessage;
    public function __construct($email){
        $this->receiver = $email;
 }
 public function send($message){
    $this->encryptedmessage = $this->formated($message);
    return "Message has been send to: {$this->receiver}: <br> {$this->encryptedmessage}";
 }

 private function formated($text){
    return "===Official Message=== <br>" .strtoupper($text) ."<br>=====";
 }
 
}
$email = new sendingemail("ProtonUser69@proton.me");
echo $email->send("https://github.com/Ryazel/AKPortfolio/tree/main/Work/OOP");

?>