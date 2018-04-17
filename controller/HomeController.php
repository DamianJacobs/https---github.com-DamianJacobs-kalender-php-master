<?php

require(ROOT . "model/KalenderModel.php");






function index(){
render("kalender/index", array(
    'Birthdays' => getAllBirthdays()
));
}

function PrettyPrint($data)
{
    echo "<pre>" . var_dump($data) . "</pre>";
    die();

}

