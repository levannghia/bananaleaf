<?php if(count($slider)) { ?>
    <div class="wrap_slider">
    <div>
        <div class="slideshow">
           <?php if($slider['motavi'] == '') { ?>
           <p class="control-slideshow prev-slideshow transition"><i class="fas fa-chevron-left"></i></p>
            <div id="slider" class="owl-carousel owl-theme owl-slideshow">
                    <div class="item_slider">
                        <a href="<?=$v['link']?>" target="_blank" title="<?=$slider['ten'.$lang]?>"><img onerror="this.src='<?=THUMBS?>/910x380x2/assets/images/noimage.png';" src="<?=THUMBS?>/910x380x1/<?=UPLOAD_PHOTO_L.$slider['photo']?>" alt="<?=$slider['ten'.$lang]?>" title="<?=$slider['ten'.$lang]?>"/></a>
                        <?php if($slider['ten'.$lang]!=''){?>
                        <div class="slider_info1">
                            <h3 class="slider_info__name1"><?=$slider['ten'.$lang]?></h3>
                        </div>
                        <?php }?>
                    </div>
            </div>
            <p class="control-slideshow next-slideshow transition"><i class="fas fa-chevron-right"></i></p>
           <?php } else {?>
                <?= htmlspecialchars_decode($slider['motavi']) ?>
            <?php } ?>
        </div>
    </div>
    </div>
<?php } ?>

