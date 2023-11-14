<?php
include 'models/BoTruyen.php';
class BoTruyenDAO {
    private $PDO;
    public function __construct()
    {
        require('config/PDO.php');
        $this->PDO = $pdo;
    }
    public function add($ten){
        $sql = "INSERT INTO `bo_truyen`( `ten_bo_truyen`) VALUES ('$ten');";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
    }
    public function show(){
        $sql = "SELECT * FROM `bo_truyen` WHERE 1";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        $lists = array(); // hoặc $products = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            // Tạo đối tượng sản phẩm từ dữ liệu và thêm vào danh sách
            $product = new BoTruyen($row['id_bo_truyen'], $row['ten_bo_truyen'], $row['trang_thai']);
            $lists[] = $product;
        }

        return $lists;
    }
}
?>