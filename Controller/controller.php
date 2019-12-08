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
?>