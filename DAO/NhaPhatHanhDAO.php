<?php
include 'models/NhaPhatHanh.php';
class NhaPhatHanhDAO {
    // kết nối database
    private $PDO;
    public function __construct()
    {
        require('config/PDO.php');
        $this->PDO = $pdo;
    }
    // thêm mới bộ truyện
    public function add($ten){
        $sql = "INSERT INTO `nha_phat_hanh`(`ten_nha_phat_hanh`) VALUES ('$ten');";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    // lấy danh sách bộ truyện
    public function show(){
        $sql = "SELECT * FROM `nha_phat_hanh` WHERE 1";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        $lists = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new BoTruyen($row['id_nha_phat_hanh'], $row['ten_nha_phat_hanh'], $row['trang_thai']);
            $lists[] = $product;
        }

        return $lists;
    }
    // xoá bộ truyện
    public function remove($id){
        $sql = "UPDATE `nha_phat_hanh` SET `trang_thai`= 0 WHERE id_nha_phat_hanh = $id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        
    }
    // lấy thông tin 1 bộ truyện theo id
    public function showOne($id){
        $sql = "SELECT * FROM `nha_phat_hanh` WHERE id_nha_phat_hanh =$id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        $lists = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new BoTruyen($row['id_nha_phat_hanh'], $row['ten_nha_phat_hanh'], $row['trang_thai']);
            $lists[] = $product;
        }
        return $lists;
    }
    // sửa bộ truyên
    public function update($id,$name,$trang_thai){
        $sql = "UPDATE `nha_phat_hanh` SET `ten_nha_phat_hanh`='$name',`trang_thai`='$trang_thai' WHERE  id_nha_phat_hanh = $id";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
}
?>