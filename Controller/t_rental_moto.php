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
    
    function view(&$data){
        $data['view'] = get_data();
        $data['page'] = "Pages/view.php";
    }
    
    ///Lisa SOUY
    function moto_rental(&$data){
        $data['t_info'] = m_get_data();
        $data['page'] = "Pages/rental_moto.php";  
    }
    
    
    //Lisa SOUY
?>