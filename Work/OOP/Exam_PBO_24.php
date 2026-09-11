<?php
 class Store{
    public const STORE_CODE = "THRIFT-BDG";
    public static $itemsold = 0;
    public string $itemname;
    public string $category;
    public int $originalprice;
    public int $discount = 20000;

    public $finalprices;

    public function __construct(string $inputname, string $inputcategory, int $inputprice){
        $this->itemname = $inputname;
        $this->category = $inputcategory;
        $this->originalprice = $inputprice;
        self::$itemsold++;
        echo "Product '{$this->itemname}' Added.";
        echo "<br>";
        echo "<br>";
    }

    public function finalprice(){
        return $this->originalprice - $this->discount;

    }

    public function struckprint(){
        return"<hr>"."Product Name: {$this->itemname} - Original Prices: " . number_format($this->originalprice,0,',','.') . "$"
        ." - Category: {$this->category} -". "<br>" . " Payment After Discount: ";

    }

    public static function gettotalsold(){
        return "<hr>"."Total Item Sold: ".self::$itemsold."<hr>";
    }

    public function __destruct(){
        echo "<br>"."This Product: '{$this->itemname}' Successfully Printed.";
        echo "<br>";
    }



 }

 echo "Store : ".Store::STORE_CODE . "<br>";
 echo "<hr>";

 $user1 = new Store("JetDragon","Figurine","20000");
 $user2 = new Store("Wood","Materials","25600");

 
 echo $user1->struckprint(). $user1->finalprice() . "<br>". "<br>";
 echo $user2->struckprint(). $user2->finalprice() . "<br>". "<br>";

 echo $user1->gettotalsold()."<br>";




?> 