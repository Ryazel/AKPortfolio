<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
    <link rel="stylesheet" href="examstyle.css">
</head>
<body>
    <div id="div1">
        <h1 id="processtitle">Results</h1>
        <div id="div2">
 <?php
 class student {
    private $names;
    private $subjects;
    private $scores;

    public function setName($names){
       $this->names = $names;
    }
    public function setSubject($subjects){
       $this->subjects = $subjects;
    }
    public function setScores($scores){
       $this->scores = $scores;

    if ($scores >=0 && $scores <=100){
        $this->scores = $scores;
    } else {
        $this->scores ="INVALID INPUT <br>" . "<i>Scores must be around 0-100 range</i>";
    }
    }
    public function requirement(){
      if ($this->scores >= 70 && $this->scores <= 100) {
          return "Status: Passed <br> <hr>";
      } elseif ($this->scores >= 0 && $this->scores < 70) {
          return "Status: Not Passed <br> <hr>";
      } else {
          return "Status: Undecided <br> <hr>";
      }
    }
    public function getName(){
       return $this->names;
    }
    public function getSubject(){
       return $this->subjects;
    }
    public function getScores(){
       return $this->scores;
    }
}

$names = $_POST['names'];
$subjects = $_POST['subject'];
$scores = $_POST['score'];

$person1 = new student();
$person1->setName($names);
$person1->setSubject($subjects);
$person1->setScores($scores);

?>
            <div id="div3">
            <hr>
            <p>Name: <?php echo "<b> {$person1->getName()} </b>"?></p>
            <p>Subject: <?php echo "<b> {$person1->getSubject()} </b>"?></p>
            <p>Score: <?php echo "<b> {$person1->getScores()} </b>"?></p>
            <p><?php echo "<b> {$person1->requirement()} </b>"?></p>
            </div>
        </div>
        <a href="index.html"><P id="back">GO BACK</P></a>
    </div>
</body>
</html>