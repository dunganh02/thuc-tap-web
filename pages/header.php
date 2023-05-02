<?php
if (isset($_GET['dangxuat']) && $_GET['dangxuat'] == 1) {
    unset($_SESSION['dangky']);
}
?>


<div class="header ">
    <div class="logo-header pd-28">HADES STUDIO</div>
    
    <div class="header-dropdown">
        <nav>
            <!-- <ul>
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Giới thiệu</a></li>
                <li>
                    <a href="#">Sản phẩm</a>
                    <ul>
                        <li><a href="#">Sản phẩm 1</a></li>
                        <li><a href="#">Sản phẩm 2</a></li>
                        <li><a href="#">Sản phẩm 3</a></li>
                    </ul>
                </li>
                <li><a href="#">Liên hệ</a></li>
            </ul> -->

            <div class="dropdown-content">
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
                <a href="#">Link 3</a>
            </div>
        </nav>

    </div>

    <div class="account-links pd-28">
        <?php
        if (isset($_SESSION['dangky'])) {
        ?>
            <a href="./index.php?quanly=thongtintaikhoann&id=<?php echo $_SESSION['id_khachhang'] ?>" id="login"><?php echo $_SESSION['dangky']; ?></a>
            /
            <a href="index.php?dangxuat=1" id="regist">Đăng xuất</a>
        <?php
        } else {
        ?>

            <a href="./index.php?quanly=dangnhap" id="login">Đăng nhập</a>
            /
            <a href="./index.php?quanly=dangky" id="regist">Đăng ký</a>
        <?php
        }
        ?>

    </div>
    <label for="check-timkiem">
        <div class="ti-search icon-header "></div>
    </label>

    <a href="index.php?quanly=giohang" class="cart-shopping pd-28">Giỏ Hàng
        <i class="ti-shopping-cart">
            <?php
            if (isset($_SESSION['cart'])) {
                $soluongsanpham = 0;
                foreach ($_SESSION['cart'] as $cart_item) {
                    $soluongsanpham += $cart_item['soluong'];
                }
            ?>(<?php echo $soluongsanpham ?>)
        <?php }
        ?>
        </i>

    </a>



</div>