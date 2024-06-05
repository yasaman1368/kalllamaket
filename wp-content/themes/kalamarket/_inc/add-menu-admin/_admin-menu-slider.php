
<?php
function kmk_render_slider_html()
{
    //capability
    if (!current_user_can('manage_options')) {
        return;
    }
    if (isset($_GET['setting_update'])) {
        add_settings_error('setting', 'setting-mesage', 'تنظیمات ذخیره گردید');
        settings_errors('setting-message');
    }
    ?>
    <div class="rp-wrap">
        <form action="options.php" method="post" class="slider-setting">
            <h1><?php echo esc_html(get_admin_page_title()) ?></h1>
            <?php do_settings_sections('slider-setting') ?>
            <?php settings_fields('slider-settings') ?>
            <?php submit_button() ?>
        </form>
    </div>
    <?php
}

/**
 * Fires as an admin screen or script is being initialized.
 *
 */
function  kmk_slider_action_admin_init(): void
{
    $args = [
        'type' => 'string',
        'sanitize_callback' => 'sanitize_text_field',
        'default' => NULL,
    ];
    $settings_array = [
        '_name_slider_1',
        '_name_slider_2',
        '_name_slider_3',
        '_name_slider_4'
    ];
    foreach ($settings_array as $item) {
        register_setting('slider-settings', $item, $args);
    }
    add_settings_section('slider-setting-section', '', '', 'slider-setting');
    add_settings_field(
        'slider-setting-field',
        '',
        'kmk_slider_setting_render_html',
        'slider-setting',
        'slider-setting-section'
    );
}
add_action('admin_init', 'kmk_slider_action_admin_init');

/**
 * Fires as an admin screen or script is being initialized.
 *
 */

function  kmk_slider_setting_render_html()
{

    $name_slider_1 = get_option('_name_slider_1');
    $name_slider_2 = get_option('_name_slider_2');
    $name_slider_3= get_option('_name_slider_3');
    $name_slider_4= get_option('_name_slider_4');
    $args=[
        'orderby' => 'name',
        'order'   => 'ASC',
        'post_type'=>'product'
    ];
    $categories=get_categories($args);
    var_dump($categories);
    ?>
    <div class="el-wraper">
        <label for="slider1">نام دسته بندی محصول برای اسلایدر 1</label>
        <input type="text" id="slider1" name="_name_slider_1" value="<?php echo isset( $name_slider_1) ? esc_attr( $name_slider_1) : '' ?>">
        <label for="slider2">نام دسته بندی محصول برای اسلایدر 2</label>
        <input type="text" id="slider2" name="_name_slider_2" value="<?php echo isset( $name_slider_2) ? esc_attr( $name_slider_2) : '' ?>">
        <label for="slider3">نام دسته بندی محصول برای اسلایدر 3</label>
        <input type="text" id="slider3" name="_name_slider_3" value="<?php echo isset( $name_slider_3) ? esc_attr( $name_slider_3) : '' ?>">
        <label for="slider4">نام دسته بندی محصول برای اسلایدر 4</label>
        <input type="text" id="slider4" name="_name_slider_4" value="<?php echo isset( $name_slider_4) ? esc_attr( $name_slider_4) : '' ?>">
    </div>
    <?php
}

