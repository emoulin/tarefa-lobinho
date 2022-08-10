<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
?>

<?php
function my_pagination() {
global $wp_query;

echo paginate_links( array(
    'base' => str_replace( 9999999999999, '%#%', esc_url( get_pagenum_link( 9999999999999 ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var( 'paged' ) ),
    'total' => $wp_query->max_num_pages,
    'type' => 'list',
    'prev_next' => true,
    'prev_text' => 'Página Anterior',
    'next_text' => 'Próxima Página',
    'before_page_number' => '-',
    'after_page_number' => '>',
    'show_all' => false,
    'mid_size' => 3,
    'end_size' => 1,
) );
}
?>