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
                                    <h6><?= get_option('hp_company') ?></h6>
                                    <h2><?= get_option('hp_heading') ?></h2>
                                    <p><?= get_option('hp_sub_heading') ?></p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="border-first-button scroll-to-section">
                                        <a href="#contact"><?= get_option('hp_button') ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                            <img src="<?= get_option('hp_banner') ?>" alt="banner">
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
                    <h6><?= get_option('hp_subscr_sub_heading') ?></h6>
                    <h4><?= get_option('hp_subscr_heading') ?></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2  wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <?php
                        echo do_shortcode('[custom_contact_form]');
                        ?>
                    </main>
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
        </div>

        <div class="row mb-2">
            <?php
            for ($i = 0; $i < count($events); $i++) :
                $txt = strip_tags($events[$i]->post_content);
                $txt = mb_substr($txt, 0, 120);
                $txt = trim($txt);
            ?>
                <div class="col-md-6">
                    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <?php
                            $categories = get_the_category($events[$i]->ID);
                            if ($categories) {
                                echo '<span class="category" style="font-size: 13px">';
                                foreach ($categories as $category) {
                                    echo esc_html($category->name) . ' ';
                                }
                                echo '</span>';
                            }
                            ?>

                            <a href="<?= $events[$i]->guid ?>" class="mb-0">
                                <h4 style="color: black;"><?= $events[$i]->post_title ?></h4>
                            </a>
                            <div class="mb-1 text-body-secondary date"><?= get_the_date() ?></div>
                            <p class="card-text mb-auto">
                                <?= $txt ?>...
                            </p>
                            <a href="<?= post_permalink($events[$i]) ?>" style="color: #414141 !important;">Continue reading</a>
                        </div>
                        <div class="col-auto d-none d-lg-block">
                            <img class="bd-placeholder-img" style="width:210px; height:255px" src="<?= getPostImageUrlOrDefault($events[$i]) ?>" />
                        </div>
                    </div>
                </div>
            <?php
            endfor;
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>