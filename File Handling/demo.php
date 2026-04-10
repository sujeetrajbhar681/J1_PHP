<?php

$demo="file.txt";

function reading($demo){       //Read file
    if(file_exists($demo)){
        $data=file_get_contents($demo);
        echo $data;
    }
}

//reading($demo);

function writing($demo,$id,$name,$sal){  //Write file
    $data="$id,$name,$sal";
    file_put_contents($demo, array($id,$name,$sal));
    echo $data;
}

//writing($demo,1,"tom",12);

function append($demo,$id,$name,$sal){   //Append file
    $data="$id,$name,$sal";
    file_put_contents($demo, array($id,$name,$sal), FILE_APPEND);
    echo $data;
}

//append($demo, 2,"jerry", 24);

function delete($demo){  //Delete file
    if(file_exists($demo)){
        unlink($demo);
        echo "file deleted";
    }else{
        echo "file not deleted";
    }
}

//delete($demo);
?>