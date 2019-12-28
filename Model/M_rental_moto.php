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
 

    //function edit
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
?>