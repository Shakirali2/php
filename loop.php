<!-- while loop -->

<?php

$i = 0;
while($i <= 10){
    echo "Hello World" "<br/>";
    $i++;
}
echo "Loops End"

$i = 10;

while($i > 0){ 
    echo $i.<br/>;
    $i--;
}
?>

<?php

$i = 0;
$num = 2;
while($i <= 10){
    echo $num." x ".$i." = ".$num * $i."<br/>";
    $i++;
}

?>
//==========================================//
<!-- Do while loop -->
<?php

$i = 1;
while($i <1){
    echo $i."<br/>";
    $i++;
}
echo "__________________<br/>";

$j = 1;
do{
    echo $j."<br/>";
    $j++;
}while($j <1);

?>
//====================================================//
<!-- for loop  -->
<?php

for($i = 0; $i <= 10; $i++){
    echo "Hello World\t";
    echo $i."<br/>";
}

for($i = 10; $i >= 0; $i--){
    echo $i."<br/>";
}
?>

//============================================//
<!-- foreach loop -->
<?php

$colors = array("red", "green", "blue");

foreach($colors as $value){
    echo $value."<br/>";
} --

?>

<?php
$arr = [
    "HTML" => 2500,
    "CSS" => 3000,
    "PHP" => 4000,
    "JS" => 5000,
    "JAVA" => 6000,
]

echo "pre";
print_r($arr);
echo "post";

/*foreach($arr as $key => $value){ 
    echo $key." : ".$value."<br/>";
}
*/
foreach($arr as $course => $fees) {
    echo "The fees of $course is Rs. $fees <br/>";
}
?>

<!-- Break statement -->

<?php

$i = 0; 
while($i <= 10){
    echo $i. "<br/>";
    if($i == 5){
        break;
    }
    $i++;
}
echo "Loops End"
?>

<?php
$sum = 0;
$i = 0; 
while($i <= 10){
    $sum += $i;
    if($sum > 10){
        break;
    }
    echo $i. "<br/>";
    $i++;
}
echo " _____________<br/>"
echo "Sum $sum. <br/>";
echo "______________<br/>"
echo "Loops End"
?>

<!-- continue statement -->

<?php
$count = 0;
for($i = 0; $i <= 10; $i++){
    if($i == 5){
        continue;
    }
    $count++;
    echo $i. "<br/>";
}
?>

<?php
for($i = 0; $i <= 20; $i++){
    if($i%2 == 0){
        continue;
    }
    echo $i. "<br/>";
}
?>

<?php
$count = 0;
for($i = 0; $i <= 20; $i++){
    if($i%2 != 0){
        continue;
    }
    $count++;
    echo $i. "<br/>";
}
echo "____________<bre/>"
echo $count;
?>

<!-- Switch case -->

<?php
    $i = 5;

    switch ($i) {
        case 5:
            echo "Variable I is 5";
            break;
        case 6:
            echo "Variable I is 6"
            break;
        default:
            echo "Variable I is not 5 or 6";
            break;

    }
?>

<?php
    $age = 18;

    switch ($age) {
        case ($age >=18 && $age <==65):
            echo "Yes you can vote";
            break;
        case (18 - $age ==1):
            echo "Please wait one more year";
            break;
        case ($age > 65):
            echo "You are too old to vote";
            break;
        default:
            echo "No you cannot vote";
            break;
    }
?>  


