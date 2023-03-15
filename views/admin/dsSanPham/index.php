
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="public/assets/admin//css/style.css">
    <link rel="stylesheet" href="public/assets/admin/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
                <h1>Danh Sách Sản Phẩm</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">

                <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <button id="bntAdd" type="submit">Thêm sản phẩm mới</button>
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search">
                            <select name="" id="">
                                <option value="">Status</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th><span class="las la-sort"></span> Sản Phẩm</th>
                                    <th><span class="las la-sort"></span> Giá tiền</th>
                                    <th><span class="las la-sort"></span> Ngày cập nhật</th>
                                    <th><span class="las la-sort"></span> Số lượng</th>
                                    <th><span class="las la-sort"></span> Đã bán</th>
                                    <th><span class="las la-sort"></span> Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($products as $product) {?>
                                <tr>
                                    <td><?php echo $product['id'] ?></td>
                                    <td>
                                        <div class="client">
                                           <div class="client-img bg-img" style="background-image: url(<?php echo $target_file.$product['img'] ?>)"></div>
                                            <div class="client-info">
                                                <h4><?php echo $product['name'] ?></h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <?php echo $product['price']?>
                                    </td>
                                    <td>
                                        <?php echo $product['created_at'] ?>
                                    </td>
                                    <td>
                                        <?php echo $product['quantity'] ?>
                                    </td>
                                    <td>
                                        -$205
                                    </td>
                                    <td>
                                        <div class="actions">
                                            <a href="index.php?controller=product&action=see&module=admin&id=<?php echo $product['id'] ?>">
                                                <span class="ti-eye"></span>
                                            </a>
                                            <a href="index.php?controller=product&action=edit&module=admin&id=<?php echo $product['id'] ?>">
                                                <span class="ti-pencil"></span>
                                            </a>
                                            <a href="index.php?controller=product&action=delete&module=admin&id=<?php echo $product['id'] ?>">
                                                <span class="ti-trash"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            
            </div>
            
        </main>
        
    </div>

    <script>
        $id = document.getElementById("bntAdd").addEventListener("click", function() {
            window.location.href = "index.php?controller=product&action=create&module=admin";
        })
        
    </script>
</body>
</html>