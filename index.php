<?php
echo 'Hello World';

$name = 'Flavio';
var_dump($name); //string(6)

$age = 20;
var_dump($age); //int(20)

$base = 20;
$height = 10;
echo $area = $base * $height; //200

//true xor false - one of them, not both

$age = 20;
$age++;
echo $age; //21

$test = 'an example';
echo $example = "This is $test"; //variable in string

$firstName = 'Flavio';
$lastName = 'Copes';

$fullName = $firstName . ' ' . $lastName;
echo $fullName; //Flavio Copes
echo strlen($fullName); //12

$name = 'Flavio';
echo substr($name, 3); //vio
echo $itemObserved = str_replace('avio', 'ower', $name); //"Flower"

$list = ['a', 'b'];
echo $list[0]; //'a'
echo $list[1]; //'b'

$array = array("apple", "banana", "apple", "cherry", "banana");
$counts = array_count_values($array);
print_r($counts);

$age = 17;
if ($age > 20) {
    echo 'You are 20+';
} elseif ($age > 18) {
    echo 'You are 18+';
} else {
    echo 'You are <18';
}

$list2 = ['a', 'b', 'c'];
foreach ($list2 as $key => $value) {
    echo $key;
}

for ($i = 0; $i < 10; $i++) {
    echo $i; //0123456789
}

for ($i = 0; $i < count($list2); $i++) {
    if ($list2[$i] == 'b') {
        break;
    }
    echo $list2[$i]; //a
}

for ($i = 0; $i < count($list2); $i++) {
    if ($list2[$i] === 'b') {
        continue;
    }
    echo $list2[$i]; //ac
}
?>