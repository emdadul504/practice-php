<?php
$person = [

    'first_name' => 'john',
    'last_name'=> 'doe',
    'address' => [
        'sttreet'=> '577',
        'road'=> '4',
        'area'=>'banani',
        'city'=>'dhaka',
        'country'=>[
            'code'=>'BD',
            'full_name'=>'bangladesh',

        ],
],
];

echo $person ['first_name'].'<br/>';
echo $person['last_name'].'<br/>';
echo $person['address']['street'].'<br/>'

?>


<?php
$number1 =30;
$number2=15;
echo'sum:'.($number1 + $number2) . '<br/>';
echo'diff:'.($number1-$number2). '<br/>';
echo 'mul:'.($number1*$number2) . '<br/>';
echo 'div:'.($number1/$number2) .'<br/>';
echo 'mod'.($number1%$number2) .'<br/>';
echo'power'.($number1**$number2).'<br/>';
?>

