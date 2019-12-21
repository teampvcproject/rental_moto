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
    function delete(&$data){
        $delete = m_delete();
        if ($delete){
            header("location:index.php?action=homePage");
        }
    }
  
    //////////////////////////
    function register_form(&$data) {
        $data['data'] = m_add_data_register($_POST);
        header("Location:rental_moto.php?action=rental_moto.php");
    }

    function  register(&$data) {
        $data['data'] = m_add_register($_GET);
        $data['page'] = "Pages/register-form.php";
    }

    //virak.ran
    function add_moto(&$data) {
        $add = m_add_moto($_POST);
        if($add) {
            header("Location:index.php?action=homePage");
        }
    }
   
    
?>