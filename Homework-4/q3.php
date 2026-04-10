<?php
class Student {
    public $id;
    public $name;
    public $grade;

    function __construct($id, $name, $grade){
        $this->id = $id;
        $this->name = $name;
        $this->grade = $grade;
    }

    function displayDetails(){
        echo "ID: $this->id <br>";
        echo "Name: $this->name <br>";
        echo "Grade: $this->grade <br>";
    }
}

// Object
$s1 = new Student(1, "Rahul", "A");
$s1->displayDetails();
?>