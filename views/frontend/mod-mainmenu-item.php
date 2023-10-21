<?php 
use App\Models\Menu;
$mod_mainmenu1 = Menu::where([['parent_id','=',$rowmenu->id],['position','=','mainmenu'],['status','=',1]])
->orderBy('sort_order','ASC')
->get();
?>
<?php if(count($mod_mainmenu1)>0): ?>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle text-white" href="<?=$rowmenu->link;?>" role="button"
    data-bs-toggle="dropdown" aria-expanded="false">
    <?=$rowmenu->name;?>
    </a>
        <ul class="dropdown-menu">
            <?php foreach($mod_mainmenu1 as $rowmenu1): ?>
             <li><a class="dropdown-item text-main" href="<?=$rowmenu1->link;?>"><?=$rowmenu1->name;?></a></li>
             <?php endforeach; ?>
        </ul>
    </li>
    <?php else: ?>
        <li class="nav-item">
            <a class="nav-link text-white" href="<?=$rowmenu->link;?>"><?=$rowmenu->name;?></a>
        </li>
        <?php endif; ?>

