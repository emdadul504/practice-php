<?php
$person = [

'first_name' => 'john',
'last_name'=> 'doe',
'address' => [
'street'=> '577',
'road'=> '4',
'area'=>'banani',
'city'=>'dhaka',
'country'=>[
'code'=>'BD',
'full_name'=>'bangladesh',
    'local' =>[
        'name' => 'Bangladesh',
        'code'=>'PRB'
    ],

],
],
];
function iterate_array($array)
{
    foreach($array as $key => $value)
    {
        if (is_array ($value)){
            iterate_array($value);
        }else{
            echo keytotext($key) .':'.$value.'<br/>';
        }
    }
}

function keytotext($key)
{
    return ucwords(str_replace('_',' ',$key));
}
foreach ($person as $key=>$value)
{
    if(is_array($value)){
        iterate_array($value);
    }else{
        echo keytotext($key) .':'.$value.'<br/>';
    }

}
?>
