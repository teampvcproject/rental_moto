<?php
$data = array();
get_action($data);
function get_action(&$data)
{
    $function = 'login';
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        $function = $action;
    }
    $function($data);
}
function add_form(&$data)
{
    $data['page'] = "Moto_dashoard/add.php";
}

function go_homePage(&$data)
{
    session_start();
    $data['author'] = getAuthors($_POST);
    foreach ($data['author'] as $key => $value) {
        if ($value['passwords'] == $_SESSION['pass'] && $value['name'] = $_SESSION['name']) {
            header("location:index.php?action=homePage");
        } else {
            header("location:index.php?action=login");
        }
    }
}

function homePage(&$data)
{
    $data['dashborad'] = mdashboard();
    $data['page'] = "Moto_dashoard/homePage.php";
}

function login(&$data)
{
    $data['view'] = get_data();
    $data['page'] = "author/login.php";
}

function delete(&$data)
{
    $delete = m_delete($_GET);
    if ($delete) {
        header("location:index.php?action=homePage");
    }
}

function register_form(&$data)
{
    $result = m_add_data_register($_POST);
    if($result){
        header("Location:rental_moto.php?action=moto_rental");
    }else{
        header("Location:rental_moto.php?action=register_form");
    }
}

function  register(&$data)
{
    $data['data'] = m_add_register($_GET);
    $data['page'] = "Moto_dashoard/register_form.php";
}

function add_moto(&$data)
{
    $add = m_add_moto($_POST);
    if ($add) {
        header("Location:index.php?action=homePage");
    }
}

function edit(&$data)
{
    $data['edit_page'] = m_edit_data($_GET);
    $data['page'] = "Moto_dashoard/edit.php";
}

function edit_moto(&$data)
{
    $result = data_edit($_POST);
    if ($result) {
        $action = "homePage";
    } else {
        $action = "edit";
    }
    header("Location:index.php?action=$action");
}

function cancel(&$data)
{
    header("Location:index.php?action=homePage");
}
