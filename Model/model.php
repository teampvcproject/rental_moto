<?php
<<<<<<< HEAD
 function get_data(){
     include_once "connection.php";
     $query = "SELECT moto.motoId,moto.moto_name,moto.number_plate,moto.year_of_product
      ,users.userId ,users.username,users.id_card,users.phonenumber,users.start_date,users.end_date
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

?> 
=======

function m_get_data() {
    $query = "SELECT * FROM moto";
    include "connection.php";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0 ){
        foreach ($result as $record) {
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
>>>>>>> e190080f853b206414159270e679a437bff4e146
