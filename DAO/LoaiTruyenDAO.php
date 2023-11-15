<?php
include 'models/LoaiTruyen.php';
class LoaiTruyenDAO {
    // kết nối database
    private $PDO;
    public function __construct()
    {
        require('config/PDO.php');
        $this->PDO = $pdo;
    }
    // thêm mới loại truyện
    public function add($ten){
        $sql = "INSERT INTO `loai_san_pham`( `ten_san_pham`) VALUES ('$ten');";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    // lấy danh sách loại truyện
    public function show(){
        $sql = "SELECT * FROM `loai_san_pham` WHERE 1";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        $lists = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new LoaiTruyen($row['id_loai_san_pham'], $row['ten_san_pham'], $row['trang_thai']);
            $lists[] = $product;
        }

        return $lists;
    }
    // xoá loại truyện
    public function remove($id){
        $sql = "UPDATE `loai_san_pham` SET `trang_thai`= 0 WHERE id_loai_san_pham = $id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        
    }
    // lấy thông tin 1 loại truyện theo id
    public function showOne($id){
        $sql = "SELECT * FROM `loai_san_pham` WHERE id_loai_san_pham =$id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        $lists = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new LoaiTruyen($row['id_loai_san_pham'], $row['ten_san_pham'], $row['trang_thai']);
            $lists[] = $product;
        }
        return $lists;
    }
    // sửa loại truyên
    public function update($id,$name,$trang_thai){
        $sql = "UPDATE `loai_san_pham` SET `ten_san_pham`='$name',`trang_thai`='$trang_thai' WHERE  id_loai_san_pham = $id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
}
?>