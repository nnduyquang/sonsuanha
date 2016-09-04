<?php
/**
 * Created by PhpStorm.
 * User: phuongth
 * Date: 7/23/15
 * Time: 9:28 PM
 */

get_header();
do_action('g5plus_before_archive');
echo do_shortcode('[g5plusframework_portfolio show_category="yes" category_style="cat-style-normal" column="4" item="8" order="DESC" show_pagging="1" ]');
get_footer();
?>