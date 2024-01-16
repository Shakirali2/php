<!-- Arithmetic Operator -->
<?php
    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo "add:" .$c;
    $c = $a - $b;
    echo "\nsub:\t" .$c;
    $c = $a * $b;
    echo "\nmul:\t" .$c;
    $c = $a / $b;
    echo "\ndiv:\t" .$c;
    $d++: // d = | 5+1
    echo "\nmod:\t" .$c;
?>

<!-- Comparison Operator -->
<?php 
    $x = 5;
    $y = 10;

    var_dump($x > $y);
    var_dump($x < $y);
    var_dump($x == $y);
    var_dump($x === $y);
    var_dump($x != $y);
    var_dump($x !== $y);
    var_dump($x >= $y);
    var_dump($x <= $y);
    var_dump($x <=> $y);
?>
<!-- Loogical and Condition Operator -->
<?php 
    $x = 5;
    $y = 10;
    $c = $x && $y; //AND
    var_dump($c);
    $c = $x || $y; //OR
    var_dump($c);
    $c = !$x; //NOT
    var_dump($c);
?>

<!-- Ternary Operator -->
<?php
    $x = 5;
    $x > 3 ? $flag = "Yes" : $flag = "No";
    var_dump($flag);

?>

<!-- Assignment Operator  -->

<?php 
    $x = 5;
    $y = 10;
    echo $a."\n";
    $a += $b;
    echo $a."\n";
    $a -= $b;
    echo $a."\n";
    $a *= $b;
    echo $a."\n";
    $a /= $b;
    echo $a."\n";
    $a %= $b;
    echo $a."\n";
    $a .= $b;
    echo $a."\n";

?>




