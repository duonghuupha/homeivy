<?php
$jsonObj = $this->jsonObj;
?>
<!-- Slider Light-->
<section class="swiper-container swiper-slider swiper-slider-light bg-image-1" data-loop="false" data-autoplay="false"
    data-simulate-touch="false" data-custom-slide-effect="inter-leave-effect" data-inter-leave-offset="-.5">
    <div class="swiper-wrapper">
        <?php
        foreach($jsonObj as $row)
        ?>
        <div class="swiper-slide">
            <div class="slide-inner">
                <div class="container">
                    <div class="swiper-slide-caption">
                        <div class="row row-30">
                            <div class="col-lg-6 text-center text-lg-left">
                                <h1><span class="font-weight-light"><span>'Sen' của bạn</span></span><span
                                        class="font-weight-bold"><span>Trông đẹp nhất</span></span></h1>
                                <div class="button-outer"><a class="button button-lg button-primary button-winona"
                                        href="#">Đặt lịch ngay</a></div>
                            </div>
                            <div class="col-lg-6 position-static">
                                <div class="floating-image"><img src="<?php echo URL.'/styles/' ?>images/swiper-image-1-960x776.jpg" alt=""
                                        width="960" height="776" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div class="swiper-pagination-outer container">
        <div class="swiper-pagination swiper-pagination-modern swiper-pagination-marked" data-index-bullet="true"></div>
    </div>
</section>