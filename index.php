<?php
get_header();

function getPostCategoriesAsString($categories)
{
    $tmpArray = [];

    foreach ($categories as $category) {
        $tmpArray[] = $category->name;
    }

    return implode(', ', $tmpArray);
}
?>

<div class="container" style="padding-top: 120px">
    <div class="row" style="padding: 15px;">
        <?php
        while (have_posts()) :
            the_post();
        ?>

            <div class="col-lg-12">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary category"><?= getPostCategoriesAsString(get_the_category()) ?></strong>
                        <h3 class="mb-0">
                            <a href="<?= post_permalink() ?>" style="color: black !important;">
                                <?= get_the_title() ?>
                            </a>
                        </h3>
                        <div class="mb-1 text-body-secondary date"><?= get_the_date() ?></div>
                        <div class="card-text mb-auto">
                            <?php
                            $content = get_the_content();
                            $clearContent = strip_tags($content);
                            $finalContent = mb_substr($clearContent, 0, 150);
                            ?>
                            <?= $finalContent ?>...
                        </div>
                        <small class="author"><?= get_the_author() ?></small>
                    </div>
                    <?php
                    if (strlen(get_the_post_thumbnail_url()) > 0) :
                    ?>
                        <div class="col-auto d-none d-lg-block">
                            <img src="<?= get_the_post_thumbnail_url() ?>" style="width: 250px; height:250px;" alt="image" />
                        </div>
                    <?php
                    endif;
                    ?>
                </div>
            </div>

        <?php
        endwhile;
        ?>
    </div>
    <div class="row">
        <?php custom_pagination(); ?>
    </div>
</div>

<section class="reviews" id="reviews">
	<h1 class="heading">News</h1>
	<div class="box-container container">
		<?php query_posts('cat=news');?>
		<?php if(have_posts()):while (have_posts()) : the_post();?>

		<div class="box">
		<h2><?php the_title();?></h2>
		<p><?php the_content();?></p>
	</div>
<?php
endwhile;
endif;
?>
</section>

<?php
get_footer();
?>