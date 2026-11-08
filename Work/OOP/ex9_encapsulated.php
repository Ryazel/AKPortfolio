<?php

class archive{
   private $group;
   private $format;
   private $encryption;
   private $score;
   private $address;
   private $company;
   
   public function __construct($group,$format,$encryption,$score,$address,$company){
      $this->group = $group;
      $this->format = $format;
      $this->encryption = $encryption;
      $this->address = $address;
      $this->company = $company;

      if ($score >= 0 && $score <= 100){
        $this->score = $score;
      } else {
        $this->score = 0;
      }
   }

   public function setGroupName($group){
    $this->group = $group;
   }
   public function setFormat($format){
    $this->format = $format;
   }
   public function setEncryption($encryption){
    $this->encryption = $encryption;
   }
   public function setScore($score){
    $this->score = $score;

    if ($score >=0 && $score <=100){
        $this->score = $score;
    } else {
        $this->score = "Score cannot exceed 100 points or bellow 0 points";
    }
   }
   public function setAddress($address){
    $this->address = $address;
   }

   public function setCompany($company){
    $this->company = $company;
   }

   public function getGroupInfo(){
    return "Data group: " . $this->group."<br>";
   }

   public function getFormatInfo(){
    return "Format: " . $this->format . "<br>";
   }

   public function getEncryptionInfo(){
    return "Encryption method: ". $this->encryption . "<br>";
   }
   public function getScoreInfo(){
    return "Score value: " . $this->score . "<br>";
   }
   public function getAddressInfo(){
    return "Address: " . $this->address . "<br>";
   }
   public function getCompanyInfo(){
    return "Company: " . $this->company . "<br>";
   }
   public function requirement(){
    if ($this->score >= 70){
        return "Status: Passed <br> <hr> <br>";
    } else {
        return "Status: Not Passed <br> <hr> <br>";
    }
   }
}

$archive1 = new archive("L.Corp",".rar","BLAKE3-HASH",230,"Mainland China","Lobotomy Corporation"); 
$archive2 = new archive("N.Corp",".7z","SHA-248",77,"Russia","Nail inc");
$student_tex = new archive("Arizhon Workshop inc",".zipx","SHA-248",79,"SEA","Texmaco");
$student_tex->setGroupName("Agartha Workshop inc");
$student_tex->setScore("103");
$student_tex->setAddress("Cambodia");

echo "<hr>";
echo $archive1->getGroupInfo();
echo $archive1->getFormatInfo();
echo $archive1->getEncryptionInfo();
echo $archive1->getScoreInfo();
echo $archive1->getAddressInfo();
echo $archive1->getCompanyInfo();
echo $archive1->requirement();

echo $archive2->getGroupInfo();
echo $archive2->getFormatInfo();
echo $archive2->getScoreInfo();
echo $archive2->getEncryptionInfo();
echo $archive2->getAddressInfo();
echo $archive2->getCompanyInfo();
echo $archive2->requirement();

echo $student_tex->getGroupInfo();
echo $student_tex->getFormatInfo();
echo $student_tex->getScoreInfo();
echo $student_tex->getEncryptionInfo();
echo $student_tex->getAddressInfo();
echo $student_tex->getCompanyInfo();
echo $student_tex->requirement();
?>