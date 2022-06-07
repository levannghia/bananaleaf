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

<style>
.support-online {
    position: fixed;
    z-index: 999;
    right: -6px;
    bottom: 100px
}

.support-online a {
    position: relative;
    margin: 20px;
    text-align: left;
    width: 40px;
    height: 40px
}

.support-online i {
    width: 40px;
    height: 40px;
    background: #f38321;
    color: #fff;
    border-radius: 100%;
    font-size: 20px;
    text-align: center;
    line-height: 1.9;
    position: relative;
    z-index: 999
}

.support-online a span {
    border-radius: 2px;
    text-align: center;
    background: #67b634;
    padding: 9px;
    display: none;
    width: 180px;
    margin-left: 10px;
    position: absolute;
    color: #fff;
    z-index: 999;
    top: 0;
    right: 40px;
    transition: all .2s ease-in-out 0;
    -moz-animation: headerAnimation .7s 1;
    -webkit-animation: headerAnimation .7s 1;
    -o-animation: headerAnimation .7s 1;
    animation: headerAnimation .7s 1
}

.support-online a:hover span {
    display: block
}

.support-online a {
    display: block
}

.support-online a span:before {
    content: "";
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 10px 10px 10px 0;
    border-color: transparent #67b634 transparent transparent;
    position: absolute;
    left: -10px;
    top: 10px
}

.kenit-alo-circle-fill {
    width: 60px;
    height: 60px;
    top: -10px;
    position: absolute;
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    border: 2px solid transparent;
    -webkit-transition: all .5s;
    -moz-transition: all .5s;
    -o-transition: all .5s;
    transition: all .5s;
    background-color: rgba(0, 175, 242, 0.5);
    opacity: .75;
    right: -10px
}

.kenit-alo-circle {
    width: 50px;
    height: 50px;
    top: -5px;
    right: -5px;
    position: absolute;
    background-color: transparent;
    -webkit-border-radius: 100%;
    -moz-border-radius: 100%;
    border-radius: 100%;
    border: 2px solid rgba(30, 30, 30, 0.4);
    opacity: .1;
    border-color: #0089B9;
    opacity: .5
}

.support-online .btn-support {
    cursor: pointer
}

.sms i {
    background: red
}

.call-now i {
    background: green
}

.mes i {
    background: orange
}

.zalo {
    text-decoration: none
}

.zalo b {
    background: #087be0;
    width: 42px;
    height: 42px;
    border-radius: 50%;
    display: block;
    line-height: 42px;
    text-align: center;
    color: #fff;
    text-decoration: none;
    font-size: 15px
}



.animated {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both
}

.animated.infinite {
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite
}

.animated.hinge {
    -webkit-animation-duration: 2s;
    animation-duration: 2s
}

.animated.bounceIn,
.animated.bounceOut,
.animated.flipOutX,
.animated.flipOutY {
    -webkit-animation-duration: .75s;
    animation-duration: .75s
}

@-webkit-keyframes bounce {

    0%,
    20%,
    53%,
    80%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    40%,
    43% {
        -webkit-transform: translate3d(0, -30px, 0);
        transform: translate3d(0, -30px, 0)
    }

    40%,
    43%,
    70% {
        -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
        animation-timing-function: cubic-bezier(.755, .05, .855, .06)
    }

    70% {
        -webkit-transform: translate3d(0, -15px, 0);
        transform: translate3d(0, -15px, 0)
    }

    90% {
        -webkit-transform: translate3d(0, -4px, 0);
        transform: translate3d(0, -4px, 0)
    }
}

@keyframes bounce {

    0%,
    20%,
    53%,
    80%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    40%,
    43% {
        -webkit-transform: translate3d(0, -30px, 0);
        transform: translate3d(0, -30px, 0)
    }

    40%,
    43%,
    70% {
        -webkit-animation-timing-function: cubic-bezier(.755, .05, .855, .06);
        animation-timing-function: cubic-bezier(.755, .05, .855, .06)
    }

    70% {
        -webkit-transform: translate3d(0, -15px, 0);
        transform: translate3d(0, -15px, 0)
    }

    90% {
        -webkit-transform: translate3d(0, -4px, 0);
        transform: translate3d(0, -4px, 0)
    }
}

.bounce {
    -webkit-animation-name: bounce;
    animation-name: bounce;
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom
}

@-webkit-keyframes flash {

    0%,
    50%,
    to {
        opacity: 1
    }

    25%,
    75% {
        opacity: 0
    }
}

@keyframes flash {

    0%,
    50%,
    to {
        opacity: 1
    }

    25%,
    75% {
        opacity: 0
    }
}

.flash {
    -webkit-animation-name: flash;
    animation-name: flash
}

@-webkit-keyframes pulse {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }

    50% {
        -webkit-transform: scale3d(1.05, 1.05, 1.05);
        transform: scale3d(1.05, 1.05, 1.05)
    }

    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }
}

@keyframes pulse {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }

    50% {
        -webkit-transform: scale3d(1.05, 1.05, 1.05);
        transform: scale3d(1.05, 1.05, 1.05)
    }

    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }
}

.pulse {
    -webkit-animation-name: pulse;
    animation-name: pulse
}

@-webkit-keyframes rubberBand {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }

    30% {
        -webkit-transform: scale3d(1.25, .75, 1);
        transform: scale3d(1.25, .75, 1)
    }

    40% {
        -webkit-transform: scale3d(.75, 1.25, 1);
        transform: scale3d(.75, 1.25, 1)
    }

    50% {
        -webkit-transform: scale3d(1.15, .85, 1);
        transform: scale3d(1.15, .85, 1)
    }

    65% {
        -webkit-transform: scale3d(.95, 1.05, 1);
        transform: scale3d(.95, 1.05, 1)
    }

    75% {
        -webkit-transform: scale3d(1.05, .95, 1);
        transform: scale3d(1.05, .95, 1)
    }

    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }
}

@keyframes rubberBand {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }

    30% {
        -webkit-transform: scale3d(1.25, .75, 1);
        transform: scale3d(1.25, .75, 1)
    }

    40% {
        -webkit-transform: scale3d(.75, 1.25, 1);
        transform: scale3d(.75, 1.25, 1)
    }

    50% {
        -webkit-transform: scale3d(1.15, .85, 1);
        transform: scale3d(1.15, .85, 1)
    }

    65% {
        -webkit-transform: scale3d(.95, 1.05, 1);
        transform: scale3d(.95, 1.05, 1)
    }

    75% {
        -webkit-transform: scale3d(1.05, .95, 1);
        transform: scale3d(1.05, .95, 1)
    }

    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }
}

.rubberBand {
    -webkit-animation-name: rubberBand;
    animation-name: rubberBand
}

@-webkit-keyframes shake {

    0%,
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translate3d(-10px, 0, 0);
        transform: translate3d(-10px, 0, 0)
    }

    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translate3d(10px, 0, 0);
        transform: translate3d(10px, 0, 0)
    }
}

@keyframes shake {

    0%,
    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    10%,
    30%,
    50%,
    70%,
    90% {
        -webkit-transform: translate3d(-10px, 0, 0);
        transform: translate3d(-10px, 0, 0)
    }

    20%,
    40%,
    60%,
    80% {
        -webkit-transform: translate3d(10px, 0, 0);
        transform: translate3d(10px, 0, 0)
    }
}

.shake {
    -webkit-animation-name: shake;
    animation-name: shake
}

@-webkit-keyframes headShake {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    6.5% {
        -webkit-transform: translateX(-6px) rotateY(-9deg);
        transform: translateX(-6px) rotateY(-9deg)
    }

    18.5% {
        -webkit-transform: translateX(5px) rotateY(7deg);
        transform: translateX(5px) rotateY(7deg)
    }

    31.5% {
        -webkit-transform: translateX(-3px) rotateY(-5deg);
        transform: translateX(-3px) rotateY(-5deg)
    }

    43.5% {
        -webkit-transform: translateX(2px) rotateY(3deg);
        transform: translateX(2px) rotateY(3deg)
    }

    50% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}

@keyframes headShake {
    0% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }

    6.5% {
        -webkit-transform: translateX(-6px) rotateY(-9deg);
        transform: translateX(-6px) rotateY(-9deg)
    }

    18.5% {
        -webkit-transform: translateX(5px) rotateY(7deg);
        transform: translateX(5px) rotateY(7deg)
    }

    31.5% {
        -webkit-transform: translateX(-3px) rotateY(-5deg);
        transform: translateX(-3px) rotateY(-5deg)
    }

    43.5% {
        -webkit-transform: translateX(2px) rotateY(3deg);
        transform: translateX(2px) rotateY(3deg)
    }

    50% {
        -webkit-transform: translateX(0);
        transform: translateX(0)
    }
}

.headShake {
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    -webkit-animation-name: headShake;
    animation-name: headShake
}

@-webkit-keyframes swing {
    20% {
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg)
    }

    40% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg)
    }

    60% {
        -webkit-transform: rotate(5deg);
        transform: rotate(5deg)
    }

    80% {
        -webkit-transform: rotate(-5deg);
        transform: rotate(-5deg)
    }

    to {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }
}

@keyframes swing {
    20% {
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg)
    }

    40% {
        -webkit-transform: rotate(-10deg);
        transform: rotate(-10deg)
    }

    60% {
        -webkit-transform: rotate(5deg);
        transform: rotate(5deg)
    }

    80% {
        -webkit-transform: rotate(-5deg);
        transform: rotate(-5deg)
    }

    to {
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }
}

.swing {
    -webkit-transform-origin: top center;
    transform-origin: top center;
    -webkit-animation-name: swing;
    animation-name: swing
}

@-webkit-keyframes tada {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }

    10%,
    20% {
        -webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
        transform: scale3d(.9, .9, .9) rotate(-3deg)
    }

    30%,
    50%,
    70%,
    90% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
        transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
    }

    40%,
    60%,
    80% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
        transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
    }

    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }
}

@keyframes tada {
    0% {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }

    10%,
    20% {
        -webkit-transform: scale3d(.9, .9, .9) rotate(-3deg);
        transform: scale3d(.9, .9, .9) rotate(-3deg)
    }

    30%,
    50%,
    70%,
    90% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(3deg);
        transform: scale3d(1.1, 1.1, 1.1) rotate(3deg)
    }

    40%,
    60%,
    80% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg);
        transform: scale3d(1.1, 1.1, 1.1) rotate(-3deg)
    }

    to {
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }
}

.tada {
    -webkit-animation-name: tada;
    animation-name: tada
}

@-webkit-keyframes wobble {
    0% {
        -webkit-transform: none;
        transform: none
    }

    15% {
        -webkit-transform: translate3d(-25%, 0, 0) rotate(-5deg);
        transform: translate3d(-25%, 0, 0) rotate(-5deg)
    }

    30% {
        -webkit-transform: translate3d(20%, 0, 0) rotate(3deg);
        transform: translate3d(20%, 0, 0) rotate(3deg)
    }

    45% {
        -webkit-transform: translate3d(-15%, 0, 0) rotate(-3deg);
        transform: translate3d(-15%, 0, 0) rotate(-3deg)
    }

    60% {
        -webkit-transform: translate3d(10%, 0, 0) rotate(2deg);
        transform: translate3d(10%, 0, 0) rotate(2deg)
    }

    75% {
        -webkit-transform: translate3d(-5%, 0, 0) rotate(-1deg);
        transform: translate3d(-5%, 0, 0) rotate(-1deg)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

@keyframes wobble {
    0% {
        -webkit-transform: none;
        transform: none
    }

    15% {
        -webkit-transform: translate3d(-25%, 0, 0) rotate(-5deg);
        transform: translate3d(-25%, 0, 0) rotate(-5deg)
    }

    30% {
        -webkit-transform: translate3d(20%, 0, 0) rotate(3deg);
        transform: translate3d(20%, 0, 0) rotate(3deg)
    }

    45% {
        -webkit-transform: translate3d(-15%, 0, 0) rotate(-3deg);
        transform: translate3d(-15%, 0, 0) rotate(-3deg)
    }

    60% {
        -webkit-transform: translate3d(10%, 0, 0) rotate(2deg);
        transform: translate3d(10%, 0, 0) rotate(2deg)
    }

    75% {
        -webkit-transform: translate3d(-5%, 0, 0) rotate(-1deg);
        transform: translate3d(-5%, 0, 0) rotate(-1deg)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

.wobble {
    -webkit-animation-name: wobble;
    animation-name: wobble
}

@-webkit-keyframes jello {

    0%,
    11.1%,
    to {
        -webkit-transform: none;
        transform: none
    }

    22.2% {
        -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
        transform: skewX(-12.5deg) skewY(-12.5deg)
    }

    33.3% {
        -webkit-transform: skewX(6.25deg) skewY(6.25deg);
        transform: skewX(6.25deg) skewY(6.25deg)
    }

    44.4% {
        -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
        transform: skewX(-3.125deg) skewY(-3.125deg)
    }

    55.5% {
        -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
        transform: skewX(1.5625deg) skewY(1.5625deg)
    }

    66.6% {
        -webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
        transform: skewX(-.78125deg) skewY(-.78125deg)
    }

    77.7% {
        -webkit-transform: skewX(.390625deg) skewY(.390625deg);
        transform: skewX(.390625deg) skewY(.390625deg)
    }

    88.8% {
        -webkit-transform: skewX(-.1953125deg) skewY(-.1953125deg);
        transform: skewX(-.1953125deg) skewY(-.1953125deg)
    }
}

@keyframes jello {

    0%,
    11.1%,
    to {
        -webkit-transform: none;
        transform: none
    }

    22.2% {
        -webkit-transform: skewX(-12.5deg) skewY(-12.5deg);
        transform: skewX(-12.5deg) skewY(-12.5deg)
    }

    33.3% {
        -webkit-transform: skewX(6.25deg) skewY(6.25deg);
        transform: skewX(6.25deg) skewY(6.25deg)
    }

    44.4% {
        -webkit-transform: skewX(-3.125deg) skewY(-3.125deg);
        transform: skewX(-3.125deg) skewY(-3.125deg)
    }

    55.5% {
        -webkit-transform: skewX(1.5625deg) skewY(1.5625deg);
        transform: skewX(1.5625deg) skewY(1.5625deg)
    }

    66.6% {
        -webkit-transform: skewX(-.78125deg) skewY(-.78125deg);
        transform: skewX(-.78125deg) skewY(-.78125deg)
    }

    77.7% {
        -webkit-transform: skewX(.390625deg) skewY(.390625deg);
        transform: skewX(.390625deg) skewY(.390625deg)
    }

    88.8% {
        -webkit-transform: skewX(-.1953125deg) skewY(-.1953125deg);
        transform: skewX(-.1953125deg) skewY(-.1953125deg)
    }
}

.jello {
    -webkit-animation-name: jello;
    animation-name: jello;
    -webkit-transform-origin: center;
    transform-origin: center
}

@-webkit-keyframes bounceIn {

    0%,
    20%,
    40%,
    60%,
    80%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
    }

    0% {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
    }

    20% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1)
    }

    40% {
        -webkit-transform: scale3d(.9, .9, .9);
        transform: scale3d(.9, .9, .9)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03, 1.03, 1.03);
        transform: scale3d(1.03, 1.03, 1.03)
    }

    80% {
        -webkit-transform: scale3d(.97, .97, .97);
        transform: scale3d(.97, .97, .97)
    }

    to {
        opacity: 1;
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }
}

@keyframes bounceIn {

    0%,
    20%,
    40%,
    60%,
    80%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
    }

    0% {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
    }

    20% {
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1)
    }

    40% {
        -webkit-transform: scale3d(.9, .9, .9);
        transform: scale3d(.9, .9, .9)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(1.03, 1.03, 1.03);
        transform: scale3d(1.03, 1.03, 1.03)
    }

    80% {
        -webkit-transform: scale3d(.97, .97, .97);
        transform: scale3d(.97, .97, .97)
    }

    to {
        opacity: 1;
        -webkit-transform: scaleX(1);
        transform: scaleX(1)
    }
}

.bounceIn {
    -webkit-animation-name: bounceIn;
    animation-name: bounceIn
}

@-webkit-keyframes bounceInDown {

    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -3000px, 0);
        transform: translate3d(0, -3000px, 0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0, 25px, 0);
        transform: translate3d(0, 25px, 0)
    }

    75% {
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0)
    }

    90% {
        -webkit-transform: translate3d(0, 5px, 0);
        transform: translate3d(0, 5px, 0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

@keyframes bounceInDown {

    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -3000px, 0);
        transform: translate3d(0, -3000px, 0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0, 25px, 0);
        transform: translate3d(0, 25px, 0)
    }

    75% {
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0)
    }

    90% {
        -webkit-transform: translate3d(0, 5px, 0);
        transform: translate3d(0, 5px, 0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

.bounceInDown {
    -webkit-animation-name: bounceInDown;
    animation-name: bounceInDown
}

@-webkit-keyframes bounceInLeft {

    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(-3000px, 0, 0);
        transform: translate3d(-3000px, 0, 0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(25px, 0, 0);
        transform: translate3d(25px, 0, 0)
    }

    75% {
        -webkit-transform: translate3d(-10px, 0, 0);
        transform: translate3d(-10px, 0, 0)
    }

    90% {
        -webkit-transform: translate3d(5px, 0, 0);
        transform: translate3d(5px, 0, 0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

@keyframes bounceInLeft {

    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(-3000px, 0, 0);
        transform: translate3d(-3000px, 0, 0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(25px, 0, 0);
        transform: translate3d(25px, 0, 0)
    }

    75% {
        -webkit-transform: translate3d(-10px, 0, 0);
        transform: translate3d(-10px, 0, 0)
    }

    90% {
        -webkit-transform: translate3d(5px, 0, 0);
        transform: translate3d(5px, 0, 0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

.bounceInLeft {
    -webkit-animation-name: bounceInLeft;
    animation-name: bounceInLeft
}

@-webkit-keyframes bounceInRight {

    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(3000px, 0, 0);
        transform: translate3d(3000px, 0, 0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(-25px, 0, 0);
        transform: translate3d(-25px, 0, 0)
    }

    75% {
        -webkit-transform: translate3d(10px, 0, 0);
        transform: translate3d(10px, 0, 0)
    }

    90% {
        -webkit-transform: translate3d(-5px, 0, 0);
        transform: translate3d(-5px, 0, 0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

@keyframes bounceInRight {

    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(3000px, 0, 0);
        transform: translate3d(3000px, 0, 0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(-25px, 0, 0);
        transform: translate3d(-25px, 0, 0)
    }

    75% {
        -webkit-transform: translate3d(10px, 0, 0);
        transform: translate3d(10px, 0, 0)
    }

    90% {
        -webkit-transform: translate3d(-5px, 0, 0);
        transform: translate3d(-5px, 0, 0)
    }

    to {
        -webkit-transform: none;
        transform: none
    }
}

.bounceInRight {
    -webkit-animation-name: bounceInRight;
    animation-name: bounceInRight
}

@-webkit-keyframes bounceInUp {

    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 3000px, 0);
        transform: translate3d(0, 3000px, 0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0, -20px, 0);
        transform: translate3d(0, -20px, 0)
    }

    75% {
        -webkit-transform: translate3d(0, 10px, 0);
        transform: translate3d(0, 10px, 0)
    }

    90% {
        -webkit-transform: translate3d(0, -5px, 0);
        transform: translate3d(0, -5px, 0)
    }

    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

@keyframes bounceInUp {

    0%,
    60%,
    75%,
    90%,
    to {
        -webkit-animation-timing-function: cubic-bezier(.215, .61, .355, 1);
        animation-timing-function: cubic-bezier(.215, .61, .355, 1)
    }

    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 3000px, 0);
        transform: translate3d(0, 3000px, 0)
    }

    60% {
        opacity: 1;
        -webkit-transform: translate3d(0, -20px, 0);
        transform: translate3d(0, -20px, 0)
    }

    75% {
        -webkit-transform: translate3d(0, 10px, 0);
        transform: translate3d(0, 10px, 0)
    }

    90% {
        -webkit-transform: translate3d(0, -5px, 0);
        transform: translate3d(0, -5px, 0)
    }

    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

.bounceInUp {
    -webkit-animation-name: bounceInUp;
    animation-name: bounceInUp
}

@-webkit-keyframes bounceOut {
    20% {
        -webkit-transform: scale3d(.9, .9, .9);
        transform: scale3d(.9, .9, .9)
    }

    50%,
    55% {
        opacity: 1;
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
    }
}

@keyframes bounceOut {
    20% {
        -webkit-transform: scale3d(.9, .9, .9);
        transform: scale3d(.9, .9, .9)
    }

    50%,
    55% {
        opacity: 1;
        -webkit-transform: scale3d(1.1, 1.1, 1.1);
        transform: scale3d(1.1, 1.1, 1.1)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
    }
}

.bounceOut {
    -webkit-animation-name: bounceOut;
    animation-name: bounceOut
}

@-webkit-keyframes bounceOutDown {
    20% {
        -webkit-transform: translate3d(0, 10px, 0);
        transform: translate3d(0, 10px, 0)
    }

    40%,
    45% {
        opacity: 1;
        -webkit-transform: translate3d(0, -20px, 0);
        transform: translate3d(0, -20px, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0);
        transform: translate3d(0, 2000px, 0)
    }
}

@keyframes bounceOutDown {
    20% {
        -webkit-transform: translate3d(0, 10px, 0);
        transform: translate3d(0, 10px, 0)
    }

    40%,
    45% {
        opacity: 1;
        -webkit-transform: translate3d(0, -20px, 0);
        transform: translate3d(0, -20px, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0);
        transform: translate3d(0, 2000px, 0)
    }
}

.bounceOutDown {
    -webkit-animation-name: bounceOutDown;
    animation-name: bounceOutDown
}

@-webkit-keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px, 0, 0);
        transform: translate3d(20px, 0, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0)
    }
}

@keyframes bounceOutLeft {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(20px, 0, 0);
        transform: translate3d(20px, 0, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0)
    }
}

.bounceOutLeft {
    -webkit-animation-name: bounceOutLeft;
    animation-name: bounceOutLeft
}

@-webkit-keyframes bounceOutRight {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(-20px, 0, 0);
        transform: translate3d(-20px, 0, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0);
        transform: translate3d(2000px, 0, 0)
    }
}

@keyframes bounceOutRight {
    20% {
        opacity: 1;
        -webkit-transform: translate3d(-20px, 0, 0);
        transform: translate3d(-20px, 0, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0);
        transform: translate3d(2000px, 0, 0)
    }
}

.bounceOutRight {
    -webkit-animation-name: bounceOutRight;
    animation-name: bounceOutRight
}

@-webkit-keyframes bounceOutUp {
    20% {
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0)
    }

    40%,
    45% {
        opacity: 1;
        -webkit-transform: translate3d(0, 20px, 0);
        transform: translate3d(0, 20px, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0);
        transform: translate3d(0, -2000px, 0)
    }
}

@keyframes bounceOutUp {
    20% {
        -webkit-transform: translate3d(0, -10px, 0);
        transform: translate3d(0, -10px, 0)
    }

    40%,
    45% {
        opacity: 1;
        -webkit-transform: translate3d(0, 20px, 0);
        transform: translate3d(0, 20px, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0);
        transform: translate3d(0, -2000px, 0)
    }
}

.bounceOutUp {
    -webkit-animation-name: bounceOutUp;
    animation-name: bounceOutUp
}

@-webkit-keyframes fadeIn {
    0% {
        opacity: 0
    }

    to {
        opacity: 1
    }
}

@keyframes fadeIn {
    0% {
        opacity: 0
    }

    to {
        opacity: 1
    }
}

.fadeIn {
    -webkit-animation-name: fadeIn;
    animation-name: fadeIn
}

@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown
}

@-webkit-keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0);
        transform: translate3d(0, -2000px, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInDownBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0);
        transform: translate3d(0, -2000px, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInDownBig {
    -webkit-animation-name: fadeInDownBig;
    animation-name: fadeInDownBig
}

@-webkit-keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInLeft {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInLeft {
    -webkit-animation-name: fadeInLeft;
    animation-name: fadeInLeft
}

@-webkit-keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInLeftBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInLeftBig {
    -webkit-animation-name: fadeInLeftBig;
    animation-name: fadeInLeftBig
}

@-webkit-keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInRight {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInRight {
    -webkit-animation-name: fadeInRight;
    animation-name: fadeInRight
}

@-webkit-keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0);
        transform: translate3d(2000px, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInRightBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0);
        transform: translate3d(2000px, 0, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInRightBig {
    -webkit-animation-name: fadeInRightBig;
    animation-name: fadeInRightBig
}

@-webkit-keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInUp {
    -webkit-animation-name: fadeInUp;
    animation-name: fadeInUp
}

@-webkit-keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0);
        transform: translate3d(0, 2000px, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes fadeInUpBig {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0);
        transform: translate3d(0, 2000px, 0)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.fadeInUpBig {
    -webkit-animation-name: fadeInUpBig;
    animation-name: fadeInUpBig
}

@-webkit-keyframes fadeOut {
    0% {
        opacity: 1
    }

    to {
        opacity: 0
    }
}

@keyframes fadeOut {
    0% {
        opacity: 1
    }

    to {
        opacity: 0
    }
}

.fadeOut {
    -webkit-animation-name: fadeOut;
    animation-name: fadeOut
}

@-webkit-keyframes fadeOutDown {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }
}

@keyframes fadeOutDown {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }
}

.fadeOutDown {
    -webkit-animation-name: fadeOutDown;
    animation-name: fadeOutDown
}

@-webkit-keyframes fadeOutDownBig {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0);
        transform: translate3d(0, 2000px, 0)
    }
}

@keyframes fadeOutDownBig {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, 2000px, 0);
        transform: translate3d(0, 2000px, 0)
    }
}

.fadeOutDownBig {
    -webkit-animation-name: fadeOutDownBig;
    animation-name: fadeOutDownBig
}

@-webkit-keyframes fadeOutLeft {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }
}

@keyframes fadeOutLeft {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }
}

.fadeOutLeft {
    -webkit-animation-name: fadeOutLeft;
    animation-name: fadeOutLeft
}

@-webkit-keyframes fadeOutLeftBig {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0)
    }
}

@keyframes fadeOutLeftBig {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(-2000px, 0, 0);
        transform: translate3d(-2000px, 0, 0)
    }
}

.fadeOutLeftBig {
    -webkit-animation-name: fadeOutLeftBig;
    animation-name: fadeOutLeftBig
}

@-webkit-keyframes fadeOutRight {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
    }
}

@keyframes fadeOutRight {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
    }
}

.fadeOutRight {
    -webkit-animation-name: fadeOutRight;
    animation-name: fadeOutRight
}

@-webkit-keyframes fadeOutRightBig {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0);
        transform: translate3d(2000px, 0, 0)
    }
}

@keyframes fadeOutRightBig {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(2000px, 0, 0);
        transform: translate3d(2000px, 0, 0)
    }
}

.fadeOutRightBig {
    -webkit-animation-name: fadeOutRightBig;
    animation-name: fadeOutRightBig
}

@-webkit-keyframes fadeOutUp {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0)
    }
}

@keyframes fadeOutUp {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0)
    }
}

.fadeOutUp {
    -webkit-animation-name: fadeOutUp;
    animation-name: fadeOutUp
}

@-webkit-keyframes fadeOutUpBig {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0);
        transform: translate3d(0, -2000px, 0)
    }
}

@keyframes fadeOutUpBig {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(0, -2000px, 0);
        transform: translate3d(0, -2000px, 0)
    }
}

.fadeOutUpBig {
    -webkit-animation-name: fadeOutUpBig;
    animation-name: fadeOutUpBig
}

@-webkit-keyframes flip {
    0% {
        -webkit-transform: perspective(400px) rotateY(-1turn);
        transform: perspective(400px) rotateY(-1turn)
    }

    0%,
    40% {
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    40% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-190deg);
        transform: perspective(400px) translateZ(150px) rotateY(-190deg)
    }

    50% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-170deg);
        transform: perspective(400px) translateZ(150px) rotateY(-170deg)
    }

    50%,
    80% {
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    80% {
        -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
        transform: perspective(400px) scale3d(.95, .95, .95)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
}

@keyframes flip {
    0% {
        -webkit-transform: perspective(400px) rotateY(-1turn);
        transform: perspective(400px) rotateY(-1turn)
    }

    0%,
    40% {
        -webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out
    }

    40% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-190deg);
        transform: perspective(400px) translateZ(150px) rotateY(-190deg)
    }

    50% {
        -webkit-transform: perspective(400px) translateZ(150px) rotateY(-170deg);
        transform: perspective(400px) translateZ(150px) rotateY(-170deg)
    }

    50%,
    80% {
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    80% {
        -webkit-transform: perspective(400px) scale3d(.95, .95, .95);
        transform: perspective(400px) scale3d(.95, .95, .95)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px);
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }
}

.animated.flip {
    -webkit-backface-visibility: visible;
    backface-visibility: visible;
    -webkit-animation-name: flip;
    animation-name: flip
}

@-webkit-keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0
    }

    0%,
    40% {
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    40% {
        -webkit-transform: perspective(400px) rotateX(-20deg);
        transform: perspective(400px) rotateX(-20deg)
    }

    60% {
        -webkit-transform: perspective(400px) rotateX(10deg);
        transform: perspective(400px) rotateX(10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotateX(-5deg);
        transform: perspective(400px) rotateX(-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

@keyframes flipInX {
    0% {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0
    }

    0%,
    40% {
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    40% {
        -webkit-transform: perspective(400px) rotateX(-20deg);
        transform: perspective(400px) rotateX(-20deg)
    }

    60% {
        -webkit-transform: perspective(400px) rotateX(10deg);
        transform: perspective(400px) rotateX(10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotateX(-5deg);
        transform: perspective(400px) rotateX(-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

.flipInX {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInX;
    animation-name: flipInX
}

@-webkit-keyframes flipInY {
    0% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0
    }

    0%,
    40% {
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    40% {
        -webkit-transform: perspective(400px) rotateY(-20deg);
        transform: perspective(400px) rotateY(-20deg)
    }

    60% {
        -webkit-transform: perspective(400px) rotateY(10deg);
        transform: perspective(400px) rotateY(10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotateY(-5deg);
        transform: perspective(400px) rotateY(-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

@keyframes flipInY {
    0% {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0
    }

    0%,
    40% {
        -webkit-animation-timing-function: ease-in;
        animation-timing-function: ease-in
    }

    40% {
        -webkit-transform: perspective(400px) rotateY(-20deg);
        transform: perspective(400px) rotateY(-20deg)
    }

    60% {
        -webkit-transform: perspective(400px) rotateY(10deg);
        transform: perspective(400px) rotateY(10deg);
        opacity: 1
    }

    80% {
        -webkit-transform: perspective(400px) rotateY(-5deg);
        transform: perspective(400px) rotateY(-5deg)
    }

    to {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }
}

.flipInY {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipInY;
    animation-name: flipInY
}

@-webkit-keyframes flipOutX {
    0% {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotateX(-20deg);
        transform: perspective(400px) rotateX(-20deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0
    }
}

@keyframes flipOutX {
    0% {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotateX(-20deg);
        transform: perspective(400px) rotateX(-20deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotateX(90deg);
        transform: perspective(400px) rotateX(90deg);
        opacity: 0
    }
}

.flipOutX {
    -webkit-animation-name: flipOutX;
    animation-name: flipOutX;
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important
}

@-webkit-keyframes flipOutY {
    0% {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotateY(-15deg);
        transform: perspective(400px) rotateY(-15deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0
    }
}

@keyframes flipOutY {
    0% {
        -webkit-transform: perspective(400px);
        transform: perspective(400px)
    }

    30% {
        -webkit-transform: perspective(400px) rotateY(-15deg);
        transform: perspective(400px) rotateY(-15deg);
        opacity: 1
    }

    to {
        -webkit-transform: perspective(400px) rotateY(90deg);
        transform: perspective(400px) rotateY(90deg);
        opacity: 0
    }
}

.flipOutY {
    -webkit-backface-visibility: visible !important;
    backface-visibility: visible !important;
    -webkit-animation-name: flipOutY;
    animation-name: flipOutY
}

@-webkit-keyframes lightSpeedIn {
    0% {
        -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
        transform: translate3d(100%, 0, 0) skewX(-30deg);
        opacity: 0
    }

    60% {
        -webkit-transform: skewX(20deg);
        transform: skewX(20deg)
    }

    60%,
    80% {
        opacity: 1
    }

    80% {
        -webkit-transform: skewX(-5deg);
        transform: skewX(-5deg)
    }

    to {
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes lightSpeedIn {
    0% {
        -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
        transform: translate3d(100%, 0, 0) skewX(-30deg);
        opacity: 0
    }

    60% {
        -webkit-transform: skewX(20deg);
        transform: skewX(20deg)
    }

    60%,
    80% {
        opacity: 1
    }

    80% {
        -webkit-transform: skewX(-5deg);
        transform: skewX(-5deg)
    }

    to {
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.lightSpeedIn {
    -webkit-animation-name: lightSpeedIn;
    animation-name: lightSpeedIn;
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
}

@-webkit-keyframes lightSpeedOut {
    0% {
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
        transform: translate3d(100%, 0, 0) skewX(30deg);
        opacity: 0
    }
}

@keyframes lightSpeedOut {
    0% {
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
        transform: translate3d(100%, 0, 0) skewX(30deg);
        opacity: 0
    }
}

.lightSpeedOut {
    -webkit-animation-name: lightSpeedOut;
    animation-name: lightSpeedOut;
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
}

@-webkit-keyframes rotateIn {
    0% {
        transform-origin: center;
        -webkit-transform: rotate(-200deg);
        transform: rotate(-200deg);
        opacity: 0
    }

    0%,
    to {
        -webkit-transform-origin: center
    }

    to {
        transform-origin: center;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateIn {
    0% {
        transform-origin: center;
        -webkit-transform: rotate(-200deg);
        transform: rotate(-200deg);
        opacity: 0
    }

    0%,
    to {
        -webkit-transform-origin: center
    }

    to {
        transform-origin: center;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateIn {
    -webkit-animation-name: rotateIn;
    animation-name: rotateIn
}

@-webkit-keyframes rotateInDownLeft {
    0% {
        transform-origin: left bottom;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0
    }

    0%,
    to {
        -webkit-transform-origin: left bottom
    }

    to {
        transform-origin: left bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateInDownLeft {
    0% {
        transform-origin: left bottom;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0
    }

    0%,
    to {
        -webkit-transform-origin: left bottom
    }

    to {
        transform-origin: left bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateInDownLeft {
    -webkit-animation-name: rotateInDownLeft;
    animation-name: rotateInDownLeft
}

@-webkit-keyframes rotateInDownRight {
    0% {
        transform-origin: right bottom;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0
    }

    0%,
    to {
        -webkit-transform-origin: right bottom
    }

    to {
        transform-origin: right bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateInDownRight {
    0% {
        transform-origin: right bottom;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0
    }

    0%,
    to {
        -webkit-transform-origin: right bottom
    }

    to {
        transform-origin: right bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateInDownRight {
    -webkit-animation-name: rotateInDownRight;
    animation-name: rotateInDownRight
}

@-webkit-keyframes rotateInUpLeft {
    0% {
        transform-origin: left bottom;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0
    }

    0%,
    to {
        -webkit-transform-origin: left bottom
    }

    to {
        transform-origin: left bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateInUpLeft {
    0% {
        transform-origin: left bottom;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0
    }

    0%,
    to {
        -webkit-transform-origin: left bottom
    }

    to {
        transform-origin: left bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateInUpLeft {
    -webkit-animation-name: rotateInUpLeft;
    animation-name: rotateInUpLeft
}

@-webkit-keyframes rotateInUpRight {
    0% {
        transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0
    }

    0%,
    to {
        -webkit-transform-origin: right bottom
    }

    to {
        transform-origin: right bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

@keyframes rotateInUpRight {
    0% {
        transform-origin: right bottom;
        -webkit-transform: rotate(-90deg);
        transform: rotate(-90deg);
        opacity: 0
    }

    0%,
    to {
        -webkit-transform-origin: right bottom
    }

    to {
        transform-origin: right bottom;
        -webkit-transform: none;
        transform: none;
        opacity: 1
    }
}

.rotateInUpRight {
    -webkit-animation-name: rotateInUpRight;
    animation-name: rotateInUpRight
}

@-webkit-keyframes rotateOut {
    0% {
        transform-origin: center;
        opacity: 1
    }

    0%,
    to {
        -webkit-transform-origin: center
    }

    to {
        transform-origin: center;
        -webkit-transform: rotate(200deg);
        transform: rotate(200deg);
        opacity: 0
    }
}

@keyframes rotateOut {
    0% {
        transform-origin: center;
        opacity: 1
    }

    0%,
    to {
        -webkit-transform-origin: center
    }

    to {
        transform-origin: center;
        -webkit-transform: rotate(200deg);
        transform: rotate(200deg);
        opacity: 0
    }
}

.rotateOut {
    -webkit-animation-name: rotateOut;
    animation-name: rotateOut
}

@-webkit-keyframes rotateOutDownLeft {
    0% {
        transform-origin: left bottom;
        opacity: 1
    }

    0%,
    to {
        -webkit-transform-origin: left bottom
    }

    to {
        transform-origin: left bottom;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0
    }
}

@keyframes rotateOutDownLeft {
    0% {
        transform-origin: left bottom;
        opacity: 1
    }

    0%,
    to {
        -webkit-transform-origin: left bottom
    }

    to {
        transform-origin: left bottom;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        opacity: 0
    }
}

.rotateOutDownLeft {
    -webkit-animation-name: rotateOutDownLeft;
    animation-name: rotateOutDownLeft
}

@-webkit-keyframes rotateOutDownRight {
    0% {
        transform-origin: right bottom;
        opacity: 1
    }

    0%,
    to {
        -webkit-transform-origin: right bottom
    }

    to {
        transform-origin: right bottom;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0
    }
}

@keyframes rotateOutDownRight {
    0% {
        transform-origin: right bottom;
        opacity: 1
    }

    0%,
    to {
        -webkit-transform-origin: right bottom
    }

    to {
        transform-origin: right bottom;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0
    }
}

.rotateOutDownRight {
    -webkit-animation-name: rotateOutDownRight;
    animation-name: rotateOutDownRight
}

@-webkit-keyframes rotateOutUpLeft {
    0% {
        transform-origin: left bottom;
        opacity: 1
    }

    0%,
    to {
        -webkit-transform-origin: left bottom
    }

    to {
        transform-origin: left bottom;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0
    }
}

@keyframes rotateOutUpLeft {
    0% {
        transform-origin: left bottom;
        opacity: 1
    }

    0%,
    to {
        -webkit-transform-origin: left bottom
    }

    to {
        transform-origin: left bottom;
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
        opacity: 0
    }
}

.rotateOutUpLeft {
    -webkit-animation-name: rotateOutUpLeft;
    animation-name: rotateOutUpLeft
}

@-webkit-keyframes rotateOutUpRight {
    0% {
        transform-origin: right bottom;
        opacity: 1
    }

    0%,
    to {
        -webkit-transform-origin: right bottom
    }

    to {
        transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0
    }
}

@keyframes rotateOutUpRight {
    0% {
        transform-origin: right bottom;
        opacity: 1
    }

    0%,
    to {
        -webkit-transform-origin: right bottom
    }

    to {
        transform-origin: right bottom;
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        opacity: 0
    }
}

.rotateOutUpRight {
    -webkit-animation-name: rotateOutUpRight;
    animation-name: rotateOutUpRight
}

@-webkit-keyframes hinge {
    0% {
        transform-origin: top left
    }

    0%,
    20%,
    60% {
        -webkit-transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }

    20%,
    60% {
        -webkit-transform: rotate(80deg);
        transform: rotate(80deg);
        transform-origin: top left
    }

    40%,
    80% {
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(0, 700px, 0);
        transform: translate3d(0, 700px, 0);
        opacity: 0
    }
}

@keyframes hinge {
    0% {
        transform-origin: top left
    }

    0%,
    20%,
    60% {
        -webkit-transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out
    }

    20%,
    60% {
        -webkit-transform: rotate(80deg);
        transform: rotate(80deg);
        transform-origin: top left
    }

    40%,
    80% {
        -webkit-transform: rotate(60deg);
        transform: rotate(60deg);
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-animation-timing-function: ease-in-out;
        animation-timing-function: ease-in-out;
        opacity: 1
    }

    to {
        -webkit-transform: translate3d(0, 700px, 0);
        transform: translate3d(0, 700px, 0);
        opacity: 0
    }
}

.hinge {
    -webkit-animation-name: hinge;
    animation-name: hinge
}

@-webkit-keyframes rollIn {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0) rotate(-120deg);
        transform: translate3d(-100%, 0, 0) rotate(-120deg)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

@keyframes rollIn {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0) rotate(-120deg);
        transform: translate3d(-100%, 0, 0) rotate(-120deg)
    }

    to {
        opacity: 1;
        -webkit-transform: none;
        transform: none
    }
}

.rollIn {
    -webkit-animation-name: rollIn;
    animation-name: rollIn
}

@-webkit-keyframes rollOut {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0) rotate(120deg);
        transform: translate3d(100%, 0, 0) rotate(120deg)
    }
}

@keyframes rollOut {
    0% {
        opacity: 1
    }

    to {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0) rotate(120deg);
        transform: translate3d(100%, 0, 0) rotate(120deg)
    }
}

.rollOut {
    -webkit-animation-name: rollOut;
    animation-name: rollOut
}

@-webkit-keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
    }

    50% {
        opacity: 1
    }
}

@keyframes zoomIn {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
    }

    50% {
        opacity: 1
    }
}

.zoomIn {
    -webkit-animation-name: zoomIn;
    animation-name: zoomIn
}

@-webkit-keyframes zoomInDown {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
        transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
        transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

@keyframes zoomInDown {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
        transform: scale3d(.1, .1, .1) translate3d(0, -1000px, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
        transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

.zoomInDown {
    -webkit-animation-name: zoomInDown;
    animation-name: zoomInDown
}

@-webkit-keyframes zoomInLeft {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
        transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
        transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

@keyframes zoomInLeft {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
        transform: scale3d(.1, .1, .1) translate3d(-1000px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
        transform: scale3d(.475, .475, .475) translate3d(10px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

.zoomInLeft {
    -webkit-animation-name: zoomInLeft;
    animation-name: zoomInLeft
}

@-webkit-keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
        transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
        transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

@keyframes zoomInRight {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
        transform: scale3d(.1, .1, .1) translate3d(1000px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
        transform: scale3d(.475, .475, .475) translate3d(-10px, 0, 0);
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

.zoomInRight {
    -webkit-animation-name: zoomInRight;
    animation-name: zoomInRight
}

@-webkit-keyframes zoomInUp {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
        transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
        transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

@keyframes zoomInUp {
    0% {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
        transform: scale3d(.1, .1, .1) translate3d(0, 1000px, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    60% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
        transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

.zoomInUp {
    -webkit-animation-name: zoomInUp;
    animation-name: zoomInUp
}

@-webkit-keyframes zoomOut {
    0% {
        opacity: 1
    }

    50% {
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
    }

    50%,
    to {
        opacity: 0
    }
}

@keyframes zoomOut {
    0% {
        opacity: 1
    }

    50% {
        -webkit-transform: scale3d(.3, .3, .3);
        transform: scale3d(.3, .3, .3)
    }

    50%,
    to {
        opacity: 0
    }
}

.zoomOut {
    -webkit-animation-name: zoomOut;
    animation-name: zoomOut
}

@-webkit-keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
        transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
        transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

@keyframes zoomOutDown {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
        transform: scale3d(.475, .475, .475) translate3d(0, -60px, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
        transform: scale3d(.1, .1, .1) translate3d(0, 2000px, 0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

.zoomOutDown {
    -webkit-animation-name: zoomOutDown;
    animation-name: zoomOutDown
}

@-webkit-keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
        transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
        transform: scale(.1) translate3d(-2000px, 0, 0);
        -webkit-transform-origin: left center;
        transform-origin: left center
    }
}

@keyframes zoomOutLeft {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0);
        transform: scale3d(.475, .475, .475) translate3d(42px, 0, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(-2000px, 0, 0);
        transform: scale(.1) translate3d(-2000px, 0, 0);
        -webkit-transform-origin: left center;
        transform-origin: left center
    }
}

.zoomOutLeft {
    -webkit-animation-name: zoomOutLeft;
    animation-name: zoomOutLeft
}

@-webkit-keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
        transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
        transform: scale(.1) translate3d(2000px, 0, 0);
        -webkit-transform-origin: right center;
        transform-origin: right center
    }
}

@keyframes zoomOutRight {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0);
        transform: scale3d(.475, .475, .475) translate3d(-42px, 0, 0)
    }

    to {
        opacity: 0;
        -webkit-transform: scale(.1) translate3d(2000px, 0, 0);
        transform: scale(.1) translate3d(2000px, 0, 0);
        -webkit-transform-origin: right center;
        transform-origin: right center
    }
}

.zoomOutRight {
    -webkit-animation-name: zoomOutRight;
    animation-name: zoomOutRight
}

@-webkit-keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
        transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
        transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

@keyframes zoomOutUp {
    40% {
        opacity: 1;
        -webkit-transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
        transform: scale3d(.475, .475, .475) translate3d(0, 60px, 0);
        -webkit-animation-timing-function: cubic-bezier(.55, .055, .675, .19);
        animation-timing-function: cubic-bezier(.55, .055, .675, .19)
    }

    to {
        opacity: 0;
        -webkit-transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
        transform: scale3d(.1, .1, .1) translate3d(0, -2000px, 0);
        -webkit-transform-origin: center bottom;
        transform-origin: center bottom;
        -webkit-animation-timing-function: cubic-bezier(.175, .885, .32, 1);
        animation-timing-function: cubic-bezier(.175, .885, .32, 1)
    }
}

.zoomOutUp {
    -webkit-animation-name: zoomOutUp;
    animation-name: zoomOutUp
}

@-webkit-keyframes slideInDown {
    0% {
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

@keyframes slideInDown {
    0% {
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

.slideInDown {
    -webkit-animation-name: slideInDown;
    animation-name: slideInDown
}

@-webkit-keyframes slideInLeft {
    0% {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

@keyframes slideInLeft {
    0% {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

.slideInLeft {
    -webkit-animation-name: slideInLeft;
    animation-name: slideInLeft
}

@-webkit-keyframes slideInRight {
    0% {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

@keyframes slideInRight {
    0% {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

.slideInRight {
    -webkit-animation-name: slideInRight;
    animation-name: slideInRight
}

@-webkit-keyframes slideInUp {
    0% {
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

@keyframes slideInUp {
    0% {
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
        visibility: visible
    }

    to {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }
}

.slideInUp {
    -webkit-animation-name: slideInUp;
    animation-name: slideInUp
}

@-webkit-keyframes slideOutDown {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }
}

@keyframes slideOutDown {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0)
    }
}

.slideOutDown {
    -webkit-animation-name: slideOutDown;
    animation-name: slideOutDown
}

@-webkit-keyframes slideOutLeft {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }
}

@keyframes slideOutLeft {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }
}

.slideOutLeft {
    -webkit-animation-name: slideOutLeft;
    animation-name: slideOutLeft
}

@-webkit-keyframes slideOutRight {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
    }
}

@keyframes slideOutRight {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
    }
}

.slideOutRight {
    -webkit-animation-name: slideOutRight;
    animation-name: slideOutRight
}

@-webkit-keyframes slideOutUp {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0)
    }
}

@keyframes slideOutUp {
    0% {
        -webkit-transform: translateZ(0);
        transform: translateZ(0)
    }

    to {
        visibility: hidden;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0)
    }
}

.slideOutUp {
    -webkit-animation-name: slideOutUp;
    animation-name: slideOutUp
}

.support-online {
    position: fixed;
    z-index: 999;
    right: -6px;
    bottom: 100px;
    left: auto;
}
</style>



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