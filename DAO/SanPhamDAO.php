<?php
include 'models/SanPham.php';
class SanPhamDAO {
    private $PDO;
    public function __construct()
    {
        require('config/PDO.php');
        $this->PDO = $pdo;
    }
    public function add($ten_san_pham,$mo_ta,$gia_ban,$gia_goc,$so_luong,$so_trang,$id_tac_gia,$nam_xb,$kich_thuoc,$trong_luong,$id_loai_san_pham ,$id_bo_truyen,$id_nha_san_xuat,$id_nha_phat_hanh){
        $sql = "INSERT INTO `san_pham`(`ten_san_pham`, `mo_ta`, `gia_ban`, `gia_goc`, `so_luong`,
               `so_trang`, `id_tac_gia`, `nam_xb`, `kich_thuoc`, `trong_luong`, `id_loai_san_pham`, `id_bo_truyen`, `id_nha_san_xuat`,
               `id_nha_phat_hanh`) VALUES ('$ten_san_pham','$mo_ta','$gia_ban','$gia_goc',
             '$so_luong','$so_trang','$id_tac_gia','$nam_xb','$kich_thuoc','$trong_luong','$id_loai_san_pham','$id_bo_truyen','$id_nha_san_xuat',
             '$id_nha_phat_hanh')";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    public function show(){
        $sql = "SELECT * FROM `san_pham` WHERE 1";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        $lists = array(); // hoặc $products = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new SanPham($row['id_san_pham'], $row['ten_san_pham'], $row['mo_ta'],$row['hinh_anh'],$row['gia_ban'],$row['gia_goc']
                ,$row['so_luong'],$row['so_trang'],$row['id_tac_gia'],$row['nam_xb'],$row['kich_thuoc'],$row['trong_luong'],
                $row['id_loai_san_pham'],$row['id_bo_truyen'],
                $row['id_nha_san_xuat'],$row['id_nha_phat_hanh'],$row['trang_thai'],
            );
            $lists[] = $product;
        }
        return $lists;
    }
    public function getOne(){
        $sql = "SELECT * FROM san_pham ORDER BY id_san_pham DESC LIMIT 1";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        $lists = array(); // hoặc $products = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new SanPham($row['id_san_pham'], $row['ten_san_pham'], $row['mo_ta'],$row['hinh_anh'],$row['gia_ban'],$row['gia_goc']
                ,$row['so_luong'],$row['so_trang'],$row['id_tac_gia'],$row['nam_xb'],$row['kich_thuoc'],$row['trong_luong'],
                $row['id_loai_san_pham'],$row['id_bo_truyen'],
                $row['id_nha_san_xuat'],$row['id_nha_phat_hanh'],$row['trang_thai'],
            );
            $lists[] = $product;
        }
        return $lists;
    }
    // add nhiều ảnh
    public function addImgs($hinh_anh,$id_san_pham){
        $sql = "INSERT INTO `anh_san_pham`( `hinh_anh`, `id_san_pham`) VALUES ('$hinh_anh','$id_san_pham')";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    // update ảnh sản phẩm
    public function updateImgSP($hinh_anh,$id_san_pham){
        $sql = "UPDATE `san_pham` SET `hinh_anh`='$hinh_anh' WHERE id_san_pham = ".$id_san_pham;
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    public function deleteSP($id_san_pham){
        $sql = "DELETE FROM `san_pham` WHERE id_san_pham = ".$id_san_pham;
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    public function deleteASP($id_san_pham){
        $sql = "DELETE FROM `anh_san_pham` WHERE id_san_pham = ".$id_san_pham;
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    public function fix($id){

    }
}
?>