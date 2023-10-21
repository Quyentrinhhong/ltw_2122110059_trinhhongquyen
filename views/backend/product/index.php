<?php
use App\Models\Product;

$list = Product::where('status','!=',0)

  ->orderBy('created_at','DESC')
  ->get();

?>

<?php require_once '../views/backend/header.php';?>
      <!-- CONTENT -->
      <form action="" method="post">
         <div class="content-wrapper">
            <section class="content-header">
               <div class="container-fluid">
                  <div class="row mb-2">
                     <div class="col-sm-12">
                        <h1 class="d-inline">Tất cả sản phẩm</h1>
                        <a href="product_create.html" class="btn btn-sm btn-primary">Thêm sản phẩm</a>
                     </div>
                  </div>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="card">
                  <div class="card-header">
                     <select name="" id="" class="form-control d-inline" style="width:100px;">
                        <option value="">Xoá</option>
                     </select>
                     <button class="btn btn-sm btn-success">Áp dụng</button>
                  </div>
                  <div class="card-body">
                     <table class="table table-bordered" id="mytable">
                        <thead>
                           <tr>
                              <th class="text-center" style="width:30px;">
                                 <input type="checkbox">
                              </th>
                              <th class="text-center" style="width:130px;">Hình ảnh</th>
                              <th>Tên sản phẩm</th>
                              <th>Tên danh mục</th>
                              <th>Tên thương hiệu</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php if(count($list)>0):?>
                             <?php foreach ($list as $item):?>
                           <tr class="datarow">
                              <td>
                                 <input type="checkbox">
                              </td>
                              <td>
                                 <img src="../public/images/<?=$item->image;?>" alt="<?=$item->image;?>">
                              </td>
                              <td>
                                 <div class="name">
                                 <?=$item->name;?>
                                 </div>
                                 <div class="function_style">
                                 <?php if($item->status==1):?>
                                    <a class="text-success" href="index.php?option=product&cat=status
                                       &id=<?=$item->id;?>">Hiện</a> |
                                 <?php else :?>
                                    <a class="text-danger" href="index.php?option=product&cat=status
                                       &id=<?=$item->id;?>">Ẩn</a> |
                                 <?php endif ;?>
                                    <a href="index.php?option=product&cat=edit&id=<?=$item->id;?>">Chỉnh sửa</a> |
                                    <a href="index.php?option=product&cat=show&id=<?=$item->id;?>">Chi tiết</a> |
                                    <a href="index.php?option=product&cat=delete&id=<?=$item->id;?>">Xoá</a>
                                 </div>
                              </td>
                              <td><?=$item->slug;?></td>
                              <td><?=$item->slug;?></td>
                           </tr>
                           <?php endforeach ;?>
                           <?php endif ;?>
                        </tbody>
                     </table>
                  </div>
               </div>
            </section>
         </div>
      </form>
      <!-- END CONTENT-->
<?php require_once '../views/backend/footer.php';?>