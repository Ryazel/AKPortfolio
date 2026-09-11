<?php 

class product{
    public string $productname;
    public int $quantity;
    public int $price;

    public function getinfo(){
        return "Product Name: {$this->productname} - Prices: " . number_format($this->price,0,',','.') . "$"
        ." - Quantity: {$this->quantity}";

    }

    public function __destruct(){
        echo "This Product: '{$this->productname}' DELETED from Existence.";
        echo "<br>";

        echo "Executed Last" . "<br>";
    }

    public function __construct(string $inputname, int $inputprice, int $inputquantity){
        $this->productname = $inputname;
        $this->quantity = $inputquantity;
        $this->price = $inputprice;
        echo "Object Product '{$this->productname}' Successfully Created.";
        echo "<br>";

        echo "Executed First" . "<br>";
    }
        
}

$laptop = new product("ASUS ROG","1200","1");
$crypto = new product("BITCOIN","10000000","1");
$Astrites = new product("Astrites","1","60");
echo "<br>";

echo $laptop->getinfo()."<br>";
echo $crypto->getinfo()."<br>";
echo $Astrites->getinfo()."<br>";

echo "<br>"."--DONE--"."<br>"."<br>";
echo "Nope, Get DELETED!". "<br>";
?>