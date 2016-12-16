<ul class="menu">
    <?php foreach ($items as $item):if($item['title']):?>
     <li>
         <span class="glyph-item menu-item <?=$item['icon']?>"></span>
         <a href="<?=$item['url']?>"><?=$item['title']?></a>
     </li>
    <?php endif;endforeach;?>

</ul>