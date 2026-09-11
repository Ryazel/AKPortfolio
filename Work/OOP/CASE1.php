<?php 

class person{
    public $name;
    public $class;
    public $schedule;
    public $bills;

    public $note;

    public $guardian;
    public $gnote;

    public function details(){
        echo "Name: ";
        echo $this->name . "<br>";
        echo "Class: ";
        echo $this->class ."<br>";
        echo "Schedule: ";
        echo $this->schedule ."<br>";
        echo "Total Payment: ";
        echo $this->bills ."<br>" . "<br>";
    }

    public function teachersnote(){
        echo "Teachers Note for " . $this->name . " : ";
        echo $this->note . "<br>";
    }

    public function guardian(){
        echo "Guardian " . $this->guardian . $this->gnote . "<br>" . "<br>"; 
    }
}

$person1 = new person();
$person1->name = "Scar";
$person1->class = "Ballet";
$person1->schedule = "Fri - Sat";
$person1->bills = "5.000.000";
$person1->note = "you did good at doing some difficult moves";
$person1->details();
$person1->teachersnote();

$person2 = new person();
$person2->name = "Bella";
$person2->class = "Ballet";
$person2->schedule = "Fri - Sat";
$person2->bills = "5.000.000";
$person2->note = "need improvement in spining moves";
$person2->details();
$person2->teachersnote();


$person3 = new person();
$person3->name = "Olga";
$person3->class = "Ballet";
$person3->schedule = "Fri - Sat";
$person3->bills = "4.600.600";
$person3->note = "you did pretty good, you still have to pay the class fees";
$person3->guardian = "Ms Hilde";
$person3->gnote = "Please Pay the remaining fees";
$person3->details();
$person3->teachersnote();
$person3->guardian();

$person4 = new person();
$person4->name = "Alvin";
$person4->class = "Ballet";
$person4->schedule = "Fri - Sat";
$person4->bills = "2.300.000";
$person4->note = "Alvin please do your videos homework and make sure you pay next months bills";
$person4->guardian = "Mr Akvin";
$person4->gnote = "Alvin did not perform greatly, and please pay the remaining fees";
$person4->details();
$person4->teachersnote();
$person4->guardian();

?>