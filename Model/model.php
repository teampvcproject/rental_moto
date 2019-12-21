<?php

function get_data(){
    include_once "connection.php";
    $query = "SELECT
     moto.motoId,
     moto.moto_name,
     moto.number_plate,
     moto.year_of_product,
     users.userId ,
     users.username,
     users.id_card,
     users.phonenumber,
     users.start_date,
     users.end_date
     FROM moto FULL OUTER JOIN users on moto.motoId=users.userId"; 
    $result = mysqli_query( $connection ,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0){
        foreach($result as $record){
            $rows[] = $record;
        }
    }
    return $rows;
}
function m_add_data($data) {
    if(isset($_POST['register'])){

        include "connection.php";
        $userId = $_POST['userId'];
        $moto_name = $_POST['moto_name'];
        $number_plate = $_POST['number_plate'];
        $year_of_product = $_POST['year_of_product'];
        
        $query = "INSERT INTO moto (userId,moto_name,number_plate,year_of_product)
              VALUES('$userId', '$moto_name', '$number_plate', '$year_of_product')";
        $result = mysqli_query($connection, $query);
        return $result;
}
}

function mdashboard(){
    include 'connection.php';
    $query = mysqli_query($connection, "SELECT * FROM moto");
    $result = [];
    foreach($query as $row){
        $result[] = $row;
    }
    return $result;
}

//virak.ran
// I add new moto 
function m_add_moto() {
    include 'connection.php';
    $moto = $_POST['moto'];
    $calendar = $_POST['calendar'];
    $number_plate = $_POST['number_plate'];
    $INSERT = "INSERT INTO moto(moto_name, number_plate, year_of_product)
    VALUES('$moto', '$calendar', '$number_plate')";
    $query = mysqli_query($connection, $INSERT);
    return $query;
}

// lysa thorn
function  m_delete(){
    $id = $_GET['id'];
    include "connection.php";
    $delet = mysqli_query($connection, "DELETE FROM moto WHERE motoId = $id");
    return $delet;
}

//////

function m_add_register($data){
    include "connection.php";
    $id = $_GET['id'];
    $query = mysqli_query($connection, "SELECT * FROM moto WHERE motoId = $id");
    $result = [];
    foreach ($query as $row) {
        $result[] = $row;
    }
    return $result;
}

function m_add_data_register(){
    $id = $_POST['id'];
   include "connection.php";
   $p_name = $_POST['p_name'];
   $phone = $_POST['phone'];
   $id_card = $_POST['id_card'];
   $start_date = $_POST['start'];
   $end_date = $_POST['end'];
   $INSERT = "INSERT INTO users(username, id_card, phonenumber, start_date, end_date,motoId)
   VALUES ('$p_name', '$id_card', '$phone', '$start_date', '$end_date',
   (SELECT motoId FROM moto WHERE  motoId= $id))";
   $result = mysqli_query($connection, $INSERT);
   return $result;
}
