<?php
$jsonObj_block1 = $this->_Data->get_data_block1();
?>
<!-- Slider Light-->
<section class="swiper-container swiper-slider swiper-slider-light bg-image-1" data-loop="false" data-autoplay="false"
    data-simulate-touch="false" data-custom-slide-effect="inter-leave-effect" data-inter-leave-offset="-.5">
    <div class="swiper-wrapper">
        <?php
        foreach($jsonObj_block1 as $row_block1){
        ?>
        <div class="swiper-slide">
            <div class="slide-inner">
                <div class="container">
                    <div class="swiper-slide-caption">
                        <div class="row row-30">
                            <div class="col-lg-6 text-center text-lg-left">
                                <h1>
                                    <span class="font-weight-light">
                                        <span><?php echo $row_block1['title_1'] ?></span>
                                    </span>
                                    <span class="font-weight-bold">
                                        <span><?php echo $row_block1['title_2'] ?></span>
                                    </span>
                                </h1>
                                <div class="button-outer">
                                    <a class="button button-lg button-primary button-winona" href="<?php echo $row_block1['link'] ?>">
                                        <?php echo $row_block1['title_button'] ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 position-static">
                                <div class="floating-image">
                                    <img src="<?php echo URL_IMAGE.'/other/'.$row_block1['image'] ?>" alt="" width="960" height="776" />
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

<?php
$row_block2 = $this->_Data->get_data_block2();
$width_block2 = 501; $height_block_2 = 526;
$image_block2 = $this->_Convert->convert_img('other/', $row_block2[0]['image'], $width_block2, $height_block_2, 2);
?>
<!-- A Few Words About Us-->
<section class="section section-decorated-1">
    <div class="decor-1"><img src="<?php echo URL.'/styles/' ?>images/bubbles-219x209.png" alt="" width="219" height="209" /></div>
    <div class="decor-2"><img src="<?php echo URL.'/styles/' ?>images/bubbles-224x306.png" alt="" width="224" height="306" /></div>
    <div class="container">
        <div class="row row-50 justify-content-center justify-content-lg-between flex-lg-row-reverse align-items-center">
            <div class="col-md-10 col-lg-6 col-xl-5">
                <h3 class="wow-outer">
                    <span class="wow slideInDown">
                        <?php echo $row_block2[0]['title'] ?>
                    </span>
                </h3>
                <?php echo $row_block2[0]['content'] ?>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer">
                <img class="img-responsive wow slideInLeft"src="<?php echo URL_IMAGE.'/other/'.$width_block2.'x'.$height_block_2.'/'.$image_block2 ?>" alt="" />
            </div>
        </div>
    </div>
</section>
<?php
include('block_3.php');
?>

<?php
$row_block4 = $this->_Data->get_data_block4();
?>
<!-- Thin CTA-->
<section class="section section-xs bg-primary-darker text-center section-decorated-2">
    <div class="decor-1"><img src="<?php echo URL.'/styles/' ?>images/bubbles-225x463.png" alt="" width="225" height="463" /></div>
    <div class="decor-2"><img src="<?php echo URL.'/styles/' ?>images/bubbles-83x127.png" alt="" width="83" height="127" /></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-12">
                <div class="box-cta-thin">
                    <h4 class="wow-outer">
                        <span class="wow slideInRight">
                            C<?php echo $row_block4[0]['title'] ?>
                        </span>
                    </h4>
                    <div class="wow-outer button-outer">
                        <a class="button button-primary button-winona wow slideInLeft" href="<?php echo $row_block4[0]['link_button'] ?>">
                            <?php echo $row_block4[0]['title_button'] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Services-->
<section class="section-lg text-center">
    <div class="container">
        <h3 class="wow-outer"><span class="wow slideInUp">Dịch vụ</span></h3>
        <p class="wow-outer"><span class="wow slideInDown text-width-1">
            Chúng tôi cung cấp tất cả các dịch vụ Khám - Chẩn đoán - Điều trị - Spa - Grooming cho thú cưng của bạn. Chúng tôi sử dụng các sản phẩm chất lượng nhất
            phù hợp với nhu cầu.
        </span></p>
        <div class="row row-30 offset-top-2">
            <div class="col-sm-6 col-lg-3 wow-outer">
                <!-- Thumbnail Light-->
                <article class="thumbnail-light wow slideInLeft">
                    <a class="thumbnail-light-media" href="single-service.html">
                        <img class="thumbnail-light-image" src="<?php echo URL.'/styles/' ?>images/service-thumbnail-1-270x200.jpg" alt="" width="270" height="200" />
                    </a>
                    <h5 class="thumbnail-light-title">
                        <a href="single-service.html">Spa - Gorming</a>
                    </h5>
                </article>
            </div>
            
        </div>
    </div>
    <div class="wow-outer button-outer">
        <a class="button button-primary-outline button-winona offset-top-2 wow slideInUp" href="services.html">Tất cả dịch vụ của chúng tôi</a>
    </div>
</section>
<?php
include('block_6.php');
include('block_7.php');
include('block_8.php');
include('block_9.php');
?>