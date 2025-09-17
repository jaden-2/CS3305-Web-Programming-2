<?php
// Question 1: Basic Arithemetic operations

//A
function average($score1, $score2, $score3):float {
    return ($score1+$score2 + $score3)/ 3;
}

//B
function score($score1, $score2, $score3){
    return (($score1+$score2 + $score3)/300 * 100). "%";
}

// C
$students_scores = [
    "Math" => 60,
    "English" => 90,
    "Chemistry" => 60,
    "Phy" => 30,
    "Bio" => 70
];

$keys = array_keys($students_scores);

$fail_count = 0;

for ($i=0; $i < count($keys); $i++) { 
    
    if($students_scores[$keys[$i]] < 50){
        $fail_count++;
    }

}

if($fail_count > 2){
    echo "Dtudent is placed on academic probation";
}

// Conditional Logic and Loops


function average2(array $scores){
    return array_sum($scores)/count($scores);  
}
$students = [
    "John" => [40, 50, 90],
    "Chris" => [70, 90, 100],
    "Jane" => [ 100, 95, 80]
];

$keys = array_keys($students);

function assess_grade(string $student, array $scores){
     $average = average2($scores);

    // A
    if($average > 50){
        echo "{$student} Passed \n";
    }else{
       echo "{$student} Failed \n"; 
    }
    //B
    if($average >= 90 && max($scores) >= 95){
        echo "{$student} qualifies for honor rolll \n";
    }

}
//Putting it together
for ($i=0; $i < count($keys); $i++){
  assess_grade($keys[$i], $students[$keys[$i]]);
}


// C 
$students = array("John", "Jane", "Precious", "Albert", "Jacob");

for($index=0; $index < count($students); $index++){
    echo "Enter the math, english, and phycis scores of {$students[$index]}: ";

    fscanf(STDIN, "%d %d %d", $score1, $score2, $score3);
    assess_grade($students[$index], array($score1, $score2, $score3));

}
?>