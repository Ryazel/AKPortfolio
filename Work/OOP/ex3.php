<?php
class bankbalance{
  public string $ownername;
  public int $balance = 0;
  
  public function balance(int $amount){
    $this->balance += $amount;
  }

  public function infocheck(){
    return "Owner: " . $this->ownername . "<br>" . " Balance: " . $this->balance . "$";
  }
}

$firstbalance = new bankbalance();
$firstbalance->ownername = "andy";

$secondbalance = new bankbalance();
$secondbalance->ownername = "sophia";

$firstbalance->balance(5000000);
echo $firstbalance->infocheck();
echo "<br>"."<br>";

$secondbalance->balance(1000000);
echo $secondbalance->infocheck();
echo "<br>"."<br>";
  ?>

