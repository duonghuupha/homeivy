<?php
$item = $this->jsonObj;
?>
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(<?php echo URL.'/styles/' ?>images/bg_breach.png);">
    <div class="breadcrumbs-custom-inner">
        <div class="breadcrumbs-custom-container container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Chi tiết bài viết</h6>
                <h1 class="breadcrumbs-custom-title">Ivyvet center</h1>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-12">
                <article class="post-creative">
                    <h3 class="post-creative-title">
                        <?php echo $item[0]['title'] ?>
                    </h3>
                    <ul class="post-creative-meta">
                        <li>
                            <span class="icon mdi mdi-calendar-clock"></span>
                            <time datetime="2020"><?php echo date("M j, Y", strtotime($item[0]['create_at'])).' lúc '.date("g:i a", strtotime($item[0]['create_at'])) ?></time>
                        </li>
                        <li>
                            <span class="icon mdi mdi-tag-multiple"></span>
                            <a href="javascript:void(0)"><?php echo $item[0]['cate_title'] ?></a>
                        </li>
                    </ul>
                    <h4><?php echo $item[0]['info'] ?></h4>
                    <div class="detail_post"><?php echo $item[0]['content'] ?></div>
                    <ul class="post-creative-footer">
                        <li>Chia sẻ bài viết!</li>
                        <li>
                            <div class="group group-xs group-middle">
                                <a class="icon icon-sm icon-creative mdi mdi-facebook" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-twitter" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-instagram" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a>
                            </div>
                        </li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</section>