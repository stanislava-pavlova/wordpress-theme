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

    label {
        margin-top: 20px;
        font-size: 1.2em;
    }

    input[type="text"] {
        padding: 10px;
        font-size: 1.2em;
        border: 2px solid #ccc;
        border-radius: 4px;
    }
</style>

<div class="th-settings">
    <h3>Home page header settings</h3>
    <form method="POST" action="options.php">
        <?php settings_fields('hpg') ?>

        <label>Company name</label>
        <input type="text" name="hp_company" value="<?= get_option('hp_company') ?>" />

        <label>Heading</label>
        <input type="text" name="hp_heading" value="<?= get_option('hp-heading') ?>" />

        <label>Sub heading</label>
        <input type="text" name="hp_sub_heading" value="<?= get_option('hp_sub_heading') ?>" />

        <label>Button</label>
        <input type="text" name="hp_button" value="<?= get_option('hp-button') ?>" />

        <?= submit_button() ?>
    </form>
</div>