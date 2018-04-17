<?php


function getAllBirthdays()
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM birthdays ORDER BY month, day, year, Name";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}

function getBirthday($id)
{
    $db = openDatabaseConnection();

    $sql = "SELECT * FROM birthdays WHERE id = :id";
    $query = $db->prepare($sql);
    $query->execute([':id'=>$id]);

    $db = null;

    return $query->fetch(PDO::FETCH_ASSOC);
}



function getCreateBirthday(){
    $db = openDatabaseConnection();
    $Name = $_REQUEST['Name'];
    $day = $_REQUEST['dag'];
    $month = $_REQUEST['maand'];
    $year = $_REQUEST['jaar'];

    $sql_add_post = "INSERT INTO birthdays (Name, day, month, year) VALUES ('$Name', '$day', '$month', '$year')";
    $query = $db->prepare($sql_add_post);

    $query->execute();
    $db = null;
}
function getEditBirthday($id){
    $db = openDatabaseConnection();

    $id = $_REQUEST['id'];
    $Name = $_REQUEST['Name'];
    $day = $_REQUEST['dag'];
    $month = $_REQUEST['maand'];
    $year = $_REQUEST['jaar'];


    $sql_edit_post = "UPDATE birthdays SET Name = '$Name', day = '$day', month = '$month', year = '$year' WHERE id = $id";

    $query = $db->prepare($sql_edit_post);
    $query->execute();
    $db = null;
}

function getDeleteBirthday($id){
    $db = openDatabaseConnection();
    $sql_delete_id = "DELETE FROM birthdays WHERE id ='$id'";
    $query = $db->prepare($sql_delete_id);

    $query->execute();
    $db = null;
}