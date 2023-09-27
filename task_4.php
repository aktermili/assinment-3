<?php
$studentGrades=[
 'student_1' =>['Math'=>80, 'English'=>70, 'Science'=>90],
 'student_2' =>['Math'=>50, 'English'=>60, 'Science'=>40],
 'student_3' =>['Math'=>55, 'English'=>80, 'Science'=>75],
];
function averageGrade($studentGrades){
    $averages=[];
    foreach($studentGrades as $value){
        $averages[]=array_sum($value)/count($value);
       
    }
    return $averages;
}
        
$averages=averageGrade($studentGrades);
 foreach($averages as $key=>$value){
    $rollNumber=$key+1;
    if ($value<=100 && $value>=80){
        echo"student{$rollNumber} averagemarks {$value} grade:A+ \n\n";

    }elseif($value<80 && $value>=70){
        echo"student{$rollNumber} averagemarks {$value} grade:A \n\n";

    }elseif($value<70 && $value>=60){
        echo"student{$rollNumber} averagemarks {$value} grade:A- \n\n";

    }elseif($value<60 && $value>=50){
        echo"student{$rollNumber} averagemarks {$value} grade:B\n\n";
    }elseif($value<50 && $value>=40){
        echo"student{$rollNumber} averagemarks {$value} grade:C \n\n";
    }elseif($value<40 && $value>=33){
        echo"student{$rollNumber} averagemarks {$value} grade:D \n\n";
    }elseif($value<33 && $value>0){
        echo"student{$rollNumber} averagemarks {$value} grade:F \n\n";
    }else{
        echo" another result";
    }
}
?>