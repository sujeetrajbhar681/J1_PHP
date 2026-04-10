<?php
class emp{
    public $id;
   public $name;
    public $sal;

    public function __construct($id,$name,$sal){
        $this->id=$id;
        $this->name=$name;
        $this->sal=$sal;
    }

    function displayInfo(){
       echo $this->id;
       echo $this->name;
       echo $this->sal;
    }
}

$ob=new emp(1 ," hey ", 10);
$ob->displayInfo();

?>