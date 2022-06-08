<div class="header-cachtop">

    <div class="header-top">
        <div class="fixwidth d-flex justify-content-between align-self-center flex-wrap">
            <div class="menu_mobi align-self-center">
                <p class="icon_menu_mobi"><i class="fas fa-bars"></i></p>
                <?php /*<p class="menu_baophu"></p>*/?>
                <a href="" class="home_mobi">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </a>
            </div>
            <div class="menu_mobi_add">
                <div class="frm_timkiem">
                    <input type="text" class="input" id="keyword2" placeholder="Tìm kiếm"
                        onkeypress="doEnter(event,'keyword2');">
                    <button type="submit" value="" class="nut_tim" onclick="onSearch('keyword2');"><i
                            class="far fa-search"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="header-height">
    <div id="menu_top">
        <div class="fixwidth clearfix">
            <div class="menu">
                <a class="header_logo" href=""><img onerror="this.src='<?=THUMBS?>/0x100x2/assets/images/noimage.png';"
                        src="<?=THUMBS?>/0x100x2/<?=UPLOAD_PHOTO_L.$logo['photo']?>" /></a>
                <ul class="menu_cap_cha d-flex justify-content-between align-items-center">
                    <li class="menulicha <?= $source == 'index' ? 'active' : '' ?>"><a href="" title="TRANG CHỦ">TRANG
                            CHỦ</a></li>
                    <li class="menulicha <?= $com == 'gioi-thieu' ? 'active' : '' ?>"><a href="gioi-thieu"
                            title="GIỚI THIỆU">GIỚI THIỆU</a></li>
                    <li class="menulicha <?= $com == 'san-pham' ? 'active' : '' ?>"><a href="san-pham"
                            title="Thực Đơn">THỰC ĐƠN</a>
                        <?php if ($splistmenu) { ?>
                        <ul class="menu_cap_con">
                            <?php foreach ($splistmenu as $c => $cat) { ?>
                            <li><a title="<?= $cat['ten' . $lang] ?>"
                                    href="<?= $cat[$sluglang] ?>"><?= $cat['ten' . $lang] ?></a>
                                <?php
                                                $spcatmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_cat where type = ? and id_list = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat['id']));
                                                if (count($spcatmenu) > 0) { ?>
                                <ul class="menu_cap_2">
                                    <?php foreach ($spcatmenu as $c1 => $cat1) {
                                                            $spitemmenu = $d->rawQuery("select ten$lang, tenkhongdauvi, id,photo from #_product_item where type = ? and id_cat = ? and hienthi > 0 order by stt,id desc", array('san-pham', $cat1['id']));
                                                        ?>
                                    <li><a title="<?= $cat1['ten' . $lang] ?>"
                                            href="<?= $cat1[$sluglang] ?>"><?= $cat1['ten' . $lang] ?></a>
                                        <?php if (count($spitemmenu) > 0) { ?>
                                        <ul class="menu_cap_3">
                                            <?php foreach ($spitemmenu as $c1 => $cat2) { ?>
                                            <li><a title="<?= $cat2['ten' . $lang] ?>"
                                                    href="<?= $cat2[$sluglang] ?>"><?= $cat2['ten' . $lang] ?></a></li>
                                            <?php } ?>
                                        </ul>
                                        <?php } ?>

                                    </li>
                                    <?php } ?>
                                </ul>
                                <?php } ?>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>

                    <li class="menulicha <?= $com == 'hinh-anh' ? 'active' : '' ?>"><a href="hinh-anh"
                            title="CÔNG TRÌNH">HÌNH ẢNH</a>
                        <?php if ($ctlistmenu) { ?>
                        <ul class="menu_cap_con">
                            <?php foreach ($ctlistmenu as $c => $cat) { ?>
                            <li><a title="<?= $cat['ten' . $lang] ?>"
                                    href="<?= $cat[$sluglang] ?>"><?= $cat['ten' . $lang] ?></a></li>
                            <?php } ?>
                        </ul>
                        <?php } ?>
                    </li>
                    <li class="menulicha <?= $com == 'tin-tuc' ? 'active' : '' ?>"><a href="tin-tuc" title="TIN TỨC">TIN TỨC</a></li>
                    <li class="menulicha <?= $com == 'video' ? 'active' : '' ?>"><a href="video" title="VIDEO">VIDEO</a>
                    </li>
                    <li class="menulicha <?= $com == 'lien-he' ? 'active' : '' ?>"><a href="lien-he"
                            title="LIÊN HỆ">LIÊN HỆ</a></li>

                </ul>
            </div>
        </div>
    </div>
</div>