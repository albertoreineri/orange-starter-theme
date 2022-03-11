<?php 

if (is_category()) {
    single_cat_title();
} elseif (is_tag()) {
    single_tag_title();
} elseif (is_author()) {
    the_post();
    echo 'Archivio autore: ' . get_the_author();
    rewind_posts();
} elseif (is_day()) {
    echo 'Archivio giornaliero: ' . get_the_date();
} elseif (is_month()) {
    echo 'Archivio mensile: ' . get_the_date('F Y');
} elseif (is_year()) {
    echo 'Archivio annuale: ' . get_the_date('Y');
} else {
    echo 'Archivio:';
}
