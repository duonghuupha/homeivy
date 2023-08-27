<?php
include('layouts/header.php');
?>
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(images/breadcrumbs-bg.jpg);">
    <div class="breadcrumbs-custom-inner">
        <div class="breadcrumbs-custom-container container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Gallery</h6>
                <h1 class="breadcrumbs-custom-title">Grid Gallery</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li class="active">Grid Gallery</li>
            </ul>
        </div>
    </div>
</section>
<section class="section section-lg oh">
    <div class="container isotope-wrap text-center text-md-left">
        <!-- Isotope Filters-->
        <div class="isotope-filters isotope-filters-modern">
            <button class="isotope-filters-toggle button button-sm button-primary" data-custom-toggle="#isotope-filters"
                data-custom-toggle-disable-on-blur="true" data-custom-toggle-hide-on-blur="true">Filter<span
                    class="caret"></span></button>
            <ul class="isotope-filters-list" id="isotope-filters">
                <li><a class="active" data-isotope-filter="*" href="#">All Types</a></li>
                <li><a data-isotope-filter="Type 1" href="#">General</a></li>
                <li><a data-isotope-filter="Type 2" href="#">Special</a></li>
                <li><a data-isotope-filter="Type 3" href="#">Other</a></li>
            </ul>
        </div>
        <div class="isotope isotope-responsive row" data-lightgallery="group">
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic--><a class="thumbnail-classic thumbnail-classic-sm"
                    href="images/gallery-original-1-1200x800.jpg" data-lightgallery="item"><img
                        class="thumbnail-classic-image" src="images/grid-layout-1-370x256.jpg" alt="" width="370"
                        height="256" />
                    <div class="thumbnail-classic-caption">
                        <p class="thumbnail-classic-title">Shampooing</p>
                        <p class="thumbnail-classic-text">General</p>
                    </div>
                    <div class="thumbnail-classic-dummy"></div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic--><a class="thumbnail-classic thumbnail-classic-sm"
                    href="images/gallery-original-2-1200x800.jpg" data-lightgallery="item"><img
                        class="thumbnail-classic-image" src="images/grid-layout-2-370x256.jpg" alt="" width="370"
                        height="256" />
                    <div class="thumbnail-classic-caption">
                        <p class="thumbnail-classic-title">Full Brushing Out</p>
                        <p class="thumbnail-classic-text">Special</p>
                    </div>
                    <div class="thumbnail-classic-dummy"></div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic--><a class="thumbnail-classic thumbnail-classic-sm"
                    href="images/gallery-original-3-1200x800.jpg" data-lightgallery="item"><img
                        class="thumbnail-classic-image" src="images/grid-layout-3-370x256.jpg" alt="" width="370"
                        height="256" />
                    <div class="thumbnail-classic-caption">
                        <p class="thumbnail-classic-title">Face and Foot Trim</p>
                        <p class="thumbnail-classic-text">Special</p>
                    </div>
                    <div class="thumbnail-classic-dummy"></div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 2">
                <!-- Thumbnail Classic--><a class="thumbnail-classic thumbnail-classic-sm"
                    href="images/gallery-original-4-1200x800.jpg" data-lightgallery="item"><img
                        class="thumbnail-classic-image" src="images/grid-layout-4-370x256.jpg" alt="" width="370"
                        height="256" />
                    <div class="thumbnail-classic-caption">
                        <p class="thumbnail-classic-title">Hand Blow Drying</p>
                        <p class="thumbnail-classic-text">Special</p>
                    </div>
                    <div class="thumbnail-classic-dummy"></div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic--><a class="thumbnail-classic thumbnail-classic-sm"
                    href="images/gallery-original-5-1200x800.jpg" data-lightgallery="item"><img
                        class="thumbnail-classic-image" src="images/grid-layout-5-370x256.jpg" alt="" width="370"
                        height="256" />
                    <div class="thumbnail-classic-caption">
                        <p class="thumbnail-classic-title">Nail Trimming</p>
                        <p class="thumbnail-classic-text">General</p>
                    </div>
                    <div class="thumbnail-classic-dummy"></div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 3">
                <!-- Thumbnail Classic--><a class="thumbnail-classic thumbnail-classic-sm"
                    href="images/gallery-original-6-1200x800.jpg" data-lightgallery="item"><img
                        class="thumbnail-classic-image" src="images/grid-layout-6-370x256.jpg" alt="" width="370"
                        height="256" />
                    <div class="thumbnail-classic-caption">
                        <p class="thumbnail-classic-title">De-shedding</p>
                        <p class="thumbnail-classic-text">Other</p>
                    </div>
                    <div class="thumbnail-classic-dummy"></div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 3">
                <!-- Thumbnail Classic--><a class="thumbnail-classic thumbnail-classic-sm"
                    href="images/gallery-original-7-1200x800.jpg" data-lightgallery="item"><img
                        class="thumbnail-classic-image" src="images/grid-layout-7-370x256.jpg" alt="" width="370"
                        height="256" />
                    <div class="thumbnail-classic-caption">
                        <p class="thumbnail-classic-title">Ear Cleaning</p>
                        <p class="thumbnail-classic-text">Other</p>
                    </div>
                    <div class="thumbnail-classic-dummy"></div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 3">
                <!-- Thumbnail Classic--><a class="thumbnail-classic thumbnail-classic-sm"
                    href="images/gallery-original-8-1200x800.jpg" data-lightgallery="item"><img
                        class="thumbnail-classic-image" src="images/grid-layout-8-370x256.jpg" alt="" width="370"
                        height="256" />
                    <div class="thumbnail-classic-caption">
                        <p class="thumbnail-classic-title">Sanitary Trimming</p>
                        <p class="thumbnail-classic-text">Other</p>
                    </div>
                    <div class="thumbnail-classic-dummy"></div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-4 isotope-item" data-filter="Type 1">
                <!-- Thumbnail Classic--><a class="thumbnail-classic thumbnail-classic-sm"
                    href="images/gallery-original-9-1200x800.jpg" data-lightgallery="item"><img
                        class="thumbnail-classic-image" src="images/grid-layout-9-370x256.jpg" alt="" width="370"
                        height="256" />
                    <div class="thumbnail-classic-caption">
                        <p class="thumbnail-classic-title">Scissoring</p>
                        <p class="thumbnail-classic-text">General</p>
                    </div>
                    <div class="thumbnail-classic-dummy"></div>
                </a>
            </div>
        </div>
    </div>
</section>
<?php
include('layouts/footer.php');
?>