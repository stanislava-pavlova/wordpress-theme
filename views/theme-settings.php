<style>
    h3 {
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        max-width: 500px;
        margin: 0 auto;
    }

    label,
    button#uploadLogo {
        margin-top: 20px;
        font-size: 1.2em;
    }

    input[type="text"] {
        padding: 10px;
        font-size: 1.2em;
        border: 2px solid #ccc;
        border-radius: 4px;
    }

    button#uploadLogo {
        border-radius: 5px;
        padding: 7px;
        border: none;
        color: white;
        background-color: #0275d8;
    }

    button:hover {
        cursor: pointer;
    }
</style>

<?php
wp_enqueue_media();
?>

<div class="th-settings">
    <h3>Home page header settings</h3>
    <form method="POST" action="options.php">
        <?php settings_fields('hpg') ?>

        <label>Company name</label>
        <input type="text" name="hp_company" value="<?= get_option('hp_company') ?>" />

        <label>Heading</label>
        <input type="text" name="hp_heading" value="<?= get_option('hp_heading') ?>" />

        <label>Sub heading</label>
        <input type="text" name="hp_sub_heading" value="<?= get_option('hp_sub_heading') ?>" />

        <label>Theme navigation background color</label>
        <input type="text" name="main_color" value="<?= get_option('main_color') ?>" />

        <label>Theme navigation text color</label>
        <input type="text" name="header_text_color" value="<?= get_option('header_text_color') ?>" />

        <label>Button</label>
        <input type="text" name="hp_button" value="<?= get_option('hp_button') ?>" />

        <label>Subscription sub heading</label>
        <input type="text" name="hp_subscr_sub_heading" value="<?= get_option('hp_subscr_sub_heading') ?>" />

        <label>Subscription heading</label>
        <input type="text" name="hp_subscr_heading" value="<?= get_option('hp_subscr_heading') ?>" />

        <button id="uploadLogo" class="btn btn-primary">Upload Logo</button>
        <img src="<?= get_option('logo') ?>" id="logoImage" style="width:40%;" class="img-responsive" />
        <input value="<?= get_option('logo') ?>" type="hidden" name="logo" id="logo" />

        </hr>

        <button id="uploadBanner" class="btn btn-primary">Upload Banner</button>
        <img src="<?= get_option('hp_banner') ?>" id="bannerImage" style="width:40%;" class="img-responsive" />
        <input value="<?= get_option('hp_banner') ?>" type="hidden" name="hp_banner" id="hp_banner" />

        <?= submit_button() ?>
    </form>
</div>

<script>
    jQuery(document).ready(function($) {
        var mediaUploader;
        $('#uploadLogo').click(function(e) {
            e.preventDefault();
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }

            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose Logo Picture',
                button: {
                    text: 'Choose Picture'
                },
                multiple: false
            });

            mediaUploader.on('select', function() {
                attachment = mediaUploader.state().get('selection').first().toJSON();
                $('#logoImage').attr('src', attachment.url);
                $('#logo').val(attachment.url);
            });

            mediaUploader.open();
        });
    });

    jQuery(document).ready(function($) {
        var mediaUploader;
        $('#uploadBanner').click(function(e) {
            e.preventDefault();
            if (mediaUploader) {
                mediaUploader.open();
                return;
            }

            mediaUploader = wp.media.frames.file_frame = wp.media({
                title: 'Choose Logo Picture',
                button: {
                    text: 'Choose Picture'
                },
                multiple: false
            });

            mediaUploader.on('select', function() {
                attachment = mediaUploader.state().get('selection').first().toJSON();
                $('#bannerImage').attr('src', attachment.url);
                $('#hp_banner').val(attachment.url);
            });

            mediaUploader.open();
        });
    });
</script>