<?php
 
 class circle{
    public const PI = 3.14;

    public int $length = 69;
 }

 echo circle::PI;

 $circle1 = new circle();
 $circle1->length = 77;
 echo "<br> Changed Length Value: ".$circle1->length;

 $circle2 = new circle();
 $circle2->length;
 echo "<br> Real Length Value: ".$circle2->length;

?>
