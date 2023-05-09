<?php
get_header();
the_post();
?>

<div class="container" style="margin-top: 125px;">
    <div class="row">
        <div class="col-md-12">
            <?= get_the_post_thumbnail() ?>

            <h3 class="my-3">
                <a><?= get_the_title() ?></a>
            </h3>
            <div>
                <?= get_the_content() ?>
            </div>
        </div>
        <div class="col-md-12">
            <?= comments_template() ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>

<!-- 46:21 -->