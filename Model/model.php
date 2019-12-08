<?php
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