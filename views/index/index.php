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
                                    <img src="<?php echo URL_IMAGE.'/other/'.$row_block1['image'] ?>" alt="" width="760" height="614" />
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
                <img class="img-responsive wow slideInLeft" src="<?php echo URL_IMAGE.'/other/'.$width_block2.'x'.$height_block_2.'/'.$image_block2 ?>" alt="" />
            </div>
        </div>
    </div>
</section>

<!-- Small Features-->
<section class="section section-md bg-gray-light">
    <div class="container">
        <div class="row row-40 align-items-center">
            <div class="col-xl-8">
                <div class="row row-xl-60">
                    <?php
                    foreach($this->_Data->get_data_block3(0, 4) as $row_block3){
                    ?>
                    <div class="col-sm-6 wow-outer">
                        <!-- Box Minimal-->
                        <article class="box-minimal">
                            <div class="box-minimal-icon <?php echo $row_block3['image_icon'] ?> wow fadeIn"></div>
                            <div class="box-minimal-main wow-outer">
                                <h4 class="box-minimal-title wow slideInDown"><?php echo $row_block3['title'] ?></h4>
                                <p class="wow fadeInUpSmall"><?php echo $row_block3['content'] ?></p>
                            </div>
                        </article>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="offset-negative-70">
                    <?php
                    $row_block3_img = $this->_Data->get_data_block3(4, 1);
                    ?>
                    <img src="<?php echo URL_IMAGE.'/other/'.$row_block3_img[0]['image_icon'] ?>" alt="" width="386" height="503" />
                </div>
            </div>
        </div>
    </div>
</section>

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
                            <?php echo $row_block4[0]['title'] ?>
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

<?php
$row_block5 = $this->_Data->get_data_block5();
$data_block5 = $this->_Data->get_data_block_5($row_block5[0]['data']);
?>
<!-- Services-->
<section class="section-lg text-center">
    <div class="container">
        <h3 class="wow-outer"><span class="wow slideInUp"><?php echo $row_block5[0]['title'] ?></span></h3>
        <p class="wow-outer">
            <span class="wow slideInDown text-width-1">
                <?php echo $row_block5[0]['content'] ?>
            </span>
        </p>
        <div class="row row-30 offset-top-2">
            <?php
            foreach($data_block5 as $item_block5){
                $width_block5 = 270; $height_block5 = 200;
                $image_block5 = $this->_Convert->convert_img('blog/images/', $item_block5['image'], $width_block5, $height_block5, 2);
            ?>
            <div class="col-sm-6 col-lg-3 wow-outer">
                <!-- Thumbnail Light-->
                <article class="thumbnail-light wow slideInLeft">
                    <a class="thumbnail-light-media" href="<?php echo URL.'/'.$this->_Convert->vn2latin($item_block5['title'], true).'-service-'.base64_encode($item_block5['id']).'.html' ?>">
                        <img class="thumbnail-light-image" src="<?php echo URL_IMAGE.'/blog/images/'.$item_block5['image'] ?>" alt="" width="270" height="200" />
                    </a>
                    <h5 class="thumbnail-light-title">
                        <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($item_block5['title'], true).'-service-'.base64_encode($item_block5['id']).'.html' ?>"><?php echo $item_block5['title'] ?></a>
                    </h5>
                </article>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <div class="wow-outer button-outer">
        <a class="button button-primary-outline button-winona offset-top-2 wow slideInUp" href="<?php echo $row_block5[0]['link_button'] ?>">
            <?php echo $row_block5[0]['title_button'] ?>
        </a>
    </div>
</section>

<?php
$json_block6 = $this->_Data->get_data_block_6();
?>
<!-- Pricing-->
<section class="section section-lg bg-gray-100 section-decorated-7">
    <div class="decor-1">
        <img src="<?php echo URL.'/styles/' ?>images/bubbles-171x230.png" alt="" width="171" height="230" />
    </div>
    <div class="container">
        <h3 class="wow-outer text-center">
            <span class="wow slideInDown"><?php echo $json_block6[0]['title'] ?></span>
        </h3>
        <div class="row row-30">
            <?php
            foreach($this->_Data->get_data_block_6_price($json_block6[0]['data']) as $row_block6){
            ?>
            <div class="col-sm-6 col-lg-4 wow-outer">
                <!-- Pricing Minimal-->
                <article class="pricing-minimal wow slideInRight">
                    <h5 class="pricing-minimal-title">
                        <a href="javascript:void(0)"><?php echo $row_block6['title'] ?></a>
                    </h5>
                    <p class="pricing-minimal-price">
                        <span class="pricing-minimal-price-currency">Chỉ từ</span>
                        <?php echo number_format($row_block6['price']) ?>
                    </p>
                    <div class="pricing-minimal-divider"></div>
                    <p><?php echo $row_block6['content'] ?></p>
                        <a class="button button-primary button-winona" href="javascript:void(0)">Đặt lịch ngay</a>
                </article>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php
$json_block7 = $this->_Data->get_data_block7();
?>
<!-- Testimonials-->
<section class="section section-lg text-center">
    <div class="container">
        <h3 class="wow-outer"><span class="wow slideInDown"><?php echo $json_block7[0]['title'] ?></span></h3>
        <!-- Owl Carousel-->
        <div class="owl-carousel wow fadeIn" data-items="1" data-md-items="2" data-lg-items="3" data-dots="true"
            data-nav="false" data-loop="true" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
            <?php
            foreach($this->_Data->get_data_block_7($json_block7[0]['data']) as $row_block7){
            ?>
            <blockquote class="quote-classic">
                <div class="quote-classic-meta">
                    <div class="quote-classic-avatar"><img src="<?php echo URL.'/styles/' ?>images/Logo_1.png" alt=""
                            width="96" height="96" />
                    </div>
                    <div class="quote-classic-info">
                        <cite class="quote-classic-cite"><?php echo $row_block7['title'] ?></cite>
                    </div>
                </div>
                <div class="quote-classic-text" title="<?php echo $row_block7['content'] ?>">
                    <p><?php echo $this->_Convert->cut($row_block7['content'], 250) ?></p>
                </div>
            </blockquote>
            <?php
            }
            ?>
        </div>
    </div>
</section>

<?php
$json_block8 = $this->_Data->get_data_block8();
?>
<!-- Centered CTA-->
<section class="section section-1 bg-primary-darker text-center section-decorated-3">
    <div class="decor-1"><img src="<?php echo URL.'/styles/' ?>images/bubbles-187x131.png" alt="" width="187" height="131" /></div>
    <div class="decor-2"><img src="<?php echo URL.'/styles/' ?>images/bubbles-295x474.png" alt="" width="295" height="474" /></div>
    <div class="decor-3"><img src="<?php echo URL_IMAGE.'/other/'.$json_block8[0]['image'] ?>" alt="Trung tâm thú cưng IVYVET" width="359" height="546" /></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-lg-7 col-xl-6">
                <h3 class="wow-outer">
                    <span class="wow slideInDown">
                     <?php echo $json_block8[0]['title'] ?>
                    </span>
                </h3>
                <p class="wow-outer offset-top-3">
                    <span class="wow slideInDown" data-wow-delay=".05s">
                        <?php echo $json_block8[0]['content'] ?>
                    </span>
                </p>
                <div class="wow-outer button-outer">
                    <a class="button button-primary button-winona wow slideInDown" href="<?php echo $json_block8[0]['link_button'] ?>" data-wow-delay=".1s">
                        <?php echo $json_block8[0]['title_button'] ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$json_block9 = $this->_Data->get_data_block9();
?>
<!-- Latest Blog Posts-->
<section class="section section-lg text-center section-decorated-4">
    <div class="decor-1"><img src="<?php echo URL.'/styles/' ?>images/bubbles-187x131.png" alt="" width="187" height="131" /></div>
    <div class="container">
        <h3 class="wow-outer text-center">
            <span class="wow slideInDown"><?php echo $json_block9[0]['title'] ?></span>
        </h3>
        <div class="row row-50">
            <?php
            foreach($this->_Data->get_data_block_9($json_block9[0]['data']) as $row_block9){
                $width_block9 = 570; $height_block9 = 353;
                $image_block9 = $this->_Convert->convert_img('blog/images', $row_block9['image'], $width_block9, $height_block9, 2);
            ?>
            <div class="col-md-6 wow-outer">
                <!-- Post Modern-->
                <article class="post-modern wow slideInLeft">
                    <a class="post-modern-media" href="<?php echo URL.'/'.$this->_Convert->vn2latin($row_block9['title'], true).'-post-'.base64_encode($row_block9['id']).'html' ?>">
                        <img src="<?php echo URL_IMAGE.'/blog/images/'.$width_block9.'x'.$height_block9.'/'.$image_block9 ?>" alt="" width="570" height="353" />
                    </a>
                    <h4 class="post-modern-title">
                        <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row_block9['title'], true).'-post-'.base64_encode($row_block9['id']).'html' ?>" title="<?php echo $row_block9['title'] ?>">
                            <?php echo $this->_Convert->cut($row_block9['title'], 55) ?>
                        </a>
                    </h4>
                    <ul class="post-modern-meta">
                        <li>
                            <time datetime="<?php echo date("Y", strtotime($row_block9['create_at'])) ?>">
                                <?php echo date("M j, Y", strtotime($row['create_at'])).' lúc '.date("g:i a", strtotime($row_block9['create_at'])) ?>
                            </time>
                        </li>
                        <li><a class="button-winona" href="javascript:void(0)"><?php echo $row_block9['cate_title'] ?></a></li>
                    </ul>
                    <p><?php echo $this->_Convert->cut($row_block9['info'], 200) ?></p>
                </article>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>