<?php
    // index array
    $arr1 = array("car1", "car2", "car3");
    $arr1[] = "car4";
    echo "<pre>"
    print_r($arr1);
    echo "</pre>";
    echo $arr1[0];
    echo "<br>";
    echo $arr1[1];
    echo "<br>";
    echo $arr1[2];

?>

<?php
    // associate array
    $arr2 = array(
        'name' => 'Shakir',
        'city' => 'Karachi'
        'age' => 21,
        'status' => true
    );
    $arr2['testing'] = 'testing';
    echo "<pre>"
    print_r($arr2);
    echo "</pre>";
?>


    // multidimensional array
<?php
    $arr2 = array(
        'name' => 'Shakir',
        'city' => 'Karachi'
        'age' => 21,
        'status' => true
        'hobbies' => array('cricket', 'football', 'tennis'), //multidimensional array
    );
    $arr2['testing'] = 'testing';
    echo "<pre>"
    print_r($arr2);
    echo "</pre>";
?>

<?php
    $arr3['test'] = 'testing';

    4arr3 = [
        1,
        2,
        3,
        4,
        5,
        6,
        7 => [
            11,
            12 => [
                111,
                112,
            ]
            13,
        ]
        8,
        9
    ];
    echo "<pre>"
    print_r($arr3);
    echo "</pre>";
?>



