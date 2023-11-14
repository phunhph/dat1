<?php
include 'DAO/BoTruyenDAO.php';
class BoTruyenController
{
    public function index()
    {
        if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            $BoTruyenDAO = new BoTruyenDAO();
            $list = $BoTruyenDAO->show();
            include "views/botruyen/admin/list.php";
        } else {
            include('views/home/user/Home.php');
        }
    }
    public function add()
    {
        if (isset($_SESSION['role']) && $_SESSION['role'] == 1) {
            if (isset($_POST['ten'])) {
                $BoTruyenDAO = new BoTruyenDAO();
                $BoTruyenDAO->add($_POST['ten']);
                $list = $BoTruyenDAO->show();
                include 'views/botruyen/admin/list.php';
            } else {
                include('views/botruyen/admin/add.php');
            }
        } else {
            include('views/home/user/Home.php');
        }
    }
}