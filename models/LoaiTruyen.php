<?php 
class LoaiTruyen
{
    public $id;
    public $ten;
    public $trang_thai;
    public function __construct($id,$ten, $trang_thai){
        $this->id = $id;
        $this->ten=$ten;
        $this->trang_thai=$trang_thai;
    }
}