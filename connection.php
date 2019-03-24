<?php
try{
    $connection= new PDO('mysql:host=localhost;dbname=ppi','root','');

}

var_dump($connection);
echo 'hello world';