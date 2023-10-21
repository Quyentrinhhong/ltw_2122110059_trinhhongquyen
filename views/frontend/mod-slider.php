<?php
use App\Models\Banner;
$mod_slider = Banner::where([['position','=','slideshow'],['status','=',1]])
->orderBy('sort_order','ASC')
->get();
?>
<section class="hdl-slideshow">
      <div id="carouselExample" class="carousel slide">
         <div class="carousel-inner">
            <?php $index=1; ?>
            <?php foreach ($mod_slider as $slider): ?>
               <?php if($index==1): ?>
            <div class="carousel-item active">
               <img src="public/images/banner/<?=$slider->image;?>" class="d-block w-100" alt="<?=$slider->image;?>">
            </div>
                <?php else: ?>
            <div class="carousel-item">
               <img src="public/images/banner/<?=$slider->image;?>" class="d-block w-100" alt="<?=$slider->image;?>">
            </div>
                  <?php endif; ?>
            <?php $index++; ?>
            <?php endforeach; ?>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
         </button>
      </div>
   </section>