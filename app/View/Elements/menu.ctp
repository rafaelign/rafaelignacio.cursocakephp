<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <?php
            if (isset($itensMenu) && !empty($itensMenu)) {
                foreach($itensMenu as $item) {
                    echo '<a class=\'brand\' href=\''.$item['href'].'\'>';
                    echo '<i class=\''.$item['icon'].' icon-white\' style=\'position: relative;top: 3px;\'></i> '.$item['label'];
                    echo '</a>';
                }
            }
            ?>
        </div>
    </div>
</div>
