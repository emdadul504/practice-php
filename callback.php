<?php

function sum (closure $callable)
{
    $callable();
}
sum (function () {
    echo 'callback function';
});
?>

