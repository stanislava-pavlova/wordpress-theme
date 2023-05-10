<?php
get_header();
?>

<div class="container" style="padding-top: 120px;">
    <div class="row">
        <div class="col-md-8">
            <?= get_the_post_thumbnail() ?>

            <h3 class="my-3">
                <a><?= get_the_title() ?></a>
            </h3>
            <div>
                <?= get_the_content() ?>
            </div>
        </div>
        <!-- SIDEBAR -->
        <div class="col-md-4">
            <?php
            dynamic_sidebar('sidebar');
            ?>
        </div>
    </div>
</div>

<?php
get_footer();
?>