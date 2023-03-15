
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="public/assets/admin/css/style.css">
    <link rel="stylesheet" href="public/assets/admin/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="public/assets/admin/css/addProduct.css">
    <style>
        #bntAdd:hover {
            cursor: pointer;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>A<span>dmin</span></h3>
        </div>
    
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url('public/assets/admin/img/1.jpeg')"></div>
                <h4>David Green</h4>
                <small>Art Director</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                        <a href="index.php?controller=homepage&action=index&module=admin" class="active">
                            <span class="las la-home"></span>
                            <small>Trang chủ</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-user-alt"></span>
                            <small>Profile</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-envelope"></span>
                            <small>Mailbox</small>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?controller=product&action=index&module=admin">
                            <span class="las la-clipboard-list"></span>
                            <small>Danh sách sản phẩm</small>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?controller=category&action=index&module=admin">
                            <span class="las la-clipboard-list"></span>
                            <small>Danh Mục</small>
                        </a>
                    </li>
                    <li>
                        <a href="index.php?controller=donHangMoi&action=index&module=admin">
                            <span class="las la-shopping-cart"></span>
                            <small>Trang bán hàng</small>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-tasks"></span>
                            <small>Tasks</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    <label for="">
                        <span class="las la-search"></span>
                    </label>
                    
                    <div class="notify-icon">
                        <span class="las la-envelope"></span>
                        <span class="notify">4</span>
                    </div>
                    
                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <span class="notify">3</span>
                    </div>
                    
                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                        
                        <span class="las la-power-off"></span>
                        <span>Logout</span>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Đơn hàng mới</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">

                <div class="records table-responsive">
                    <div class="record-header">
                        <div class="add">
                            <button id="bntAdd" type="submit">Tình trạng các đơn hàng</button>
                        </div>
                    </div>
                </div>

                <div class="content__fluid_newoderpd">
                    <ul class="new__order_list">
                        <li class="new__order_item records table-responsive">
                            <div class="new__order_item-header">
                                <img src="public/assets/admin/img/logo.jpg" alt="" class="order__item_header_img">
                                <div class="order__item_header_date">Ngày đặt: <span> 22/12/2002 00:30:12</span></div>
                            </div>

                            <div class="new__order_item-info">
                                <div class="order__info">
                                    <div class="order__info-name">Tên Shop: <span>Shop Bán Hàng</span></div>
                                    <div class="order__info_address">
                                        <lable class="order__info_address-name">Địa chỉ cửa hàng:</lable>
                                        <p class="order__info_address-main">Quận Bắc Từ Niêm - Hà Nội</p>
                                    </div>
                                    <div class="order__info-phone">Số điện thoại: <span>098767351</span></div>
                                    <div class="order__info-email">Email: <span>aad@gmail.com</span></div>
                                </div>

                                <div class="order__info">
                                    <div class="order__info-name">Tên Khách Hàng: <span>Dương Thắng</span></div>
                                    <div class="order__info_address">
                                        <lable class="order__info_address-name">Địa chỉ khách hàng:</lable>
                                        <p class="order__info_address-main">Quận Bắc Từ Niêm - Hà Nội</p>
                                    </div>
                                    <div class="order__info-phone">Số điện thoại: <span>098767351</span></div>
                                    <div class="order__info-email">Email: <span>aad@gmail.com</span></div>
                                </div>

                                <div class="new__order_id">Mã đơn hàng: <span>1</span></div>
                            </div>

                            <div class="new__order_item-table">
                                <table width="100%" class="order__table">
                                    <thead>
                                        <tr class="order__table-tr">
                                            <th>Tên Sản Phẩm</th>
                                            <th>Giá tiền</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sản phẩm 1</td>
                                            <td>
                                                200.000
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Sản phẩm 1</td>
                                            <td>
                                                200.000
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                            <div class="new__order_total">
                                <div class="order__total_payment">
                                    <h3 class="order__total_payment-tittle">Hình thức thanh toán</h3>
                                    <p class="order__total_payment-main">
                                        Thanh toán bằng thẻ
                                        <i class="iconcheck ti-check"></i>
                                    </p>
                                    <p class="order__total_payment-main">
                                        Thanh toán bằng tiền mặt
                                    </p>
                                </div>

                                <div class="order__total_price">
                                    <h3 class="order__total_price-tittle">Tổng thanh toán</h3>
                                    <table>
                                        <tr>
                                            <td class="order__total_title">
                                                Tổng Giá
                                                <td class="order__total_pay"><span>400.000 </span> VND</td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="order__total_title">
                                                Phí Ship
                                                <td class="order__total_pay"><span>50.000 </span>VND</td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="order__total_title">
                                                Tổng Thanh Toán
                                                <td class="order__total_pay"><span>400.000 </span>VND</td>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </div>
                            </div>

                            <div class="new__order_btn">
                                <button class="order__btn_print">
                                    <i class="ti-printer"></i>
                                </button>
                                <button class="order__btn_succes">Xác Nhận</button>
                            </div>
                        </li>

                        <li class="new__order_item records table-responsive">
                            <div class="new__order_item-header">
                                <img src="public/assets/admin/img/logo.jpg" alt="" class="order__item_header_img">
                                <div class="order__item_header_date">Ngày đặt: <span> 22/12/2002 00:30:12</span></div>
                            </div>

                            <div class="new__order_item-info">
                                <div class="order__info">
                                    <div class="order__info-name">Tên Shop: <span>Shop Bán Hàng</span></div>
                                    <div class="order__info_address">
                                        <lable class="order__info_address-name">Địa chỉ cửa hàng:</lable>
                                        <p class="order__info_address-main">Quận Bắc Từ Niêm - Hà Nội</p>
                                    </div>
                                    <div class="order__info-phone">Số điện thoại: <span>098767351</span></div>
                                    <div class="order__info-email">Email: <span>aad@gmail.com</span></div>
                                </div>

                                <div class="order__info">
                                    <div class="order__info-name">Tên Khách Hàng: <span>Dương Thắng</span></div>
                                    <div class="order__info_address">
                                        <lable class="order__info_address-name">Địa chỉ khách hàng:</lable>
                                        <p class="order__info_address-main">Quận Bắc Từ Niêm - Hà Nội</p>
                                    </div>
                                    <div class="order__info-phone">Số điện thoại: <span>098767351</span></div>
                                    <div class="order__info-email">Email: <span>aad@gmail.com</span></div>
                                </div>

                                <div class="new__order_id">Mã đơn hàng: <span>1</span></div>
                            </div>

                            <div class="new__order_item-table">
                                <table width="100%" class="order__table">
                                    <thead>
                                        <tr class="order__table-tr">
                                            <th>Tên Sản Phẩm</th>
                                            <th>Giá tiền</th>
                                            <th>Số lượng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Sản phẩm 1</td>
                                            <td>
                                                200.000
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Sản phẩm 1</td>
                                            <td>
                                                200.000
                                            </td>
                                            <td>
                                                2
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>

                            <div class="new__order_total">
                                <div class="order__total_payment">
                                    <h3 class="order__total_payment-tittle">Hình thức thanh toán</h3>
                                    <p class="order__total_payment-main">
                                        Thanh toán bằng thẻ
                                        <i class="iconcheck ti-check"></i>
                                    </p>
                                    <p class="order__total_payment-main">
                                        Thanh toán bằng tiền mặt
                                    </p>
                                </div>

                                <div class="order__total_price">
                                    <h3 class="order__total_price-tittle">Tổng thanh toán</h3>
                                    <table>
                                        <tr>
                                            <td class="order__total_title">
                                                Tổng Giá
                                                <td class="order__total_pay"><span>400.000 </span> VND</td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="order__total_title">
                                                Phí Ship
                                                <td class="order__total_pay"><span>50.000 </span>VND</td>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="order__total_title">
                                                Tổng Thanh Toán
                                                <td class="order__total_pay"><span>400.000 </span>VND</td>
                                            </td>
                                        </tr>
                                    </table>
                                    
                                </div>
                            </div>

                            <div class="new__order_btn">
                                <button class="order__btn_print">
                                    <i class="ti-printer"></i>
                                </button>
                                <button class="order__btn_succes">Xác Nhận</button>
                            </div>
                        </li>
                    </ul>
                </div>
            
            </div>
            
        </main>
        
    </div>

    <script>
        $id = document.getElementById("bntAdd").addEventListener("click", function() {
            window.location.href = "index.php?controller=tinhTrangDH&action=index&module=admin";
        })

        
    </script>
</body>
</html>