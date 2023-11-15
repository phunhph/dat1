<?php
class HomeController
{
    public function index()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] == 2) {
                include('views/home/admin/Home.php');
            } else {
                include('views/home/user/Home.php');
            }
        } else {
            header("Location: index.php?controller=login");
        }
    }
}
