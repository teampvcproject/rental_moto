<?php

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
