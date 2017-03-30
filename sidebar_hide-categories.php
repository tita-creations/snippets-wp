/** cacher certaines catégories dans le widget de la sidebar
 * http://coffeecupweb.com/how-to-exclude-or-hide-categories-from-category-widget-in-wordpress-sidebar/
 * Hide categories from WordPress category widget
 **/
 

<?php 

function exclude_widget_categories($args){
    $exclude = "1,8,9";
    $args["exclude"] = $exclude;
    return $args;
}
add_filter("widget_categories_args","exclude_widget_categories");

?>