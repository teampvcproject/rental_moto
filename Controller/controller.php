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
     function add_form(&$data) {
        $data['page'] = "Pages/add.php";
     }
  
    //lysa thorn

    function homePage(&$data){
        $data['dashborad'] = mdashboard();
        $data['page'] = "Pages/homePage.php";
        
    }
    function view(&$data){
        $data['view'] = get_data();
        $data['page'] = "Pages/view.php";
    }
    //sokhorn.nhor
    function register(&$data) {
        $data['page'] = "Pages/register-form.php";
    }    
    function form_data(&$data) {
        $add_data = m_add_data($_POST);
        if($add_data) {
            $action = "view";
        }else {
            $action = "register-form";
        }
        header("Location:index.php?action=$action");
    }

    //virak.ran
    function add_moto(&$data) {
        $data['add_moto'] = m_add_moto($_POST);
        if($data['add_moto']) {
            header("Location:View/Pages/homePage.php");
        }
    }
?>