<div class="wrap_gioithieu " id="background-tieuchi">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title">Welcome to <br> <?= $setting['tenvi'] ?></div>
                <div class="gt_noidung"><?= htmlspecialchars_decode($gioithieu['mota' . $lang]) ?></div>
                <a class="xemgt" href="gioi-thieu">XEM THÊM</a>
            </div>
            <div class="col-md-6">
                <div class="gioi_thieu_img">
                    <div>
						<img onerror="this.src='<?= THUMBS ?>/150x150x1/assets/images/noimage.png';" src="<?= THUMBS ?>/540x405x1/<?= UPLOAD_NEWS_L . $gioithieu['photo'] ?>" alt="">
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php if ($pronb_list['numb'] > 0) { ?>
<div class="wrap_product">
    <div class="wrap_product_index">
        <div class="fixwidth">
            <div class="tieude_gt">
                <h2 class="cl-v">Món ăn nổi bật</h2>
                <p class="cl-w py-2">THỰC ĐƠN quán chúng tôi rất đa dạng và phong phú !!!</p>
            </div>
            <div class="owl-carousel owl-theme owl-product-nb">
                <?php foreach ($product_nb as $key => $v) { ?>
                <div class="prd__item">
                    <div class="prd__img">
                        <a href="<?= $v[$sluglang] ?>"><img
                                onerror="this.src='<?= THUMBS ?>/620x620x2/assets/images/noimage.png';"
                                src="<?= THUMBS ?>/600x600x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>"
                                alt="<?= $v['ten' . $lang] ?>" /></a>
                    </div>
                    <div class="prd__content">
                        <div class="prd__name">
                            <a href="<?= $v[$sluglang] ?>"><?= $v['ten' . $lang] ?></a>
                        </div>
                        <div class="prd__price">
                            Giá: <span><?= $v['gia'] ?></span>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php } ?>

<div class="br-index" id="background-thucdon">
    <div class="wrapper">
        <div class="tieude_gt">
            <h2 class="cl-v">Thực đơn <?= $setting['tenvi'] ?></h2>
            <p class="cl-w">THỰC ĐƠN quán chúng tôi rất đa dạng và phong phú !!!</p>
        </div>
        <div class="menulist">
            <?php foreach($pr_list as $v) {?>
            <p><a id="check_id_<?= $v['id'] ?>" class="hange-prd" data-id-list="<?= $v['id'] ?>" href=""><span><?= $v['ten'.$lang] ?></span></a></p>
            <?php } ?>
        </div>
        <div class="show_bot">

            <?php if($pronb_list['numb']>0){?>
                <div class="bd_index row paging-product-index" id="load_pro_0" data-id="0"></div>
            <?php }?>
            
        </div>
    </div>
</div>


<!-- do uong -->
<div class="prdid">
    <div class="wrapper container">
        <div class="tieude_sl">
            <h2>Đồ uống</h2>
            <p>THỰC ĐƠN quán chúng tôi rất đa dạng và phong phú !!!</p>
        </div>

        <div style="margin: 0 -20px;">
            <div class="owl-carousel owl-theme owl-product-drink">
                <?php foreach($product_nu as $v) { ?>
                <div style="padding: 0 20px;">
                    <div class="prd__item">
                        <div class="prd__img">
                            <a href="<?=$v['tenkhongdauvi']?>"><img
                                    onerror="this.src='<?=THUMBS?>/380x270x2/assets/images/noimage.png';"
                                    src="<?=THUMBS?>/255x255x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>"
                                    alt="<?=$v['ten'.$lang]?>" /></a>
                        </div>
                        <div class="prd__content">
                            <div class="prd__name"><?=$v['ten'.$lang]?></div>
                            <div class="prd__price">
                                Giá: <span><?=$v['gia']?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<!-- Vi sao -->
<div class="visao" id="background-dichvu">
    <div class="wrapper container">
        <div class="tieude_sl br-w">
            <h2 class="cl-v">Vì sao chọn <?= $setting['tenvi'] ?></h2>
        </div>
        <div style="margin: 0 -10px;">
            <div class="owl-carousel owl-theme owl-vs">
                <?php foreach($dichvu as $v){ ?>
                <div>
                    <div class="vs__item">
                        <a href="">
                            <div class="vs__img">
                                <a class="text-decoration-none" href="<?= $v[$sluglang] ?>"
                                    title="<?= $v['ten' . $lang] ?>"><img
                                        onerror="this.src='<?= THUMBS ?>/150x150x1/assets/images/noimage.png';"
                                        src="<?= THUMBS ?>/150x150x1/<?= UPLOAD_NEWS_L . $v['icon'] ?>"
                                        alt="<?= $v['ten' . $lang] ?>">
                                </a>
                            </div>

                            <div class="vs__content">
                                <div class="vs__name cl-w"><?= $v['ten'.$lang] ?></div>
                                <div class="vs__des cl-w" style="text-transform: none;"><?= $v['mota'.$lang] ?></div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<div class="wrap_bottom">
    <div class="fixwidth">
        <div class="d-flex justify-content-center flex-wrap">
            <div class="title-video">Tin tức mới</div>
            <div class="container py-4">
                <div class="owl-carousel owl-theme owl-product-nb">
                    <?php foreach($tintuc as $v){ ?>
                    <div>
                        <div class="news_bt w-clear">
                            <div class="pic-news scale-img">
                                <a class="text-decoration-none" href="<?= $v[$sluglang] ?>"
                                    title="<?= $v['ten' . $lang] ?>"><img
                                        onerror="this.src='<?= THUMBS ?>/150x150x1/assets/images/noimage.png';"
                                        src="<?= THUMBS ?>/240x200x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>"
                                        alt="<?= $v['ten' . $lang] ?>">
                                </a>
                            </div>
                            <div class="info-news">
                                <h3 class="name-news"><a class="text-decoration-none" href="<?= $v[$sluglang] ?>"
                                        title="<?= $v['ten' . $lang] ?>"><?= $v['ten' . $lang] ?></a></h3>
                                <div class="desc-news text-split"><?= $v['mota' . $lang] ?></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="fixwidth mb-4">
    <div class="video d-flex justify-content-center flex-wrap">
        <div class="title-video">Menu</div>
        <div class="owl-carousel owl-theme owl-vs">
            <?php foreach($hinhanh as $v){ ?>
            <div class="tailvideo_item1">
                <a class="" data-fancybox="gallery" data-src="<?=UPLOAD_NEWS_L.$v['photo']?>"
                    title="<?=$v['ten'.$lang]?>">
                    <p><img onerror="this.src='<?=THUMBS?>/480x360x2/assets/images/noimage.png';"
                            src="<?=THUMBS?>/300x430x1/<?=UPLOAD_NEWS_L.$v['photo']?>"
                            alt="<?=$v['ten'.$lang]?>" alt="<?=$v['ten'.$lang]?>" /></p>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<div class="fixwidth mb-4">
    <div class="video d-flex justify-content-center flex-wrap">
        <div class="title-video">Video Clip</div>
        <div class="owl-carousel owl-theme auto_video">
            <?php foreach($video as $v){ ?>
            <div class="tailvideo_item1">
                <a class="" data-fancybox="video" data-src="<?= $v['video'] ?>" title="<?= $v['ten' . $lang] ?>">
                    <p class="pic-video"><img onerror="this.src='<?= THUMBS ?>/480x360x2/assets/images/noimage.png';"
                            src="https://img.youtube.com/vi/<?= $func->getYoutube($v['video']) ?>/maxresdefault.jpg"
                            alt="<?= $v['ten' . $lang] ?>" /></p>
                </a>
                <div class="name-video"><a data-fancybox="video" data-src="<?= $v['video'] ?>"
                        title="<?= $v['ten' . $lang] ?>"><?= $v['ten' . $lang] ?></a></div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>