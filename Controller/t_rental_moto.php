<?php
 $data = array();
 get_action($data);
 function get_action(&$data){
     $function = 'view';
     if (isset($_GET['action'])) {
         $action = $_GET['action'];
         $function = $action;
     }
     $function($data);
 }
?>