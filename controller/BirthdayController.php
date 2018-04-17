<?php

require ('../model/KalenderModel.php');

function index()
{
	render("kalender/index");
}
function create(){
    render("kalender/create");
}

function createBirthday(){
    getCreateBirthday($_POST);
    header('location:' .  URL . 'Home/index');
}
function edit($id)
{
    $birthday = getBirthday($id);
    render("kalender/edit",['birthday' => $birthday]);
}

function editBirthday(){

    header('Location:' . URL . 'Home/index');

}




function deleteBirthday($id){
    getDeleteBirthday($id);
    header('location:' .  URL . 'Home/index');


}
?>
