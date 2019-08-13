<?php
$categories = get_the_category();
$separator = ", ";
$output = '';

if ($categories) {
    foreach ($categories as $category) {
        $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
    }
    echo trim($output, $separator);
}
?>