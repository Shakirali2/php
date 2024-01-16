<!-- if-else statment -->
<?php
    $age = 10;
    if($age >= 18){
        echo "You are eligible to vote";
        echo"\nTesting";
    }else{
        echo "You are not eligible to vote";
    }
?>

<!-- if-elseif  statment-->

<?php
    $age = 17;
    if($age >= 18){
        echo "You are eligible to vote";
    }elseif($age == 17){
        echo "please wait one more year";
    }elseif($age == 16){
        echo "please wait two more year";
    }else{
        echo "You are not eligible to vote";

}
?>

<!-- Nested if-else statment  -->

<?php
    $age = 17;
    if($age >= 18){
        if($age < 66){
            echo "You are eligible to vote";
        }else{
            echo "You can not vote anymore";
        }
    }else{
        echo "You can not vote";
    }
?>