<?php
  function m_get_data(){
    include "connection.php";
    $query = "SELECT* FROM users us INNER JOIN moto mo ON us.motoId = mo.motoId";
    $result = mysqli_query($connection,$query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0){
        foreach($result as $record){
            $rows[] = $record;
        }
    }
    return $rows;
}

     //Delete funtion
     function  delete_User(){
        include "connection.php";
        $id = $_GET['id'];
        $delete = mysqli_query($connection, "DELETE FROM users WHERE userId = $id");
        return $delete;
    }
 

    //function insert data to edit form
    function m_edit_rental_moto(){
        include "connection.php";
        $id = $_GET['id'];
        $query = "SELECT* FROM users us INNER JOIN moto mo ON us.motoId = mo.motoId WHERE us.userId = $id";
        $result = mysqli_query($connection,$query);
        $rows = [];
        if($result && mysqli_num_rows($result) > 0){
            foreach($result as $record){
                $rows[] = $record;
            }
        }
        return $rows;
    }
    //edit information
    function edit_rental_moto(){
        include "connection.php";
        $id = $_POST['userID'];
        $p_name = $_POST['p_name'];
        $phone = $_POST['phone'];
        $id_card = $_POST['id_card'];
        $start_date = $_POST['start'];
        $end_date = $_POST['end'];
        $updata = "UPDATE users SET username='$p_name', id_card='$id_card',phonenumber='$phone',start_date='$start_date',end_date='$end_date' WHERE userId = $id";
        $result = mysqli_query($connection, $updata);
        return $result;
    }
?>