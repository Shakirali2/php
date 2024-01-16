<?php
    function p($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    $x = array(
        "Car1",
        "Car2",
        "Car3",
        "Car4",
        "Car5"
    )
    p($x);
    echo "<br>";


    $y = array(
        "Car6",
        "Car7",
        "Car8",
        "Car9",
        "Car10"
    )
    p($y);
?>

<?php
    function vote($age) {
        if($age >= 18) {
            echo "You are eligible to vote";
        } else {
            echo "You are not eligible to vote";
        }
    }   

    echo "Age 24:".vote(24)."<br/>";
    echo "Age 17:".vote(17)."<br/>";
    echo "Age 19:".vote(19)."<br/>";
    echo "Age 20:".vote(20)."<br/>";
    echo "Age 21:".vote(21)."<br/>";
    echo "Age 22:".vote(22)."<br/>";
?>