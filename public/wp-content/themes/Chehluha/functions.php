<?php
require_once get_template_directory().'/incs/woocommerce-hooks.php';
add_action('after_setup_theme', function() {add_theme_support('woocommerce');});
add_action('after_setup_theme', 'add_menu');
    function add_menu() {
        register_nav_menu('top', 'Головне меню');
        register_nav_menu('bottom', 'Меню футер');
    }

function chehluha_widgets_init() {

    register_sidebar([
        'name'          => 'Header Widget',
        'id'            => 'header-widget',
        'description'   => 'Категорії для бокового меню header',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ]);

}

add_action( 'widgets_init', 'chehluha_widgets_init' );


add_action('wp_enqueue_scripts', 'add_scripts_and_styles');
function add_scripts_and_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('swiper', get_template_directory_uri().'/assets/css/swiper-bundle.min.css');
    wp_enqueue_script('main', get_template_directory_uri().'/assets/js/main.js', array('jquery', 'wc-cart'), null, true);
    wp_enqueue_script('swiper', get_template_directory_uri().'/assets/js/swiper-bundle.min.js', array(), null, true);
}

/**
 * Додаємо клас category-card до посилань
 * WooCommerce категорій у меню.
 */
add_filter('nav_menu_link_attributes', 'chehluha_category_menu_link_attributes', 10, 4);

function chehluha_category_menu_link_attributes($atts, $item, $args, $depth)
{
    if (
        $item->type === 'taxonomy' &&
        $item->object === 'product_cat'
    ) {
        $atts['class'] = isset($atts['class'])
            ? $atts['class'] . ' category-card'
            : 'category-card';
    }

    return $atts;
}


/**
 * Формуємо внутрішню розмітку картки
 * для WooCommerce категорій у меню.
 */
add_filter('nav_menu_item_title', 'chehluha_category_menu_item_title', 10, 4);

function chehluha_category_menu_item_title($title, $item, $args, $depth)
{
    // Перевіряємо, чи це категорія товарів WooCommerce
    if (
        $item->type !== 'taxonomy' ||
        $item->object !== 'product_cat'
    ) {
        return $title;
    }

    // Отримуємо категорію
    $term = get_term($item->object_id, 'product_cat');

    if (!$term || is_wp_error($term)) {
        return $title;
    }


    /*
     * ============================
     * 1. Назва категорії
     * ============================
     */

    $category_name = $term->name;


    /*
     * ============================
     * 2. Опис категорії
     * ============================
     *
     * Наприклад:
     * "Форт, Glock, Beretta"
     */

    $description = wp_strip_all_tags($term->description);

    // Якщо опису немає — показуємо порожній рядок
    if (empty($description)) {
        $description = '';
    }


    /*
     * ============================
     * 3. Кількість товарів
     * ============================
     */

    $product_count = (int) $term->count;


    /*
     * ============================
     * 4. Зображення категорії
     * ============================
     */

    $thumbnail_id = get_term_meta(
        $term->term_id,
        'thumbnail_id',
        true
    );

    $image_html = '';

    if ($thumbnail_id) {

        $image_url = wp_get_attachment_image_url(
            $thumbnail_id,
            'full'
        );

        if ($image_url) {

            $image_html = sprintf(
                '<img src="%s" alt="%s" class="category-card__image">',
                esc_url($image_url),
                esc_attr($category_name)
            );
        }
    }


    /*
     * ============================
     * 5. Формуємо HTML
     * ============================
     */

    $html = '

        <div class="category-card__image-wrapper">
            ' . $image_html . '
        </div>

        <div class="category-card__content">

            <h3 class="category-card__title">
                ' . esc_html($category_name) . '
                <span class="category-card__count-bracket">
                    (' . $product_count . ')
                </span>
            </h3>

            <p class="category-card__description">
                ' . esc_html($description) . '
            </p>

            <div class="category-card__bottom">

                <span class="category-card__count">
                    ' . $product_count . ' ' . (
                        $product_count === 1
                            ? 'МОДЕЛЬ'
                            : 'МОДЕЛЕЙ'
                    ) . '
                </span>

                <span class="category-card__arrow">

                    <svg
                        width="12"
                        height="12"
                        viewBox="0 0 12 12"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            d="M9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12L4.93125 10.95L9.13125 6.75Z"
                            fill="currentColor"
                        />
                    </svg>

                </span>

            </div>

        </div>

    ';

    return $html;
}

?>
