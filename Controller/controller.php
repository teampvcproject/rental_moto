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
        $data['page'] = "Pages/view.php";
    }
    //virak.ran
    function add_moto(&$data) {
        $add = m_add_moto($_POST);
        if($add) {
            header("Location:index.php?action=homePage");
        }
    }
    function edit(&$data) {
        $data['edit_page'] = m_edit_data($_GET);
        $data['page'] = "Pages/edit.php";
    }

    function edit_moto(&$data) {
        $result = data_edit($_POST);
        if ($result){
            $action = "homePage";
        }else{
            $action = "edit";
        }
        header("Location:index.php?action=$action");
    }
    
    function register_form(&$data) {
        $data['data'] = m_add_data_register($_POST);
        header("Location:rental_moto.php?action=rental_moto.php");
    }

    function  register(&$data) {
        $data['data'] = m_add_register($_GET);
        $data['page'] = "Pages/register_form.php";
    }

?>