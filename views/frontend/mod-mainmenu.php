<?php
use App\Models\Menu;
$mod_mainmenu = Menu::where([['parent_id','=','0'],['position','=','mainmenu'],['status','=',1]])
->orderBy('sort_order','ASC')
->get();
?>
<nav class="navbar navbar-expand-lg bg-main">
                  <div class="container-fluid">
                     <a class="navbar-brand d-block d-sm-none text-white" href="index.html">DIENLOISHOP</a>
                     <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                     </button>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                           <?php foreach($mod_mainmenu  as $rowmenu): ?>
                              <?php require 'views/frontend/mod-mainmenu-item.php'; ?>
                           <?php endforeach; ?>
                        </ul>
                     </div>
                  </div>
               </nav>