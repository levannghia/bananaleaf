<!-- <div class="wrap_socialpage">
    <div class="fixwidth">
        <div class="owl-carousel owl-theme auto_social">
            <?php foreach ($socialpage as $v) { ?>
                <div class="socialpage">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="socialpage-img">
                            <a href="<?= $v['link'] ?>" target="_blank" title="<?= $v['ten' . $lang] ?>"><img onerror="this.src='<?= THUMBS ?>/55x55x2/assets/images/noimage.png';" src="<?= THUMBS ?>/0x55x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>"/></a>
                        </div>
                        <div class="socialpage-name">
                            <a href="<?= $v['link'] ?>" target="_blank" title="<?= $v['ten' . $lang] ?>"><?= $v['ten' . $lang] ?></a>
                            
                        </div>
                    </div>
                    <div class="mota_socialpage"><?= $v['mota' . $lang] ?></div>
                    <a href="<?= $v['link'] ?>" class="socialpage-btn" target="_blank" title="<?= $v['ten' . $lang] ?>">Tham gia ngay</a>
                </div>
                
            <?php } ?>
        </div>
    </div>
</div> -->
<!-- <div class="boxfooter_container " id="background-footer">
    <div class="footer_name"><?= $setting['tenvi'] ?></div>
    <div class="fixwidth d-flex justify-content-between flex-wrap align-items-center">
        <div class="boxfooter_left d-flex justify-content-between align-items-center">
            <div class="ft0icon"><img src="assets/images/img-data/icon1.png"></div>
            <div class="ft0icon_info"><?= $optsetting['diachi'] ?></div>
        </div>

        <div class="boxfooter_middle d-flex justify-content-between align-items-center">
            <div class="ft0icon"><img src="assets/images/img-data/icon2.png"></div>
            <div class="ft0icon_info">
                Hotline:<br>
                <?= $optsetting['hotline'] ?>

            </div>
        </div>
        <div class="boxfooter_middle1 d-flex justify-content-between align-items-center">
            <div class="ft0icon"><img src="assets/images/img-data/icon3.png"></div>
            <div class="ft0icon_info">
                Email liên hệ:<br>
                <?= $optsetting['email'] ?>

            </div>
        </div>
        <div class="boxfooter_right d-flex justify-content-between align-items-center">
            <div class="ft0icon"><img src="assets/images/img-data/icon4.png"></div>
            <div class="ft0icon_info">
                Website:<br>
                <?= $optsetting['website'] ?>

            </div>
        </div>
    </div>
    <div class="boxfooter_bottom">
        <?= $optsetting['copyright'] ?>
    </div>
</div> -->
<footer>
    <div class="footer">
        <div class="container" style="margin: 0 auto;">
            <div class="row" style="margin: 0 -20px;">
                <div class="col-md-4" style="padding-top: 40px; padding-bottom: 40px; margin-bottom: 20px;">
                    <div class="footer__name"><?= $setting['tenvi'] ?></div>
                    <div class="footer__address">
                        <?=htmlspecialchars_decode($footer['noidung'.$lang])?>
                    </div>
                    <!-- <div class="footer__title">LIÊN KẾT</div> -->
                    <div class="mxhf">
                        <ul>
                            <?php foreach ($socialpage as $v) { ?>
                            <li><a href="<?= $v['link'] ?>" target="_blank" title="<?= $v['ten' . $lang] ?>"><img
                                        onerror="this.src='<?= THUMBS ?>/55x55x2/assets/images/noimage.png';"
                                        src="<?= THUMBS ?>/0x36x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>"
                                        alt="<?= $v['ten' . $lang] ?>" title="<?= $v['ten' . $lang] ?>" /></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php include SOURCES."contact.php"; ?>
                <div class="col-md-4" style="padding-bottom: 40px; margin-bottom: 20px;">
                    <div class="bg-nhantin">
                        <div class="nhantin__title">
                            ĐĂNG KÝ NHẬN TIN
                        </div>
                        <div class="footer__nhantin">
                            <div class="footer__nhantin_box">
                                <form name="frmdk" action="" method="post" action="" enctype="multipart/form-data">
                                    <input type="text" class="form-control footer__nhantin--txt" id="ten" name="ten"
                                        placeholder="<?=hoten?>" required />
                                    <div class="invalid-feedback"><?=vuilongnhaphoten?></div>
                                    <input type="number" class="form-control footer__nhantin--txt" id="dienthoai" name="dienthoai"
                                        placeholder="<?=sodienthoai?>" required />
                                    <div class="invalid-feedback"><?=vuilongnhapsodienthoai?></div>
                                    <input type="text" class="form-control footer__nhantin--txt" id="diachi" name="diachi"
                                        placeholder="<?=diachi?>" required />
                                    <div class="invalid-feedback"><?=vuilongnhapdiachi?></div>
                                    <input type="email" class="form-control footer__nhantin--txt" id="email" name="email" placeholder="Email"
                                        required />
                                    <div class="invalid-feedback"><?=vuilongnhapdiachiemail?></div>
                                    <textarea class="form-control footer__nhantin--txt" id="noidung" name="noidung"
                                        placeholder="<?=noidung?>" required /></textarea>
                                    <div class="invalid-feedback"><?=vuilongnhapnoidung?></div>


                                    <input type="hidden" name="recaptcha_response" id="recaptchaResponse"
                                        class="recaptchaResponse"
                                        value="HFZ3J1dAtULzcLSE1ASVhRSBoBBT40cDIHKjEgZ3oRKAQfNA8jNwc1ZgYucyhVIS0wDglsAwEGTkdMUQcvVQM2ZS80QikkRGdZVH5fenQ2bS9UI2YiRSY2c1FRGAFyAwEGDwZmKzMTR3NDdk4zBVZaFAB9eUxuFFkXSwMiF0t8LzcLCx1w">
                                    <input type="hidden" name="dknt" value="1">
                                    <input type="hidden" name="contact" value="contact">
                                    <input type="submit" name="submit-contact" class="footer__nhantin--btn "
                                        value="Gửi đi">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"
                    style="padding-top: 40px; padding-bottom: 40px; margin-bottom: 20px; float: right;">
                    <div class="footer__title mrf">
                        FANPAGE
                    </div>
                    <div class="fan">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href= <?= $optsetting['fanpage'] ?>&tabs=timeline&width=370&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=590530215089180"
                            width="370" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowfullscreen="true"
                            allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-contact1"><?= htmlspecialchars_decode($optsetting['toado_iframe']) ?></div>
</footer>