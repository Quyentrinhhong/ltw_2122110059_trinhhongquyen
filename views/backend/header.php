<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Tiêu đề giao diện</title>
   <link rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
      <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
      <link rel="stylesheet" href="../public/datatables/css/dataTables.min.css">
      <link rel="stylesheet" href="../public/css/backend.css">
</head>

<body class="hold-transition sidebar-mini">
   <div class="wrapper">
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="index.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
               <a href="#" class="nav-link">Contact</a>
            </li>
         </ul>
         <ul class="navbar-nav ml-auto">
            <li class="nav-item">
               <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                  <i class="fas fa-search"></i>
               </a>
               <div class="navbar-search-block">
                  <form class="form-inline">
                     <div class="input-group input-group-sm">
                        <input class="form-control form-control-navbar" type="search" placeholder="Search"
                           aria-label="Search">
                        <div class="input-group-append">
                           <button class="btn btn-navbar" type="submit">
                              <i class="fas fa-search"></i>
                           </button>
                           <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                              <i class="fas fa-times"></i>
                           </button>
                        </div>
                     </div>
                  </form>
               </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="logout.php" role="button">
                  <i class="fas fa-power-off"></i> Đăng xuất
               </a>
            </li>
         </ul>
      </nav>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
         <a href="../backend/index.html" class="brand-link">
            <img src="../public/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
               class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">QUẢN TRỊ</span>
         </a>
         <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
               <div class="image">
                  <img src="../public/images/user/<?=($_SESSION['image'])??'image.pnj';?>" class="img-circle elevation-2" alt="<?=($_SESSION['image'])??'image.pnj';?>">
               </div>
               <div class="info">
                  <a href="#" class="d-block"> <?=($_SESSION['name'])??'name';?></a>
               </div>
            </div>
            <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Sản phẩm
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="index.php?option=product" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Tất cả sản phẩm</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="index.php?option=category" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Danh mục</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="index.php?option=brand" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Thương hiệu</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Bài viết
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="index.php?option=post" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Tất cả bài viết</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="index.php?option=topic" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Chủ đề</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="index.php?option=page" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Trang đơn</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Quản lý bán hàng
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="index.php?option=order" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Tất cả đơn hàng</p>
                           </a>
                        </li>
                        <!-- <li class="nav-item">
                           <a href="index.php?option=import" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Nhập hàng</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="index.php?option=export" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Xuất hàng</p>
                           </a>
                        </li> -->
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="index.php?option=customer" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Khách hàng</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="index.php?option=contact" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Liên hệ</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Giao diện
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="index.php?option=menu" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Menu</p>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a href="index.php?option=banner" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Banner</p>
                           </a>
                        </li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                           Hệ thống
                           <i class="right fas fa-angle-left"></i>
                        </p>
                     </a>
                     <ul class="nav nav-treeview">
                        <li class="nav-item">
                           <a href="index.php?option=user" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Thành viên</p>
                           </a>
                        </li>
                        <!-- <li class="nav-item">
                           <a href="index.php?option=config" class="nav-link">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Cấu hình</p>
                           </a>
                        </li> -->
                     </ul>
                  </li>
                  <li class="nav-header">LABELS</li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                     </a>
                  </li>
               </ul>
            </nav>
         </div>
      </aside>