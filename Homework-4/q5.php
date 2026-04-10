<?php
interface CourseActions {
    public function enroll();
    public function drop();
    public function completeCourse();
}

// Online Course
class OnlineCourse implements CourseActions {
    public function enroll(){
        echo "Enrolled in Online Course<br>";
    }
    public function drop(){
        echo "Dropped Online Course<br>";
    }
    public function completeCourse(){
        echo "Completed Online Course<br>";
    }
}

// In-Person Course
class InPersonCourse implements CourseActions {
    public function enroll(){
        echo "Enrolled in In-Person Course<br>";
    }
    public function drop(){
        echo "Dropped In-Person Course<br>";
    }
    public function completeCourse(){
        echo "Completed In-Person Course<br>";
    }
}

// Objects
$online = new OnlineCourse();
$online->enroll();

$offline = new InPersonCourse();
$offline->completeCourse();
?>