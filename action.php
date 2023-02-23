<?php
require_once 'vendor/autoload.php';
use App\classes\Data;

$data=new Data();
$allProjects=$data->getAllProjects();

if(isset($_GET['page'])){
    if($_GET['page']=='home'){
        include 'pages/home.php';
    }

    elseif ($_GET['page']=='see-all-projects')
    {
        include 'pages/projects.php';
    }elseif ($_GET['page']=='single-project-details')
    {
        $id=$_GET['id'];
        $singleProjects=$data->getSingleProjectsById($id);
        include 'pages/details.php';

    }
    elseif ($_GET['page']=='about'){
        include 'pages/about.php';
    }elseif ($_GET['page']=='contact'){
        include 'pages/contact.php';
    }



}