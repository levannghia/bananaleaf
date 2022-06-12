<div class="title"><?=(@$title_cat!='')?$title_cat:@$title_crumb?></div>
<?php if($idl == ''){ ?>
    <div id="background-menux" style="height: 600px; margin-bottom: 5%;"></div> 
<?php  }?>
<div class="content-main w-clear">
    
    <div class="loadkhung_video" >
    <?php if(isset($news) && count($news) > 0) { for($i=0;$i<count($news);$i++) { ?>
        <div>
            <a class="" data-fancybox="gallery" data-src="<?=UPLOAD_NEWS_L.$news[$i]['photo']?>" title="<?=$news[$i]['ten'.$lang]?>">
                <p><img style="width: 100%;" onerror="this.src='<?=THUMBS?>/480x360x2/assets/images/noimage.png';" src="<?=THUMBS?>/300x430x1/<?=UPLOAD_NEWS_L.$news[$i]['photo']?>" alt="<?=$news[$i]['ten'.$lang]?>" alt="<?=$news[$i]['ten'.$lang]?>"/></p>                
            </a>
            <!-- <div><a title="<?=$news[$i]['ten'.$lang]?>"><?=$news[$i]['ten'.$lang]?></a></div> -->
        </div>
    <?php } }?>
    </div>
    <div class="clear"></div>
    <div class="pagination-home"><?=(isset($paging) && $paging != '') ? $paging : ''?></div>
</div>