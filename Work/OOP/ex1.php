<?php
class Player {
    public $username;
    public $health;
    public $defense;
    public $stamina;
    public $weapons;

    public function action() {
        echo "Player Name: ";
        echo $this->username . "<br>";
        echo "Health: ";
        echo $this->health . "<br>";
        echo "Defense: ";
        echo $this->defense . "<br>";
        echo "Stamina: "; 
        echo $this->stamina . "<br>";
        echo "Weapon: "; 
        echo $this->weapons . "<br>". "<br>" . "-VS-" . "<br>" . "<br>";
    }
}

$Player1 = new Player();
$Player1->username = "Azafure";
$Player1->health = "2000";
$Player1->defense = "300";
$Player1->stamina = "100";
$Player1->weapons = "Zweihander";
$Player1->action();

class Monsters {
    public $monstername;
    public $monhealth;
    public $monattack;
    public $mondefense;
    public $difficulty;

    public function moninfo() {
        echo "Monster Name: ";
        echo $this->monstername . "<br>";
        echo "Health: "; 
        echo $this->monhealth . "<br>";
        echo "Defense: ";
        echo $this->mondefense . "<br>";
        echo "Attack: "; 
        echo $this->monattack . "<br>";
        echo "Difficulty: "; 
        echo $this->difficulty . "<br>";
    }
}

$monster1 = new Monsters();
$monster1->monstername = "Astegon";
$monster1->monhealth = "20000";
$monster1->monattack = "500";
$monster1->mondefense = "2000";
$monster1->difficulty = "hard";
$monster1->moninfo();
