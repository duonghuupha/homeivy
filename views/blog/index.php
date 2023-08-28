<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(<?php echo URL.'/styles/' ?>images/breadcrumbs-bg.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="breadcrumbs-custom-container container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Tin tức</h6>
                <h1 class="breadcrumbs-custom-title">Tin tức</h1>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg">
    <div class="container">
        <div class="row row-50 row-xxl-70">
            <?php
            for($i = 1; $i <= 4; $i++){
            ?>
            <div class="col-md-6 scaleFadeInWrap">
                <!-- Post Modern-->
                <div class="wow scaleFadeIn">
                    <article class="post-modern">
                        <a class="post-modern-media" href="#">
                            <img src="<?php echo URL.'/styles/' ?>images/grid-blog-1-570x352.jpg" alt="" width="570" height="352" />
                        </a>
                        <h4 class="post-modern-title">
                            <a href="#">How To Keep Your Dog Cool In Summer</a>
                        </h4>
                        <ul class="post-modern-meta">
                            <li>by Theresa Barnes</li>
                            <li>
                                <time datetime="2020">Apr 21, 2020 at 12:05 pm</time>
                            </li>
                            <li>
                                <a class="button-winona" href="#">News</a>
                            </li>
                        </ul>
                        <p>Congregabo acceleratrix ducunt ad albus musa. Pulchritudine trabems, tanquam fortis byssus.
                            Indexs peregrinationes, tanquam mirabilis galatae. Ignigena velums, tanquam azureus cotta.
                            Brevis, camerarius adgiums aliquando quaestio de barbatus, regius heuretes.</p>
                    </article>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <div class="pagination">
            <div class="page-item active"><a class="page-link button-winona" href="#">1</a></div>
            <div class="page-item"><a class="page-link button-winona" href="#">2</a></div>
            <div class="page-item"><a class="page-link button-winona" href="#">3</a></div>
            <div class="page-item"><a class="page-link button-winona" href="#">4</a></div>
        </div>
    </div>
</section>