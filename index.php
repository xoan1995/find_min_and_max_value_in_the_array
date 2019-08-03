<html>
<head>
</head>
<body>
<?php
function findMinValueInArray($arr){
    $value_min = min($arr);
    $value_max = max($arr);
    echo "Giá trị nhỏ nhất là:".$value_min."</br>";
    echo "Giá trị lớn nhất là:".$value_max;
}
$arr=[-1,-2,656,78,8];
findMinValueInArray($arr);
?>
</body>
</html>
