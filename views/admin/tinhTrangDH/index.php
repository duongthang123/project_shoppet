
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="public/assets/admin//css/style.css">
    <link rel="stylesheet" href="public/assets/admin/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="public/assets/admin/css/addProduct.css">
</head>
<body>
    <input type="checkbox" id="menu-toggle">
    <?php include("views/admin/layouts/sildebar.php") ?>
    
    <div class="main-content">
    <?php include("views/admin/layouts/header.php") ?>
        
        
        <main>
            
            <div class="page-header">
                <h1>Tình trạng đơn hàng</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">

                <div class="records table-responsive">

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Tên và địa chỉ khách</th>
                                    <th>Ngày đặt</th>
                                    <th>Shop chuẩn bị</th>
                                    <th>Đã giao bên vận chuyển</th>
                                    <th>Đang giao hàng</th>
                                    <th>Đã giao</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#5033</td>
                                    <td>
                                        #42312
                                    </td>
                                    <td style="max-width: 400px; padding:0px 12px">
                                        <h3>Dương Văn Thắng</h3>
                                        <span>Lương ĐiềnLương Xá - Lương ĐiềnLương Xá - Lương ĐiềnLương Xá - Lương Điền</span>
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        <i class="ti-check"></i>
                                    </td>
                                    <td>
                                        <i class="ti-check"></i>
                                    </td>
                                    <td>
                                        <i class="ti-check"></i>
                                    </td>
                                    <td>
                                        <div class="btn__status_product">
                                            <button class="btn__status_succes none">Hoàn Thành</button>
                                            <button class="btn__status_dis none">Hủy Đơn</button>
                                            <p class="btn__statuc_succes-text none">Đã hoàn thành</p>
                                            <p class="btn__statuc_dis-text show">Đã hủy đơn hàng</p>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#5033</td>
                                    <td>
                                        #42312
                                    </td>
                                    <td style="max-width: 400px; padding:0px 12px">
                                        <h3>Dương Văn Thắng</h3>
                                        <span>Lương ĐiềnLương Xá - Lương ĐiềnLương Xá - Lương ĐiềnLương Xá - Lương Điền</span>
                                    </td>
                                    <td>
                                        19 April, 2022
                                    </td>
                                    <td>
                                        <i class="ti-check"></i>
                                    </td>
                                    <td>
                                        <i class="ti-check"></i>
                                    </td>
                                    <td>
                                        <i class="ti-check"></i>
                                    </td>
                                    <td>
                                        <div class="btn__status_product">
                                            <button class="btn__status_succes">Hoàn Thành</button>
                                            <button class="btn__status_dis ">Hủy Đơn</button>
                                            <p class="btn__statuc_succes-text none">Đã hoàn thành</p>
                                            <p class="btn__statuc_dis-text none">Đã hủy đơn hàng</p>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            
            </div>
            
        </main>
        
    </div>

    <script>
        $id = document.getElementById("bntAdd").addEventListener("click", function() {
            window.location.href = "index.php?controller=themSanPham&action=index&module=admin";
        })
    </script>
</body>
</html>