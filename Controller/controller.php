<?php
    $data = array();
    flexible($data);
    function flexible(&$data){
        $function = "view";
        if (isset($_GET['action'])){
            $function = $_GET['action'];
        }
        $function($data);
    }
    function view(&$data){
        $data['page'] = "Pages/view.php";
    }
    function homePage(&$data){
        $data['page'] = "Pages/homePage.php";
    }
    //sokhorn.nhor
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
?>