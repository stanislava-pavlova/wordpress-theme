<?php
get_header();
?>

<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h6>Digital Media Agency</h6>
                                    <h2>We Boost Your Website Traffic</h2>
                                    <p>This template is brought to you by TemplateMo website. Feel free to use this for a commercial purpose. You are not allowed to redistribute the template ZIP file on any other template website. Thank you.</p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-first-button scroll-to-section">
                                        <a href="#contact">Free Quote</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="assets/images/slider-dec.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="free-quote" class="free-quote">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <div class="section-heading  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6>Get Your Free Quote</h6>
                    <h4>Grow With Us Now</h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <form id="search" action="#" method="GET">
                    <div class="row">
                        <div class="col-lg-4 col-sm-4">
                            <fieldset>
                                <input type="web" name="web" class="website" placeholder="Your website URL..." autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <fieldset>
                                <input type="address" name="address" class="email" placeholder="Email Address..." autocomplete="on" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <fieldset>
                                <button type="submit" class="main-button">Get Quote Now</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="portfolio" class="our-portfolio section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-heading wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s">
                    <h6>Our Portofolio</h6>
                    <h4>See Our Recent <em>Projects</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
        <div class="row">
            <div class="col-lg-12">
                <div class="loop owl-carousel">
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="assets/images/portfolio-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Website Builder</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="assets/images/portfolio-01.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Website Builder</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="assets/images/portfolio-02.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Website Builder</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="assets/images/portfolio-03.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Website Builder</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#">
                            <div class="portfolio-item">
                                <div class="thumb">
                                    <img src="assets/images/portfolio-04.jpg" alt="">
                                </div>
                                <div class="down-content">
                                    <h4>Website Builder</h4>
                                    <span>Marketing</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <?php
        $args = [
            'posts_per_page' => 3
        ];
        $events = query_posts($args);
        ?> -->

<div id="blog" class="blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="section-heading">
                    <h6>Recent News</h6>
                    <h4>Check Our Blog <em>Posts</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-6 show-up wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="blog-post">
                    <div class="row">
                        <?php
                        for ($i = 0; $i < count($events); $i++) :
                            $txt = strip_tags($events[$i]->post_content);
                            $txt = mb_substr($txt, 0, 120);
                            $txt = trim($txt);
                        ?>
                            <div class="col-md-12">
                                <div class="thumb">
                                    <a href="<?= $events[$i]->guid ?>">
                                        <!-- <img class="img-fluid mb-2" src="<?= $postImg ?>" /> -->
                                        <img class="img-fluid mb-2" src="<?= getPostImageUrlOrDefault($events[$i]) ?>" />
                                    </a>
                                </div>
                                <div class="down-content">
                                    <span class="category">SEO Analysis</span>
                                    <span class="date"><?= get_the_date() ?></span>
                                    <a href="<?= $events[$i]->guid ?>">
                                        <h4><?= $events[$i]->post_title ?></h4>
                                    </a>
                                    <p><?= $txt ?>...</p>
                                    <span class="author">By: <?= $events[$i]->post_author ?></span>
                                    <div class="border-first-button"><a href="<?= get_the_post_thumbnail_url($events[$i]) ?>">Discover More</a></div>
                                </div>
                            </div>
                        <?php
                        endfor;
                        ?>
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="blog-posts">
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="post-item">
                                <div class="thumb">
                                    <a href="<?= $events[$i]->guid ?>">
                                        <img class="img-fluid mb-2" src="<?= get_the_post_thumbnail_url($events[$i]) ?>" />
                                    </a>
                                </div>
                                <div class=" right-content">
                                    <span class="category">SEO Analysis</span>
                                    <span class="date">24 September 2021</span>

                                    <p>Lorem ipsum dolor sit amet, cocteturi adipiscing eliterski.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

<?php
get_footer();
?>