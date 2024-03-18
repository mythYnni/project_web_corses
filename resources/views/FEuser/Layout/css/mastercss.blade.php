<link rel="stylesheet" href="{{ url('asset') }}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('asset') }}/css/animate.min.css">
<link rel="stylesheet" href="{{ url('asset') }}/css/aos.min.css">
<link rel="stylesheet" href="{{ url('asset') }}/css/magnific-popup.css">
<link rel="stylesheet" href="{{ url('asset') }}/css/icofont.min.css">
<link rel="stylesheet" href="{{ url('asset') }}/css/slick.css">
<link rel="stylesheet" href="{{ url('asset') }}/css/swiper-bundle.min.css">
<link rel="stylesheet" href="{{ url('asset') }}/css/style.css">
<link rel="stylesheet" href="{{ url('asset') }}/css/responsize.css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<style>
    @keyframes zoom {
        0% {
            transform: scale(.5);
            opacity: 0
        }

        50% {
            opacity: 1
        }

        to {
            opacity: 0;
            transform: scale(1)
        }
    }

    @keyframes lucidgenzalo {
        0% to {
            transform: rotate(-25deg)
        }

        50% {
            transform: rotate(25deg)
        }
    }

    .jscroll-to-top {
        bottom: 100px
    }

    .fcta-zalo-ben-trong-nut img {
        fill: #fff
    }

    .fcta-zalo-vi-tri-nut {
        position: fixed;
        bottom: 24px;
        left: 24px;
        z-index: 999
    }

    .fcta-zalo-nen-nut,
    div.fcta-zalo-mess {
        box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16)
    }

    .fcta-zalo-nen-nut {
        width: 60px;
        height: 60px;
        text-align: center;
        color: #fff;
        background: #0068ff;
        border-radius: 50%;
        position: relative
    }

    .fcta-zalo-nen-nut::after,
    .fcta-zalo-nen-nut::before {
        content: "";
        position: absolute;
        border: 1px solid #0068ff;
        background: #0068ff80;
        z-index: -1;
        left: -20px;
        right: -20px;
        top: -20px;
        bottom: -20px;
        border-radius: 50%;
        animation: zoom 1.9s linear infinite
    }

    .fcta-zalo-nen-nut::after {
        animation-delay: .4s
    }

    .fcta-zalo-ben-trong-nut,
    .fcta-zalo-ben-trong-nut i {
        transition: all 1s
    }

    .fcta-zalo-ben-trong-nut {
        position: absolute;
        text-align: center;
        width: 60%;
        height: 60%;
        left: 13px;
        bottom: 23px;
        line-height: 55px;
        font-size: 25px;
        opacity: 1
    }

    /* telegram */

    .fcta-zalo-vi-tri-nut-telegram{
        position: fixed;
        bottom: 102px;
        left: 24px;
        z-index: 999
    }

    .fcta-zalo-nen-nut-telegram {
        width: 60px;
        height: 60px;
        text-align: center;
        color: #fff;
        background: #116b9a;
        border-radius: 50%;
        position: relative
    }

    .fcta-zalo-nen-nut-telegram {
        width: 60px;
        height: 60px;
        text-align: center;
        color: #fff;
        background: #0068ff;
        border-radius: 50%;
        position: relative
    }

    .fcta-zalo-nen-nut-telegram::after,
    .fcta-zalo-nen-nut-telegram::before {
        content: "";
        position: absolute;
        border: 1px solid #0068ff;
        background: #0068ff80;
        z-index: -1;
        left: -20px;
        right: -20px;
        top: -20px;
        bottom: -20px;
        border-radius: 50%;
        animation: zoom 1.9s linear infinite
    }

    .fcta-zalo-nen-nut-telegram::after {
        animation-delay: .4s
    }


    /* facebook */
    .fcta-zalo-vi-tri-nut-facebook{
        position: fixed;
        bottom: 180px;
        left: 24px;
        z-index: 999
    }

    .fcta-zalo-nen-nut-facebook {
        width: 60px;
        height: 60px;
        text-align: center;
        color: #fff;
        background: #0068ff;
        border-radius: 50%;
        position: relative
    }

    .fcta-zalo-nen-nut-facebook::after,
    .fcta-zalo-nen-nut-facebook::before {
        content: "";
        position: absolute;
        border: 1px solid #0068ff;
        background: #0068ff80;
        z-index: -1;
        left: -20px;
        right: -20px;
        top: -20px;
        bottom: -20px;
        border-radius: 50%;
        animation: zoom 1.9s linear infinite
    }

    .fcta-zalo-nen-nut-facebook::after {
        animation-delay: .4s
    }
    
</style>
