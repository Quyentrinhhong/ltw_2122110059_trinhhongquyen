<?php
use App\Models\Banner;
$list = Banner::where('status','!=',0)
  ->orderBy('created_at','DESC')
  ->get();
?>

<?php require_once '../views/backend/header.php';?>
      <!-- CONTENT -->
      <div class="content-wrapper">
         <section class="content-header">
            <div class="container-fluid">
               <div class="row mb-2">
                  <div class="col-sm-12">
                     <h1 class="d-inline">Tất cả banner</h1>
                     <a href="banner_create.html" class="btn btn-sm btn-primary">Thêm banner</a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Main content -->
         <section class="content">
            <div class="card">
               <div class="card-header">
                  Noi dung
               </div>
               <div class="card-body">
                  <table class="table table-bordered" id="mytable">
                     <thead>
                        <tr>
                           <th class="text-center" style="width:30px;">
                              <input type="checkbox">
                           </th>
                           <th class="text-center" style="width:130px;">Hình ảnh</th>
                           <th>Tên banner</th>
                           <th>Liên kết</th>
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
                                 <a class="text-success" href="index.php?option=banner&cat=status&id=<?=$item->id;?>">Hiện</a> |
                              <?php else :?>
                                 <a class="text-danger" href="index.php?option=banner&cat=status&id=<?=$item->id;?>">Ẩn</a> |
                              <?php endif ;?>
                                 <a href="index.php?option=banner&cat=edit&id=<?=$item->id;?>">Chỉnh sửa</a> |
                                 <a href="index.php?option=banner&cat=show&id=<?=$item->id;?>">Chi tiết</a> |
                                 <a href="index.php?option=banner&cat=delete&id=<?=$item->id;?>">Xoá</a>
                              </div>
                           </td>
                           <td>lien-ket</td>
                        </tr>
                     <?php endforeach ;?>
                     <?php endif ;?>
                     </tbody>
                  </table>
               </div>
            </div>
         </section>
      </div>
      <!-- END CONTENT-->
<?php require_once '../views/backend/footer.php';?>