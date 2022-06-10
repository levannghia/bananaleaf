<div class="toolbar">

    <ul>

        <li>

            <a id="goidien" href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>" title="title">

                <img src="assets/images/icon-t1.png" alt="images">

                <span>Gọi điện</span>

            </a>

        </li>

        <li>

            <a id="nhantin" href="sms:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>" title="title">

                <img src="assets/images/icon-t2.png" alt="images">

                <span>Nhắn tin</span>

            </a>

        </li>

        <li>

            <a id="chatzalo" href="https://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>" title="title">

                <img src="assets/images/icon-t3.png" alt="images">

                <span>Zalo</span>

            </a>

        </li>

        <li>

            <a id="chatfb" href="<?=$optsetting['fanpage']?>" title="title">

                <img src="assets/images/icon-t4.png" alt="images">

                <span>Messenger</span>

            </a>

        </li>

    </ul>

</div>

<div class="support-online">

    <div class="support-content" style="display: block;">

        <a href="tel:<?=preg_replace('/[^0-9]/','',$optsetting['hotline']);?>" class="call-now" rel="nofollow">

            <i class="fab fa-whatsapp"></i>

            <div class="animated infinite zoomIn kenit-alo-circle"></div>

            <div class="animated infinite pulse kenit-alo-circle-fill"></div>

            <span>Hotline: <?=$optsetting['hotline']?></span>

        </a>

        <a class="mes" href="lien-he">

            <i class="fas fa-map-marker-alt"></i>

            <span><?=_chiduong?></span>

        </a>

        <a class="zalo" href="http://zalo.me/<?=preg_replace('/[^0-9]/','',$optsetting['zalo']);?>" target="_blank">

            <b>Zalo</b>

            <span>Zalo: <?=$optsetting['zalo']?></span>

        </a>

        <a class="sms" href="<?=$optsetting['fanpage']?>">

            <i class="fab fa-facebook-messenger"></i>

            <span>Chat messenger</span>

        </a>

    </div>

    <a class="btn-support">

        <div class="animated infinite zoomIn kenit-alo-circle"></div>

        <div class="animated infinite pulse kenit-alo-circle-fill"></div>

        <i class="fa fa-user-circle" aria-hidden="true"></i>

    </a>

</div>