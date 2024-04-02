<?php
    $arr = [
        [
            ['ab','cd','ez'],
            ['ab1','cd1','ez1'],
            ['ab3','cd3','ez3'],
        ],
        [
            ['ab','cd','ez'],
            ['ab1','cd1','ez1'],
            ['ab3','cd3','ez3'],
        ],
    ];
    // echo "Реализация при помощи цикла foreach:";
    // function unionForEach($arr){
    //     $str = "";
    //     foreach($arr as $value){
    //         foreach($value as $value2){
    //             foreach($value2 as $value3){
    //                 $str = $str.$value3;
    //             }
    //         }
    //     }
    //     return $str;
    // }
    // echo "<br />";
    // echo "Результат выполнения: " . unionForEach($arr);
    // echo "<br />";
    // echo "Реализация при помощи цикла for:";
    // $result = function($arr){
    //     $str2 = "";
    //     for ($i=0; $i < count($arr); $i++) { 
    //         for ($j=0; $j < count($arr[$i]); $j++) { 
    //             for ($l=0; $l < count($arr[$i][$j]); $l++) { 
    //                 $str2 = $str2.$arr[$i][$j][$l];
    //             }
    //         }
    //     }
    //     return $str2;
    // };
    // echo "<br /> Результат выполнения: " . $result($arr);
    // function unionFor($arr){
    //     $str2 = "";
    //     for ($i=0; $i < count($arr); $i++) { 
    //         for ($j=0; $j < count($arr[$i]); $j++) { 
    //             for ($l=0; $l < count($arr[$i][$j]); $l++) { 
    //                 $str2 = $str2.$arr[$i][$j][$l];
    //             }
    //         }
    //     };
    //     return $str2;
    // }
    echo "<br />";
    function replacement($arr, $stringToReplaced, $changeableValue){
        foreach($arr as $key1 => $value){
            foreach($value as $key2 => $value2){
                foreach($value2 as $key3 => $value3){
                    if($value3 === $changeableValue){
                        $arr[$key1][$key2][$key3] = $stringToReplaced;
                    }
                }
            }
        };
        return $arr;
    };
    $new_arr = replacement($arr, "Привет", "ab");
    foreach($new_arr as $value){
        foreach($value as $value2){
            // echo "$value2 : ";
            foreach($value2 as $value3){
                echo "$value3 ";
            }
        }
    };
?>