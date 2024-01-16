<?php
    $str = "HeLlo World";
    echo strtolower($str);
    echo "<br>";
    echo strtoupper($str);
    echo "<br>";
    echo ucwords($str);
    echo "<br>";
    echo lcfirst($str);
    echo "<br>";
    echo ucfirst($str);
    echo "<br>";
    echo strrev($str);
    echo "<br>";
    echo strlen($str);
    echo "<br>";
    echo str_word_count($str);
    echo "<br>";
?>

<?php
    $str = "Hello World";
    echo str_replace("World","PHP",$str);
    echo "<br>";
    echo str_replace("Hello","PHP",$str);
    echo "<br>";
    echo str_replace("PHP","World",$str);
    echo "<br>";
?>

<?php
    $str = "Hello World";
    echo strrev($str);
    echo "<br>";
    echo strlen($str);
    echo "<br>";
?>

<?php
    $str = "Hello World";
    echo substr($str,0,5);
    echo "<br>";
    echo substr($str,5,5);
    echo "<br>";
    echo substr($str,-2);

?>

<?php
    $demo = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
    It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
    It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."
    echo substr($demo,0,170);
    echo "<br>".$demo;
?>

<?php
    $str = "Hello World";
    echo str_word_count($str);.<br/>;
    echo strlen($str)."Number of chrs <br/>";
    echo str_repeat("Hello<br/>",5);
?>

<!-- rand() Random Math funcion -->
<?php
    echo rand(1,100);
?>

<!-- ceil and floor and round functions  -->

<?php
    $a = 5/2;
    echo $a."Original <br/>";
    echo ceil($a)."ceil <br/>";
    echo floor($a)."floor <br/>";
    echo round($a)."round <br/>";
    echo round($a,2)."round <br/>";
?>

<!-- pow and sqrt functions  -->

<?php
    echo pow(2,3)."pow <br/>";
    echo sqrt(25)."sqrt <br/>";
    echo sqrt(pow(20,2));
?>

<!-- date_default_timezone_set() and getdate() functions   -->

<?php
    date_default_timezone_set("Asia/Karachi");
    echo "<pre>";
    print_r(getdate());
    echo "</pre>";

    $d = getdate();
    echo $d[0]."<br/>";
?>

<!-- date and time functions  -->

<?php
    echo time()/60/60/24/365;

    echo date('d-D(Ws)-l-z-W')
    echo "<br>";

    $str = strtotime('02-08-1992 20:30')
    echo date('d-F-Y h:i:s:a',$str);
?>

<!-- include and include_once functions   -->

