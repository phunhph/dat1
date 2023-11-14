<?php include "views/layout/admin/Header.php";
?>
<div class="container" ">
    <div class=" text">
    Thêm Sách
</div>
<form action="index.php?controller=sanPham_add" method="post" enctype="multipart/form-data" style="min-height: 500px;">
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="ten_san_pham" required>
            <div class="underline"></div>
            <label for="">Tên sách</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="mo_ta" required>
            <div class="underline"></div>
            <label for="">Mô tả</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="file" name="images[]" multiple accept="image/*" required>
            <div class="underline"></div>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="gia_ban" required>
            <div class="underline"></div>
            <label for="">Giá bán</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="gia_goc" required>
            <div class="underline"></div>
            <label for="">Giá gốc</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="number" name="so_luong" required>
            <div class="underline"></div>
            <label for="">Số lượng</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="number" name="so_trang" required>
            <div class="underline"></div>
            <label for="">Số trang</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="date" name="nam_xb" required>
            <div class="underline"></div>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="text" name="kich_thuoc" required>
            <div class="underline"></div>
            <label for="">Kích thước</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <input type="number" name="trong_luong" required>
            <div class="underline"></div>
            <label for="">Trọng lượng</label>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <select name="id_tac_gia" id="">
                <option value="0">Tác giả</option>
                <option value="4">Tác giả 1</option>
            </select>
            <div class="underline"></div>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <select name="id_loai_san_pham" id="">
                <option value="0">Loại sản phẩm</option>
                <option value="1">Loại số 1</option>
                <option value="2">Loại số 2</option>
                <option value="3">Loại số 3</option>
            </select>
            <div class="underline"></div>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <select name="id_bo_truyen" id="">
                <option value="0">Bộ truyện</option>
                <option value="1">Bộ truyện 1</option>
                <option value="2">Bộ truyện 2</option>
                <option value="3">Bộ truyện 3</option>
            </select>
            <div class="underline"></div>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <select name="id_nha_san_xuat" id="">
                <option value="0">Nhà sản xuất</option>
                <option value="1">Nhà sản xuất 1</option>
                <option value="2">Nhà sản xuất 2</option>
                <option value="3">Nhà sản xuất 3</option>
            </select>
            <div class="underline"></div>
        </div>
    </div>
    <div class=" form-row">
        <div class="input-data">
            <select name="id_nha_phat_hanh" id="">
                <option value="0">Nhà phát hành</option>
                <option value="1">Nhà phát hành 1</option>
                <option value="2">Nhà phát hành 2</option>
                <option value="3">Nhà phát hành 3</option>
            </select>
            <div class="underline"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="input-data textarea">
            <div class="form-row submit-btn">
                <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" value="submit">
                </div>
            </div>
</form>
</div>
<!-- End of Main Content -->
<?php include "views/layout/admin/Footer.php"; ?>