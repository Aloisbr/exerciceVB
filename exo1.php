<?php

function test($string) {
    for($i = 0; $i < strlen($string); $i++){
        if((ord($string[$i]) - 65) % 2 && (ord($string[$i]) > 64 && ord($string[$i]) < 90) || (ord($string[$i]) - 65) == 0) {
            $string[$i] = chr(ord($string[$i]) + 1);
        }
        elseif((ord($string[$i]) - 97) % 2 && (ord($string[$i]) > 96 && ord($string[$i]) < 122) || (ord($string[$i]) - 97) == 0) {
            $string[$i] = chr(ord($string[$i]) + 1);
        }
        elseif((ord($string[$i]) > 64 && ord($string[$i]) < 91) || (ord($string[$i]) > 96 && ord($string[$i]) < 123)) {
            $string[$i] = chr(ord($string[$i]) - 1);
        }
    }
    return $string;
}

var_dump(test("z"));
?>