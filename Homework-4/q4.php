<?php
abstract class StudentRecord {
    abstract function calculateGrade();
}

// Undergraduate
class UndergraduateStudent extends StudentRecord {
    public $assignments;
    public $exams;

    function __construct($a, $e){
        $this->assignments = $a;
        $this->exams = $e;
    }

    function calculateGrade(){
        return ($this->assignments + $this->exams) / 2;
    }
}

// Graduate
class GraduateStudent extends StudentRecord {
    public $research;
    public $exams;

    function __construct($r, $e){
        $this->research = $r;
        $this->exams = $e;
    }

    function calculateGrade(){
        return ($this->research + $this->exams) / 2;
    }
}

// Objects
$u = new UndergraduateStudent(80, 90);
echo "UG Grade: " . $u->calculateGrade() . "<br>";

$g = new GraduateStudent(85, 95);
echo "PG Grade: " . $g->calculateGrade();
?>