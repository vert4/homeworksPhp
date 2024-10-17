<?php
$variable = 3.14;
//variant with if else
if (is_bool($variable)) {
    $type = 'bool';
} else if (is_float($variable)){
    $type = 'float';
} else if (is_int($variable)) {
    $type = 'int';
} else if (is_string($variable)){
    $type = 'string';
} else if (is_null($variable)){
    $type = 'null';
} else {
    $type = 'other';
};
echo "type is $type"."<br>";
// variant switch break
switch (true) {
    case is_bool($variable):
        $type = 'bool';
        break;
    case is_float($variable):
        $type = 'float';
        break;
    case is_int($variable):
        $type = 'int';
        break;
    case is_string($variable):
        $type = 'string';
         break;
    case is_null($variable):
        $type = 'null';
        break;
        default:
        $type = 'other';
}
echo "type is $type";
?>