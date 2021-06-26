<?php
$seat    = $_POST['seat'];
$pay     = $_POST['pay'];
$numseat = $_POST['numseat']; 
$cardnum = $_POST['cardnum'];


if ($seat=='gold')
{
    $price = 20;
}

else if ($seat=='silver')
{
    $price = 10;
}

else if ($seat=='bronze')
{
    $price = 5;
}

else if ($seat=='box')
{
    $price = 15;
}

else
{
    $price = 0;
}

$cost = $price * $numseat;
?>
