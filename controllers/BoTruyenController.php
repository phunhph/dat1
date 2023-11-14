<?php
class BoTruyenController
{
    public function index()
    {
        include "views/botruyen/admin/list.php";
    }
    public function add()
    {
        include('views/botruyen/admin/add.php');
    }
}