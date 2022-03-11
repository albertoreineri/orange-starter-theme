<?php
$posttags = get_the_tags();
if ($posttags) {
    foreach ($posttags as $tag) {
        echo $tag->name . ' ';
    }
}
