<div class="item-scroller" data-items-shown="<?php echo $itemsShown; ?>" <?php echo $columns ? ' data-columns="' . $numberOfColumns .'"' : '' ;?>>
    <div class="scroller-box<?php echo $columns ? ' flex-display' : '';?>">
        <?php $i=0; $count=0; $scrollBoxArray = count(get_field('scroll_box')); while(have_rows('scroll_box')): the_row(); $i++; ?>
        <?php echo $itemsGrouped ? ($count%$itemsInGroup == 0 ? '<div class="scroll-item-box'. ($columns ? ' flex-display' : '') .'">':'') : '<div class="scroll-item-box">'; ?>
        <div class="scroll-item<?php echo $columns ? ' flex-'. $numberOfColumns .'-col-shrink' : ''; ?>">

        </div>
        <?php echo $itemsGrouped ? ($count%$itemsInGroup == $itemsInGroup - 1 || $count + 1 == $scrollBoxArray ? '</div>':'') : '</div>'; $count++; ?>
        <?php endwhile; ?>
    </div>
    <div class="scrolls">
        <div class="scroll-up"><span class="fa fa-chevron-up" aria-hidden="true"></span></div>
        <div class="scroll-down"><span class="fa fa-chevron-down" aria-hidden="true"></span></div>
    </div>
</div>
