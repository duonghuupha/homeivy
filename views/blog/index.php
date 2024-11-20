<?php
$item = $this->jsonObj;
$json = $this->json; $perpage = $this->perpage; $pages = $this->page;
?>
<!-- Breadcrumbs-->
<section class="breadcrumbs-custom bg-image" style="background-image: url(<?php echo URL.'/styles/' ?>images/bg_breach.png);">
    <div class="breadcrumbs-custom-inner">
        <div class="breadcrumbs-custom-container container">
            <div class="breadcrumbs-custom-main">
                <h6 class="breadcrumbs-custom-subtitle title-decorated">Bài viết</h6>
                <h1 class="breadcrumbs-custom-title"><?php echo $item[0]['title'] ?></h1>
            </div>
        </div>
    </div>
</section>
<section class="section section-lg">
    <div class="container">
        <div class="row row-50 row-xxl-70">
            <?php
            foreach($json['rows'] as $row){
                $width = 570; $height = 352;
                $img_src = $this->_Convert->convert_img('blog/images/', $row['image'], $width, $height, 1);
            ?>
            <div class="col-md-6 scaleFadeInWrap">
                <!-- Post Modern-->
                <div class="wow scaleFadeIn">
                    <article class="post-modern">
                        <a class="post-modern-media" href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-post-'.base64_encode($row['id']).'html' ?>">
                            <img src="<?php echo URL_IMAGE.'/blog/images/'.$width.'x'.$height.'/'.$img_src ?>" alt="" width="570" height="352" />
                        </a>
                        <h4 class="post-modern-title">
                            <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-post-'.base64_encode($row['id']).'html' ?>">
                                <?php echo $this->_Convert->cut($row['title'], 52) ?>
                            </a>
                        </h4>
                        <ul class="post-modern-meta">
                            <li>
                                <time datetime="<?php echo date("Y", strtotime($row['create_at'])) ?>">
                                    <?php echo date("M j, Y", strtotime($row['create_at'])).' lúc '.date("g:i a", strtotime($row['create_at'])) ?>
                                </time>
                            </li>
                        </ul>
                        <p><?php echo $this->_Convert->cut($row['info'], 200) ?></p>
                    </article>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
        <?php
        if($jsonObj['total'] > $perpage){
            $pagination = $this->_Convert->pagination($jsonObj['total'], $pages, $perpage);
            $createlink = $this->_Convert->createLinks($jsonObj['total'], $perpage, $pagination['number'], 1);
        ?>
        <div class="pagination">
            <?php echo $createlink ?>
        </div>
        <?php
        }
        ?>
    </div>
</section>