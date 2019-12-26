<?php
     $data = array();
     get_action($data);
     function get_action(&$data){
         $function = 'login';
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
        function go_homePage(&$data) {
            session_start();
            $data['author'] = getAuthors($_POST);
            foreach ($data['author'] as $key => $value) {
                if($value['passwords'] == $_SESSION['pass'] && $value['name'] = $_SESSION['name']) {
                    $data['dashborad'] = mdashboard();
                    $data['page'] = "Pages/homePage.php";
            }else {
                $data['page'] = "Pages/login.php";
            }
        }
    }
    function login(&$data){
        $data['view'] = get_data();
        $data['page'] = "Pages/login.php";
    }

    function delete(&$data){
        $delete = m_delete($_GET);
        if ($delete){
            header("location:index.php?action=homePage");
        }
    }
  
////sokhorn
    function register_form(&$data) {
        $data['data'] = m_add_data_register($_POST);
        header("Location:rental_moto.php?action=moto_rental");
    }

    function  register(&$data) {
        $data['data'] = m_add_register($_GET);
        $data['page'] = "Pages/register_form.php";
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
    
?>