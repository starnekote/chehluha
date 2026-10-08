<?php 
add_filter('woocommerce_enqueue_styles', '__return_false'); 

remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );


?>