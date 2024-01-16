<?php
    
    function greet() {
        echo "Hello World";
        echo "Hello";
        return;
    }
    greet();
?>

<!-- important array function -->

<?php
    $car = array(
        0 => "Car1",
        1 => "Car2",
        2 => "Car3",
        3 => "Car4",
        4 => "Car5",
        5 => "Car6",
        6 => "Car7",
        7 => "Car8",
        8 => "Car9",
        9 => "Car10"
    );
    $x = 5;
    // is array
    if (is_array($car)) {
        echo "car is an array";
    }else {
        echo "car is not an array";
    }
    echo "<pre>";
    print_r($car);
    echo "</pre>"; 

    // array search
    echo array_search("Car5", $car);
    echo array_search("Car10", $car);
    echo array_search("Car11", $car);
    
    // arrary slice

    echo "<pre>";
    print_r(array_slice($car,2));
    print_r(array_slice($car,2,5));
    print_r(array_slice($car,-5));
    echo "</pre>"; 

    // array chunk
    echo "<pre>";
    $chunked = array_chunk($car,2);
    $chunked = array_chunk($car,3);
    print_r($chunked);
    echo "</pre>";

    // array_pop
    echo "<pre>";
    $poped = array_pop($car);
    echo($poped);
    echo "</pre>";

    // array_push
    echo "<pre>";
    print_r($car);
    echo "</pre>";

    array_push($car,"Car11", "Car12");
    echo "<pre>";
    print_r($car);
    echo "</pre>";

    // array_keys
    echo "<pre>";
    print_r(array_keys($car));
    echo "</pre>";
    
    // var_dumped(array_key_exists(3, $car));
    
    // array_count
    echo count($car);

    // array_value_count
    print_r(array_count_values($car));

?>

<?php $x = array(
    "Car1",
    "Car2",
    "Car3",
    "Car4",
    "Car5",
    "Car6",
);
echo "<pre>";
    print_r($x);
    echo "</pre>";

$y = array(
    "Car7",
    "Car8",
    "Car9",
    "Car10",
    "Car11",
);
echo "<pre>";
    print_r($y);
    echo "</pre>";

$z = array_merge($x,$y);

echo "<pre>";
    print_r($z);
    echo "</pre>";
?>

<!-- Recursion Function -->
<?php
// greet();
// function greet(){
//     echo "Hello!<br/>";
// }

function countNumber($start){
    
    if($start <= 10){
        echo "$start<br/>";
        $start++;
        countNumber($start);
    }else{
        return;
    }
}
countNumber(1);
?>

<!-- implode() method -->
<!--implode and explode funtion  -->

<!-- Implode -->
<?php
    $arr = [
        '1','2','3','4'
    ];
    $str = implode(" ",$arr)
    echo $str;

    $arr = [
        "Hello",
        "Everyone",
        "How",
        "Are",
        "You!"
    ];
    echo "<pre>";
    print_r($arr);

    $str = implode(" ",$arr)
    $str = implode(",",$arr)
    $str = implode("|",$arr)

    echo $str;

?>

<!-- Exlopde -->

<?php
    $str = "A,B,C,D,E,F";
    echo $str;
    $arr = explode(',', $str)
    echo "<pre>";
    print_r($arr);
?>

<?php
    $str = "Hello Everyone How Are You!";
    echo $str;
    $arr = explode('-', $str)
    echo "<pre>";
    print_r($arr);
?>

<?php
    $str = "Hello Everyone How Are You!";
    echo $str;
    $arr = explode('|', $str,0)
    $arr = explode('|', $str,2)
    $arr = explode('|', $str,5)
    echo "<pre>";
    print_r($arr);
?>

