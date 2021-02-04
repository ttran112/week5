<?php

//328/week5/model/data-layer.php

//define functions to "get" data from somewhere

//Get fruits

function getFruit()
{
    //connect to db
    //read fruits

    $fruits = array('apple', 'orange', 'banana','kiwi','rambutan');
    return $fruits;
}
//salaries function
function getSalary()
{
    $salaries = array('Thanh' =>200000, 'Tran'=>250000, 'Dinh' => 300000);
    return $salaries;
}

//function deserts
function getDesert(){
    $deserts = array('chocolate' => 'Chocolate Cake', 'vanilla' => 'Vanilla Ice Cream');
    return $deserts;
}
