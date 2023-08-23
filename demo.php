<?php
    echo "hello";
    $str='hello Myth here';
    echo $str;

    echo "<br>";

    define('myth','Mythmalhar here');
    echo myth;

    const a=10;
    echo a;

    // Array 
    $arr=[1,2,3,44,4];

    //associative array
    $a=[
        'id' => '1' ,
        'name'=> 'Malhar',
        'array'=>[
            1,2,3
        ]
    ];
    echo '<br>';
    print_r($a);
    echo'<br>';
    print_r($arr);
?>