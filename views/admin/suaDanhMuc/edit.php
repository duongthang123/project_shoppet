
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="public/assets/admin/font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./public/assets/admin/css/style.css">
    <link rel="stylesheet" href="public/assets/admin/css/addProduct.css">
</head>
<body>
    <input type="checkbox" id="menu-toggle">

    <!-- sidebar -->
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

        <!-- header -->
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
                <h1>Sửa Danh mục</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <!--  -->
            <div class="page-content">
                <div class="content__fluid-add">
                    <div class="title__add">
                        Sửa Danh Mục
                    </div>

                    <form action="index.php?controller=category&action=update&module=admin&id=<?php echo $category['id'] ?>" class="content__form" method="POST">

                        <div class="content__form_box">
                            <h3 class="content__form_titile">Tên danh mục</h3>
                            <input class="content__form_input"  type="text" name="name" value="<?php echo isset($category['name']) ? $category['name'] : '' ?>"/>
                            <p id="errors">
                                <?php echo isset($categoryErrors['name']) ? $categoryErrors['name'] :'' ?>
                            </p>
                        </div>

                        <button type="submit" name="btn_edit" class="content__form_btn">Lưu danh mục</button>
                        <button type="button" onclick="history.back()" class="content__form_btn--dis">Hủy</button>
                    </form>

                </div>
                
            
            </div>
            
        </main>
        
    </div>
</body>
</html>